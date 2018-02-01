# Clear DB Parse Url

A simple PHP script to parse `CLEARDB_DATABASE_URL` environment var for ClearDB MySQL add-on on Heroku.

## Usage

```php
php -f parseClearDBUrl.php "mysql://abc123456789:123456@eu-cdbr-west-02.cleardb.net/heroku_def123456789?reconnect=true"
```

`mysql://abc123456789:123456@eu-cdbr-west-02.cleardb.net/heroku_def123456789?reconnect=true` is the `CLEARDB_DATABASE_URL` config var of your Heroku app.

## Display

```php
Array
(
    [scheme] => mysql
    [host] => eu-cdbr-west-02.cleardb.net
    [user] => abc123456789
    [pass] => 123456
    [path] => /heroku_def123456789
    [query] => reconnect=true
)
```