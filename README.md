# CSS-Tracking
This project combines CSS, Javascript and PHP to track users.
I made this because I was researching in to tracking cookies, however if you clear your cookies you don't clear your
cached files so I thought it'd be neat if you could make (sort-of) malicious css. 

It could also be used in combination with tracking cookies! 

# How it works
* [style.php](style.php) has a content-type of text/css so it can output dynamically generated css
* [style.php](style.php) inserts a psuedo-element that is not visible in to [index.html](index.html) and its value is a uniquely generated ID
* [style.php](style.php) automatically caches the css
* [track.js](track.js) fetches the unique identifier from the css file with a query selector

* ```may be used to send the uid to a database with ajax```
* [.htaccess](.htaccess) redirects all .php extensions to their .css counter-part so you may reference style.css instead of style.php

