# CSS-Tracking
This project combines CSS, Javascript and PHP to track users.
# How it works
* [style.php](style.php) has a content-type of text/css so it can output dynamically generated css
* [style.php](style.php) inserts a psuedo-element that is not visible in to [index.html](index.html) and its value is a uniquely generated ID
* [style.php](style.php) automatically caches the css
* [track.js](track.js) fetches the unique identifier from the css file with a query selector
* [.htaccess](.htaccess) redirects all .php extensions to their .css counter-part so you may reference style.css instead of style.php

