---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/SiteCommands.php
command: site:alias
---
# site:alias

Show site alias details, or a list of available site aliases.

#### Examples

- <code>drush site:alias</code>. List all alias records known to drush.
- <code>drush site:alias @dev</code>. Print an alias record for the alias *dev*.

#### Arguments

- **[site]**. Site alias or site specification.

#### Options

- ** --format[=FORMAT]**. Format the result data. Available formats: csv,json,list,null,php,print-r,tsv,var_dump,var_export,xml,yaml [default: *yaml*]
- ** --fields=FIELDS**. Limit output to only the listed elements. Name top-level elements by key, e.g. "--fields=name,date", or use dot notation to select a nested element, e.g. "--fields=a.b.c as example".
- ** --field=FIELD**. Select just one field, and force format to *string*.
- ** --filter[=FILTER]**. Filter output based on provided expression

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Creating site aliases for running Drush on remote sites.](../../vendor/drush/drush/docs/site-aliases.md) (docs:aliases)
- [Output formatters and filters: control the command output](../../vendor/drush/drush/docs/output-formats-filters.md) (docs:output-formats-filters)

#### Aliases

- sa

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.