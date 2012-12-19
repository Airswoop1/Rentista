/**
 * Returns the number of seconds that have elapsed since the specified date
 * string or object. If the supplied date is in the past, the return value
 * will be positive. If the supplied date is in the future, the return value
 * will be negative. This function will return NaN if the supplied date is
 * not parsable.
 * @param {String|Object} then Date to process, String or Date object
 * @return {String} The number of seconds since the supplied date
 */
var secondsSince = function (then) {
    // If the supplied date is not a Date object, try to make it one
    if (then instanceof Date === false) {
        then = new Date(then);
    }

    var diff = (new Date()).getTime() - then.getTime();
    return Math.floor(diff / 1000);
};

/**
 * Takes an absolute date -- either as a Date object or as a String (in any
 * format that Date.parse() will accept) -- and converts it into a relative
 * string ("48 minutes ago"). A cutoff can also be specified: If the date
 * being analyzed is older than this cutoff, it will be returned in an
 * absolute format like "Mar 01, 2012 4:19 PM EDT" instead. The cutoff is
 * specified in a human-readable format, like "4 hours", "90 days", "60
 * minutes", etc. The singular and plural forms of 'year', 'month', 'week',
 * 'day', 'hour', and 'minute' are recognized as cutoff intervals. If the
 * cutoff argument is omitted/invalid, the default value is "4 hours".
 * @param {String|Object} then Date to process, String or Date object
 * @param {String} cutoff Optional cutoff parameter
 * @return {String} The result of the date calculation
 */

var timeAgo = (function () {
    var increments = {
        year: 60 * 60 * 24 * 365.25,
        month: 60 * 60 * 24 * 30.4375,
        week: 60 * 60 * 24 * 7,
        day: 60 * 60 * 24,
        hour: 60 * 60,
        minute: 60
    };

    // DEFAULT: How much time needs to pass before switching to absolute mode
    var defaultCutoff = 4 * increments.hour;

    // Returns "num str" if num is 1, and "num strs" otherwise
    var pluralize = function (num, str) {
        num = parseInt(num, 10);
        return num + ' ' + str + (num !== 1 ? 's' : '');
    };

    return function (then, cutoff) {
        // If the supplied date is not a Date object, try to make it one
        if (then instanceof Date === false) {
            then = new Date(then);
        }

        // Parse the cutoff configuration
        cutoff = (function () {
            var cutoffParts = /^(\d+)\s*(.+?)s?$/i.exec(cutoff) || [];
            if (increments.hasOwnProperty(cutoffParts[2])) {
                return cutoffParts[1] * increments[cutoffParts[2]];
            } else {
                return defaultCutoff;
            }
        })();

        var diff = secondsSince(then); 
        if (isNaN(diff) || diff < 1 || diff >= cutoff) {
            // Date is invalid, in the future, or too old to show in relative mode
            return then.toString();
        }

        // Step through the incrememt sizes until a nonzero integer comes out
        for (var inc in increments) {
            if (increments.hasOwnProperty(inc)) {
                var incDiff = Math.floor(diff / increments[inc]);
                if (incDiff >= 1) {
                    return pluralize(incDiff, inc) + ' ago';
                }
            }
        }

        return 'moments ago';
    };
})();