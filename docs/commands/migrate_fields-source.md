---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/MigrateRunnerCommands.php
command: migrate:fields-source
---
# migrate:fields-source

:octicons-tag-24: 10.4+

List the fields available for mapping in a source.

#### Examples

- <code>migrate:fields-source article</code>. List fields for the source in the article migration.

#### Arguments

- **migrationId**. The ID of the migration.

#### Options

- ** --format[=FORMAT]**. Format the result data. Available formats: csv,json,list,null,php,print-r,sections,string,table,tsv,var_dump,var_export,xml,yaml [default: *table*]
- ** --fields=FIELDS**. Available fields: Field name (machine_name), Description (description) [default: *machine_name description*]
- ** --field=FIELD**. Select just one field, and force format to *string*.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Defining and running migrations.](../../vendor/drush/drush/docs/migrate.md) (docs:migrate)
- [Output formatters and filters: control the command output](../../vendor/drush/drush/docs/output-formats-filters.md) (docs:output-formats-filters)

#### Aliases

- mfs
- migrate-fields-source

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.