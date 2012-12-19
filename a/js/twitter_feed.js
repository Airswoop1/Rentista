$(function() {
	$.getJSON('http://api.twitter.com/1/statuses/user_timeline.json?screen_name=WorldnowNews&count=3&callback=?', function (json) {
		var output = '';
		var timestamp = '';
		$.each(json, function (i, tweet) {
			tweet.created_at = tweet.created_at.replace("+0000", "GMT");
			timestamp = timeAgo(tweet.created_at, "100 years");
			output += '<div class="entry"><span>' + tweet.text + '<br/>' + timestamp + '</span></div>';
		});
		$('#tweet_stream').html(output);
	});
});
