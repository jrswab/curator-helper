#!/usr/bin/env python3

import re, sys, language_check 
from beem.comment import Comment
from beem.discussions import Query, Discussions_by_hot

def grammarCheck(baseText):
    # use regex to remone HTML and Markdown syntax
    text = syntaxStrip(baseText)
    # TODO: allow user to select locale
    tool = language_check.LanguageTool('en-US')
    errors = tool.check(text)
    # count sentences to check against errors
    sent = text.split('.')
    errorPerc = (len(errors)/words(text))*100
    return round(errorPerc, 2)

def syntaxStrip(baseText):
    return re.sub(r'(<.*>)|\#+|(\].*\))|\[|\*+|\>', '', baseText)

def words(content):
    # remove any HTML and Markdown
    text = syntaxStrip(content)
    return len(str(text).split())

def htmlOut(uri, uriShow, content, published, body):
    # Image to replace if none found in post
    notFound = "https://media.giphy.com/media/8L0Pky6C83SzkzU55a/giphy.gif"
    # Output data with HTML
    if words(content) >= 1000:
        images = []
        imgReg = r"http\S*.(jpg|png|jpeg|gif)"
        
        # get grammar check
        errorScore = grammarCheck(body)

        for text in content.split():
            if ".jpg" in text or ".png" in text:
                try:
                    image = re.search(imgReg, text, re.IGNORECASE)
                    images.append(str(image.group()))
                except AttributeError:
                    images.append(notFound)

        try:
            topImage = images[0]
        except IndexError:
            topImage = notFound

        curated.write('\n<div class="card mb-3">\n<div class="card-body">')
        curated.write('\n<img class="card-img-top" style="max-width:500px" src="'+ 
                topImage +'" alt="Card image cap">')
        curated.write('\n<p><strong><a href="https://steemit.com/' + uri + '">' + uriShow + 
                '</a></strong></p>')
        curated.write('\n<p>Contains about ' + str(words(content)) + 
                ' words with about  ' + str(errorScore) + 
                '% of the text containing grammatical errors.</p>')
        curated.write('\n<p>Published on ' + str(published)[:-15] + '</p>')
        curated.write('\n</div>\n</div>\n')

def getPosts():
    # grab Steem URI
    q = Query(limit=50, tag=str(sys.argv[1]))
    for entry in Discussions_by_hot(q):
        # Get uri
        postUri = str(entry)
        splitUri = postUri.split()
        uriBase = splitUri[1]
        uri = uriBase[:-1]

        # grab post data from the blockchain
        post = Comment(uri)
        body = post['body']
        published = post['created']

        # cut uri display for uniformity on output
        if len(uriBase[:-1]) > 50:
            uriShow = str(uriBase[:47]) + '...'
        else:
            uriLen = len(uriBase[:-1])
            uriShow = uriBase[:-1] + '&nbsp;'*(50 - uriLen)

        # write HTML card data
        htmlOut(uri, uriShow, body, published, body)


# open file to start HTML document
with open('top.html', 'r') as top:
    # open file to end HTML document
    with open('bottom.html', 'r') as bottom:
        # open and write to HTML document
        with open('curated.html', 'w') as curated:
            # write top of HTML document
            for topLine in top:
                curated.write(topLine)

            curated.write('<p style="text-align:center">Below are the post with more than 1,000 words in the ' 
                    + sys.argv[1] + ' "hot" feed.</p>\n')
            # Get Steem data
            getPosts()

            # write bottom of HTML document
            for botLine in bottom:
                curated.write(botLine)
