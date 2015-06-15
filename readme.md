## What you can do
- gulp
- jade-php
- scss
- js minify
- image minify
- live reload

## Preparation
See <https://github.com/TatsuyaHishima/gulp-starter>  
This needs PHP version over 5.4.0

## RSS
If you can get RSS feed, add below in /src/jade/php/RSS.php line 5

```
$url = "http://yoursite/feed";
```

To view RSS feed, I'm using [rss-php](https://github.com/dg/rss-php, "rss-php").

## Usage
Firstly, type below to install module

```
npm install
```

Then, type below to launch PHP built-in server

```
gulp boot
```

Finally, to start live reload, open another terminal and type

```
gulp
```

You can enjoy live reload with PHP files!