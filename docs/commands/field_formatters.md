---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/field/FieldDefinitionCommands.php
command: field:formatters
---
# field:formatters

Lists field formatters.

#### Examples

- <code>drush field:formatters --field-type=entity_reference</code>. Lists field formatters applicable for entity reference fields.

#### Options

- ** --format[=FORMAT]**. Format the result data. Available formats: csv,json,list,null,php,print-r,tsv,var_dump,var_export,xml,yaml [default: *yaml*]
- ** --field-type=FIELD-TYPE**. Applicable field type.
- ** --fields=FIELDS**. Available fields: ID (id), Label (label), Default Settings (default_settings), Field types (field_types), Settings (settings), Class (class), Provider (provider) [default: *id label default_settings field_types*]
- ** --field=FIELD**. Select just one field, and force format to *string*.
- ** --filter[=FILTER]**. Filter output based on provided expression

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Output formatters and filters: control the command output](../../vendor/drush/drush/docs/output-formats-filters.md) (docs:output-formats-filters)

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.