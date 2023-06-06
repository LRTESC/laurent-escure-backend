# REST in peace 🎯

Your next objective is to create and expose a REST API for managing movies.

The movies API must support the following actions:

- [Creating a movie](#creating-a-movie)
- [Retrieving a movie](#retrieving-a-movie)
- [Listing all movies](#listing-all-movies)
- [Updating a movie](#updating-a-movie)
- [Deleting a movie](#deleting-a-movie)


Complete the [api](../routes/api.php) routes files to link the routes to the
appropriate [MovieController](../app/Http/Controllers/MovieController.php) methods.


--------------------------------------------------------------------------------

## Creating a movie

`POST /api/movies`

This endpoint creates a new movie.

<details>
    <summary>Example payload</summary>

```json
{
    "title": "Some movie title",
    "year": 2021,
    "poster": "http://example.org/path/to/poster.jpg"
}
```
</details>

```
🟢 sail composer test:api:create
```

> 💡 **Related documentation**
> - https://laravel.com/docs/8.x/eloquent#inserting-and-updating-models

--------------------------------------------------------------------------------

## Listing all movies

`GET /api/movies`

This endpoint returns all the movies.

<details>
    <summary>Example response</summary>

```json
{
    "data": [
        {
            "title": "Some movie title",
            "year": "2021",
            "poster": "http://example.org/path/to/poster.jpg",
            "created_at": "2021-06-01T12:13:58.000000Z",
            "updated_at": "2021-06-01T12:13:58.000000Z"
        },
        {
            "title": "Some other movie title",
            "year": "2020",
            "poster": "http://example.org/path/to/poster2.jpg",
            "created_at": "2021-06-01T12:13:58.000000Z",
            "updated_at": "2021-06-01T12:13:58.000000Z"
        }
    ]
}
```
</details>

```
🟢 sail composer test:api:list
```

> 💡 **Related documentation**
> - https://laravel.com/docs/8.x/eloquent#retrieving-models

--------------------------------------------------------------------------------

## Filtering movies by name

`GET /api/movies?search={terms}`

Building on top of the previous endpoint, add the possibility to filter the
movies by title. When the `search` query parameter is present, return only the
movies for which the title contains the search terms.

```
🟢 sail composer test:api:filter
```

> ⚠️ Don't forget to check that your previous tests still pass.


> 💡 **Related documentation**
> - https://laravel.com/docs/8.x/requests#retrieving-input
> - https://laravel.com/docs/8.x/queries
> - https://laravel.com/docs/8.x/queries#conditional-clauses


--------------------------------------------------------------------------------

## Paginating the list of movies

`GET /api/movies?perPage={n}`

Building on top the [previous endpoint](#listing-all-movies), return a paginated
response of the movies list. The number of movies to display per page should be
configurable via a `perPage` query parameter. If the parameter is missing, it
should fall back to 10 movies per page.

```
🟢 sail composer test:api:pagination
```

> ⚠️ Don't forget to check that your previous tests still pass.


> 💡 **Related documentation**
> - https://laravel.com/docs/8.x/requests#retrieving-input
> - https://laravel.com/docs/8.x/queries
> - https://laravel.com/docs/8.x/queries#conditional-clauses
> - https://laravel.com/docs/8.x/pagination


--------------------------------------------------------------------------------

## Retrieving a movie

`GET /api/movies/{movie}`

This endpoint returns a single movie.

```
🟢 sail composer test:api:show
```

<details>
    <summary>Example response</summary>

```json
{
    "data": {
        "title": "Some movie title",
        "year": "2021",
        "poster": "http://example.org/path/to/poster.jpg",
        "created_at": "2021-06-01T12:13:58.000000Z",
        "updated_at": "2021-06-01T12:13:58.000000Z"
    }
}
```
</details>


> 💡 **Related documentation**
> - https://laravel.com/docs/8.x/eloquent#retrieving-models


--------------------------------------------------------------------------------

## Updating a movie

`PATCH /api/movies/{movie}`

This endpoint updates a movie with new attributes.

```
🟢 sail composer test:api:update
```

<details>
    <summary>Example payload</summary>

```json
{
    "title": "Some updated movie title"
}
```
</details>


> 💡 **Related documentation**
> - https://laravel.com/docs/8.x/eloquent#inserting-and-updating-models


--------------------------------------------------------------------------------

## Deleting a movie

`DELETE /api/movies/{movie}`

This endpoint permanently deletes a movie.

```
🟢 sail composer test:api:delete
```


> 💡 **Related documentation**
> - https://laravel.com/docs/8.x/eloquent#deleting-models

