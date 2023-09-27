---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/pm/PmCommands.php
command: pm:list
---
# pm:list

Show a list of available extensions (modules and themes).

#### Options

- ** --format[=FORMAT]**. Format the result data. Available formats: csv,json,list,null,php,print-r,sections,string,table,tsv,var_dump,var_export,xml,yaml [default: *table*]
- ** --type[=TYPE]**. Only show extensions having a given type. Choices: module, theme. [default: *module,theme*]
- ** --status[=STATUS]**. Only show extensions having a given status. Choices: enabled or disabled. [default: *enabled,disabled*]
- ** --package=PACKAGE**. Only show extensions having a given project packages (e.g. Development).
- ** --core**. Only show extensions that are in Drupal core.
- ** --no-core**. Only show extensions that are not provided by Drupal core.
- ** --fields=FIELDS**. Available fields: Package (package), Project (project), Name (display_name), Name (name), Type (type), Path (path), Status (status), Version (version)
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

- pml
- pm-list

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.