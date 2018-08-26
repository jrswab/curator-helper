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

# open file to start HTML
with open('config/top.html') as t:
  print(t.read())

print('<h2>The Curators\' Helper</h2>')
print('<p>Created by <a href="steemit.com/@jrswab">J. R. Swab</a></p>')
print('<p>Below are the post with more than 1,000 words in the ' + sys.argv[1] + ' "hot" feed.</p>')

# grab Steem URI
q = Query(limit=60, tag=str(sys.argv[1]))
for blog in Discussions_by_hot(q):
    post = str(blog)
    splitPost = post.split()
    uriBase = splitPost[1]
    uri = uriBase[:-1]
    if len(uriBase[:-1]) > 50:
        uriShow = str(uriBase[:-51]) + '...'
    else:
        uriShow = uriBase[:-1]

    published = pub(webCrawler(uri))
    content = body(webCrawler(uri))

    if words(content) >= 1000:
        print('<div class="card mb-3">')
        print('<div class="card-body">')
        print('<p><a href="https://steemit.com/' + uri + '">' + uriShow + 
                '</a></p>')
        print('<p>Contains about ' + str(words(content)) + ' words.</p>')
        print('<p>Published ' + str(published[6:-10]) + 'prior to ' + 
                str(getTime()) + ' on ' + str(getDate()) + '</p>')
        print('</div>')
        print('</div>')

# open file to end HTML
with open('config/bottom.html') as b:
  print(b.read())
