# All your movies are belong to us 🎯

While it will be possible to add movies manually to our application later on, we
want to populate the database with some initial data.


Luckily, we have found a third-party API from which we can retrieve a list of
movies. Your task is to update the existing [`FetchMovies`][fetch-movies-command]
artisan command so that it fetches the movies from the third-party API and
inserts them into the database using Eloquent.



> 💡 **Related documentation**
> - https://laravel.com/docs/8.x/artisan
> - https://laravel.com/docs/8.x/http-client
> - https://laravel.com/docs/8.x/eloquent
> - https://laravel.com/docs/8.x/eloquent#inserting-and-updating-models


## Fetching the movies

The movies are exposed by the third-party api at the following endpoint.

```
http://localhost:3000/api/movies
```

Although not strictly required, you should use the [`Http`][http-client] Facade to fetch the
data from the endpoint because the test suite uses it to validate your
implementation.

## Inserting the movies in the database

> ⚠️ The `Movie` model needs to be created in `app/Models/Movie.php`

Loop over all the movies that you previously fetched and insert them in the
database using [Eloquent][eloquent].

## Validating your implementation

You can validate your implementation by running the following command.

```
🟢 sail composer test:populate
```


[fetch-movies-command]: ../app/Console/Commands/FetchMovies.php

[http-client]: https://laravel.com/docs/8.x/http-client
[eloquent]: https://laravel.com/docs/8.x/eloquent
