import requests, bs4, time, datetime, sys
from beem.discussions import Query, Discussions_by_hot

def getTime():
    return datetime.datetime.fromtimestamp(
            time.time()).strftime('%H:%M')

def getDate():
    return datetime.datetime.fromtimestamp(
            time.time()).strftime('%Y-%m-%d')

def webCrawler(uri):
    req = requests.get('https://busy.org/' + str(uri))
    return bs4.BeautifulSoup(req.text, 'html.parser')

def pub(postSoup):
    return str(postSoup.select('.StoryFull__header__text__date span')[0])

def body(postSoup):
    return postSoup.select('.Body--full')

def words(content):
    return len(str(content).split())

def published(uri):
    return pub(webCrawler(uri))[6:-10]

def content(uri):
    return body(webCrawler(uri))

def htmlOut(uri, uriShow):
    # Output data with HTML
    if words(content(uri)) >= 1000:
        curated.write('\n<div class="card mb-3">\n<div class="card-body">')
        curated.write('\n<p><a href="https://steemit.com/' + uri + '">' + uriShow + 
                '</a></p>')
        curated.write('\n<p>Contains about ' + str(words(content(uri))) + ' words.</p>')
        curated.write('\n<p>Published ' + str(published(uri)) + 'prior to ' + 
                str(getTime()) + ' on ' + str(getDate()) + '</p>')
        curated.write('\n</div>\n</div>\n')

def getPosts():
    # grab Steem URI
    q = Query(limit=10, tag=str(sys.argv[1]))
    for blog in Discussions_by_hot(q):
        post = str(blog)
        splitPost = post.split()
        uriBase = splitPost[1]
        uri = uriBase[:-1]

        if len(uriBase[:-1]) > 50:
            uriShow = str(uriBase[:45]) + '...'
        else:
            uriShow = uriBase[:-1]
        # write HTML card data
        htmlOut(uri, uriShow)


# open file to start HTML document
with open('top.html', 'r') as top:
    # open file to end HTML document
    with open('bottom.html', 'r') as bottom:
        # open and write to HTML document
        with open('curated.html', 'w') as curated:
            # write top of HTML document
            for topLine in top:
                curated.write(topLine)

            curated.write('<p>Below are the post with more than 1,000 words in the ' 
                    + sys.argv[1] + ' "hot" feed.</p>\n')
            # Get Steem data
            getPosts()
            # write bottom of HTML document
            for botLine in bottom:
                curated.write(botLine)
