<?php


    $context = $_GET['context'];
    $feed_domain = $_GET['feed_domain'];
    $photoset_id = $_GET['photoset_id'];

    $feeds["home"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=15&format=raw';
    $feeds["news"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=15&format=raw';
    $feeds["about-us"] = '/index.php?option=com_ninjarsssyndicator&feed_id=14&format=raw';
    $feeds["childcare"] = '/index.php?option=com_ninjarsssyndicator&feed_id=2&format=raw';
    $feeds["socialcare"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=3&format=raw';
    $feeds["healthcare"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=4&format=raw';
    $feeds["montessori-education"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=6&format=raw';
    $feeds["counselling"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=7&format=raw';
    $feeds["creative-arts"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=8&format=raw';
    $feeds["tourism"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=9&format=raw';
    $feeds["general-education"]  = 'index.php?option=com_ninjarsssyndicator&feed_id=10&format=raw';
 
    if(!$context) $context = "home";
    
    $xml = file_get_contents($feed_domain.$feeds[$context]);    
    
    /*
    file_put_contents('/var/www/my_logs/xml.log', $xml);
    file_put_contents('/var/www/my_logs/link.log', $feed_domain.$feeds[$context]);
    file_put_contents('/var/www/my_logs/context.log', $context);
    */
    
    echo $xml;
    
    
    

