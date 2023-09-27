---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/config/ConfigCommands.php
command: config:status
---
# config:status

Display status of configuration (differences between the filesystem configuration and database configuration).

#### Examples

- <code>drush config:status</code>. Display configuration items that need to be synchronized.
- <code>drush config:status --state=Identical</code>. Display configuration items that are in default state.
- <code>drush config:status --state='Only in sync dir' --prefix=node.type.</code>. Display all content types that would be created in active storage on configuration import.
- <code>drush config:status --state=Any --format=list</code>. List all config names.
- <code>drush config:status 2>&amp;1 | grep "No differences"</code>. Check there are no differences between database and exported config. Useful for CI.

#### Options

- ** --state[=STATE]**. A comma-separated list of states to filter results. [default: *Only in DB,Only in sync dir,Different*]
- ** --prefix=PREFIX**. The config prefix. For example, *system*. No prefix will return all names in the system.
- ** --format=FORMAT**. Format the result data. Available formats: csv,json,list,null,php,print-r,sections,string,table,tsv,var_dump,var_export,xml,yaml [default: *table*]
- ** --fields=FIELDS**. Available fields: Name (name), State (state)
- ** --field=FIELD**. Select just one field, and force format to *string*.
- ** --filter[=FILTER]**. Filter output based on provided expression

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Output formatters and filters: control the command output](../../vendor/drush/drush/docs/output-formats-filters.md) (docs:output-formats-filters)

#### Aliases

- cst
- config-status

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.