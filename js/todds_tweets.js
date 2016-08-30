var config = {
    "id": '558418611711143936',
    "domId": 'tweetlist',
    "maxTweets": 10,
    "enableLinks": true,
    "showRetweet": false
};
twitterFetcher.fetch(config);

// Fix Twitter Links
function changeTweetLinks() {
    $("#tweetlist.tweet-container .tweet a[data-scribe='element:url']").text('See Photo');
}
