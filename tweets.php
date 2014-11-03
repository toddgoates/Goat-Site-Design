<?php
class Tweets {
    static public function user_timeline() {
        // Twitter OAuth library: https://github.com/mynetx/codebird-php
        require_once ('codebird.php');

        // Twitter OAuth Settings:
        $CONSUMER_KEY = '0rSVji75WzL6jXkTj8kAygjKc';
        $CONSUMER_SECRET = 'mfwMgzRRgNPnqQK9F7aiKjKzjkSk1X0YYUAowwiGecvt6q2F1i';
        $ACCESS_TOKEN = '278855302-adtx4LRJDw8s2u5rm7T9Sea8XPbHRClyO9iepezm';
        $ACCESS_TOKEN_SECRET = 'BFWYEnap9oZrJquGPerHtfSZQMzxXQBp66rS8DuUfGsHd';

        // Get authenticated:
        \Codebird\Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
        $cb = \Codebird\Codebird::getInstance();
        $cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);

        // Retrieve posts:
        $username = strip_tags(trim($_GET['username']));
        $count = strip_tags(trim($_GET['count']));

        // API Settings: https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
        $params = array(
            'screen_name' => $username,
            'count' => $count
        );

        // Make the REST call:
        $data = (array) $cb->statuses_userTimeline($params);

        unset($data['httpstatus']);
        unset($data['rate']);

        // Output result in JSON:
        return json_encode($data);
    }
}

header('Content-type: application/json');
echo Tweets::user_timeline();