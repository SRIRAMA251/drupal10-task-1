---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/field/FieldBaseInfoCommands.php
command: field:base-info
---
# field:base-info

:octicons-tag-24: 11.0+

List all base fields of an entity type

#### Examples

- <code>field:base-info taxonomy_term</code>. List all base fields.
- <code>field:base-info</code>. List all base fields and fill in the remaining information through prompts.

#### Arguments

- **[entityType]**. The machine name of the entity type.

#### Options

- ** --format[=FORMAT]**. Format the result data. Available formats: csv,json,list,null,php,print-r,sections,string,table,tsv,var_dump,var_export,xml,yaml [default: *table*]
- ** --show-machine-names**. Show machine names instead of labels in option lists.
- ** --fields=FIELDS**. Available fields: Label (label), Description (description), Field name (field_name), Field type (field_type), Required (required), Translatable (translatable), Cardinality (cardinality), Default value (default_value), Default value callback (default_value_callback), Allowed values (allowed_values), Allowed values function (allowed_values_function), Selection handler (handler), Target bundles (target_bundles)
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

- field-base-info
- fbi

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.