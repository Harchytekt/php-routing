# Routing

This repo contains two example of "_native_" PHP routing.  
- a [simple routing](simple_routing), inspired by [Tania Rascia](https://www.taniarascia.com/the-simplest-php-router/);
- a [more complex one](complex_routing), inspired by [HelpInCoding](https://helpincoding.com/php-routing-with-parameters/).

## `.htaccess`

This code sets up a URL rewrite rule in an Apache server's `.htaccess` file.

The directives are explained below:  
- `DirectoryIndex index.php`: Specifies that if no file is requested, the server should use `index.php` as the default file to load.
- `RewriteEngine On`: Enables the URL rewriting engine.
- `RewriteBase /`: Sets the base URL path for all subsequent rewrite rules.
- `RewriteCond %{REQUEST_FILENAME} !-d`: Specifies a condition that the requested URL is not a directory.
- `RewriteCond %{REQUEST_FILENAME} !-f`: Specifies a condition that the requested URL is not a file.
- `RewriteRule ^(.+)$ index.php [QSA,L]`: This is the actual rewrite rule that matches the requested URL and redirects
  it to the `index.php` file.
    - `^(.+)$` matches any character sequence in the URL, while the `^` and `$` respectively signify the start and the end of the string.
    - `[QSA]` appends any query string parameters to the rewritten URL.
    - `[L]` specifies that the rewriting process should stop at this rule and no further rules should be processed.

Overall, this rule redirects all incoming requests to the index.php file, except those for directories or files that
actually exist on the server.  
This can be useful in a web application where you want to handle all requests through a single entry point, such as
an `index.php` file that dynamically generates content based on the requested URL.
