---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/sql/SqlCommands.php
command: sql:create
---
# sql:create

Create a database.

#### Examples

- <code>drush sql:create</code>. Create the database for the current site.
- <code>drush @site.test sql:create</code>. Create the database as specified for @site.test.
- <code>drush sql:create --db-su=root --db-su-pw=rootpassword --db-url="mysql://drupal_db_user:drupal_db_password@127.0.0.1/drupal_db"</code>. Create the database as specified in the db-url option.

#### Options

- ** --db-su=DB-SU**. Account to use when creating a new database.
- ** --db-su-pw=DB-SU-PW**. Password for the db-su account.
- ** --database[=DATABASE]**. The DB connection key if using multiple connections in settings.php. [default: *default*]
- ** --db-url=DB-URL**. A Drupal 6 style database URL. For example *mysql://root:pass@localhost:port/dbname*
- ** --target[=TARGET]**. The name of a target within the specified database connection. [default: *default*]
- ** --show-passwords**. Show password on the CLI. Useful for debugging.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- sql-create

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.