# A demo site for search Flickr.com photos with tags.


##Getting flickr.com API key
Visit https://www.flickr.com/services/api/explore/flickr.photos.search, click on the "Call Method", grab a free api_key for today(this key will be invalidated after about a day)

URL: https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=b1ac246de34255266b73dfd80ee65574&format=rest

## Dump the pacage to your php enabled web server

Appache example, point the DocumentRoot to flickrInt01/public folder

<VirtualHost *:8080>
    DocumentRoot /{path to the flickrInt01}/public

## Composer to get dependencies ready
  Composer install 

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).


