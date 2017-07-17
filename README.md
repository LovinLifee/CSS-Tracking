# CSS-Tracking
This project combines CSS, Javascript and PHP to track users.
# How it works
* [Style.php](style.php) has a content-type of text/css so it can output dynamically generated css
* [Style.php](style.php) inserts a psuedo-element that is not visible in to [index.html](index.html) and its value is a uniquely generated ID
* [Style.php](style.php) automatically caches the css
