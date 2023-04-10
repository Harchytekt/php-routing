# Complex routing

This is a more complex routing: the `index.php` still serves as the center of the routing, but we now use a `Route` class.

Each view is added as a route with this syntax: `$route->add("path", "file/path.php");`.  
For more complex routes which take parameters, the syntax is `$route->add("path/{parameter1}/{parameter2}", "file/path.php");`.  
In the view, the parameters will be available via `$params['parameter1']` and `$params['parameter2']`.
