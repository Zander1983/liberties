define(function (require) {

    "use strict";

 
    var Feeds = {};

   
    Feeds.getFeed = function(date_str) {
    
         var feeds = {};
         
            feeds[""]  = '/index.php?option=com_ninjarsssyndicator&feed_id=15&format=raw';
            feeds["news"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=15&format=raw';
            feeds["about-us"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=14&format=raw';
            feeds["childcare"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=2&format=raw';
            feeds["socialcare"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=3&format=raw';
            feeds["healthcare"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=4&format=raw';
            feeds["montessori-education"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=6&format=raw';
            feeds["counselling"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=7&format=raw';
            feeds["creative-arts"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=8&format=raw';
            feeds["tourism"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=9&format=raw';
            feeds["general-education"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=10&format=raw';
            feeds["youth-community"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=12&format=raw';
            feeds["information-technology"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=13&format=raw';
  
            return feeds[Backbone.history.fragment];

    };
   
    return Feeds;

    
});