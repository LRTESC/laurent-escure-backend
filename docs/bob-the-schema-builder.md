# Bob the Schema Builder 🎯


Your colleague has already created the [migration files], but the column
definitions are missing. Your very first objective will be to fix the migration
files and migrate the database.



> 💡 **Related documentation**
> - https://laravel.com/docs/8.x/migrations#columns
> - https://laravel.com/docs/8.x/migrations#available-column-types
> - https://laravel.com/docs/8.x/migrations#column-modifiers



## Fixing the `movies` table migration



Open the [create_movies_table][create-movies-table-migration] migration and
complete the blueprint definition so that it includes the columns described in the
following table.


| Column   | [Data type][column-types] | [Nullable][column-modifiers] |
| -------- |---------------------------| -----------------------------|
| `title`  | string                    | no                           |
| `year`   | small int                 | no                           |
| `poster` | string                    | yes                          |

```
🟢 sail composer test:migrations:movies
```


## Fixing the `review` table migration


Now we want to add the possibility to review movies.


For that your colleague as already created the [create_reviews_table][create-reviews-table-migration] migration.
You'll need to complete the blueprint definition so that it includes the columns described in the following table.
But since you already did it once, you should be fine 🙂.


| Column     | [Data type][column-types] | [Nullable][column-modifiers] |
| ---------- |---------------------------| -----------------------------|
| `author`   | string                    | no                           |
| `body`     | text                      | no                           |
| `movie_id` | unsigned big integer      | no                           |

```
🟢 sail composer test:migrations:reviews
```

## Migrating the database

Once you are confident that your implementation is correct, you can migrate the
database by running the following command.

```shell
sail artisan migrate:fresh
```


[migration files]: ../database/migrations
[create-movies-table-migration]: ../database/migrations/2021_05_31_151840_create_movies_table.php
[create-reviews-table-migration]: ../database/migrations/2021_05_31_151840_create_reviews_table.php

[column-types]: https://laravel.com/docs/8.x/migrations#available-column-types
[column-modifiers]: https://laravel.com/docs/8.x/migrations#column-modifiers

