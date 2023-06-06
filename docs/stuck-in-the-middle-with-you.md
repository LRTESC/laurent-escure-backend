# Stuck in the Middle with You

This application has a special route `GET /stuck-in-the-middle`. Unfortunately it
will only respond successfully if a header `X-Stuck-In-The-Middle: no` is
present on the incoming request.


Using the [`StuckInTheMiddleware`][middleware] file, find a way to inject the
`X-Stuck-In-The-Middle` header on the incoming request so that accessing the route
returns successfully.



> 💡 **Related documentation**
> - https://laravel.com/docs/8.x/middleware
> - https://laravel.com/docs/8.x/requests


## Validating your implementation

You can validate your implementation by running the following command.

```
🟢 sail composer test:middleware
```

[middleware]: ../app/Http/Middleware/StuckInTheMiddleware.php
