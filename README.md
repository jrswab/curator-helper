## If running on your own Linux Server:
Make sure to install the pip modules in the following manner:
- `sudo -H pip3 install language-check`
- `sudo -H pip3 install beem`

### To run:
1. Make sure python 3 is installed
2. Download repo
3. Enter directory
4. Run `python3 ezCurator.py technology 1000 10 25`
5. Open `curated.html` in a web browser.

- Replace `technology` with the topic of your choice.
- Replace `1000` with the word count of your choice.
- Replace `10` with the grammar error percent of your choice.
- Replace `25` with the number of "hot" posts to look through.

## Future Plans:
* Web app version:
  * Add choice to use Steemit or Busy
* General:
  * Faster content retrieval.
  * Add content sentiment with [NLTK](https://www.nltk.org/)

## To Dependencies:
- java and JDK (for grammar checker)
- pip packages
  - [language-check](https://pypi.org/project/language-check/)
  - [beem](https://beem.readthedocs.io/en/latest/installation.html)
