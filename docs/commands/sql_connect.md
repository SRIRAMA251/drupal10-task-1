---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/sql/SqlCommands.php
command: sql:connect
---
# sql:connect

A string for connecting to the DB.

#### Examples

- <code>$(drush sql:connect) < example.sql</code>. Bash: Import SQL statements from a file into the current database.
- <code>eval (drush sql:connect) < example.sql</code>. Fish: Import SQL statements from a file into the current database.

#### Options

- ** --extra=EXTRA**. Add custom options to the connect string (e.g. --extra=--skip-column-names)
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

- sql-connect

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.