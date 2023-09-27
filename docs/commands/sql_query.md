---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/sql/SqlCommands.php
command: sql:query
---
# sql:query

Execute a query against a database.

#### Examples

- <code>drush sql:query "SELECT * FROM users WHERE uid=1"</code>. Browse user record. Table prefixes, if used, must be added to table names by hand.
- <code>drush sql:query --db-prefix "SELECT * FROM {users}"</code>. Browse user record. Table prefixes are honored.  Caution: All curly-braces will be stripped.
- <code>$(drush sql:connect) < example.sql</code>. Import sql statements from a file into the current database.
- <code>drush sql:query --file=example.sql</code>. Alternate way to import sql statements from a file.
- <code>drush php:eval --format=json "return \Drupal::service('database')->query('SELECT * FROM users LIMIT 5')->fetchAll()"</code>. Get data back in JSON format. See https://github.com/drush-ops/drush/issues/3071#issuecomment-347929777.
- <code>$(drush sql:connect) -e "SELECT * FROM users LIMIT 5;"</code>. Results are formatted in a pretty table with borders and column headers.

#### Arguments

- **[query]**. An SQL query. Ignored if --file is provided.

#### Options

- ** --result-file[=RESULT-FILE]**. Save to a file. The file should be relative to Drupal root.
- ** --file=FILE**. Path to a file containing the SQL to be run. Gzip files are accepted.
- ** --file-delete**. Delete the --file after running it.
- ** --extra=EXTRA**. Add custom options to the connect string (e.g. --extra=--skip-column-names)
- ** --db-prefix**. Enable replacement of braces in your query.
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

- sqlq
- sql-query

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.