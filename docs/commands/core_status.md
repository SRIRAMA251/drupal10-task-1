---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/StatusCommands.php
command: core:status
---
# core:status

An overview of the environment - Drush and Drupal.

#### Examples

- <code>drush core-status --field=files</code>. Emit just one field, not all the default fields.
- <code>drush core-status --fields=*</code>. Emit all fields, not just the default ones.

#### Options

- ** --project=PROJECT**. A comma delimited list of projects. Their paths will be added to path-aliases section.
- ** --format[=FORMAT]**. Format the result data. Available formats: csv,json,list,null,php,print-r,string,table,tsv,var_dump,var_export,xml,yaml [default: *table*]
- ** --fields=FIELDS**. Available fields: Drupal version (drupal-version), Site URI (uri), DB driver (db-driver), DB hostname (db-hostname), DB port (db-port), DB username (db-username), DB password (db-password), DB name (db-name), Database (db-status), Drupal bootstrap (bootstrap), Default theme (theme), Admin theme (admin-theme), PHP binary (php-bin), PHP config (php-conf), PHP OS (php-os), PHP version (php-version), Drush script (drush-script), Drush version (drush-version), Drush temp (drush-temp), Drush configs (drush-conf), Drush aliases (drush-alias-files), Alias search paths (alias-searchpaths), Install profile (install-profile), Drupal root (root), Drupal Settings (drupal-settings-file), Site path (site-path), Site path (site), Themes path (themes), Modules path (modules), Files, Public (files), Files, Private (private), Files, Temp (temp), Drupal config (config-sync), Files, Public (files-path), Files, Temp (temp-path), Other paths (%paths)
- ** --field=FIELD**. Select just one field, and force format to *string*.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [README.md](https://raw.githubusercontent.com/drush-ops/drush/12.x/README.md) (docs:readme)
- [Output formatters and filters: control the command output](../../vendor/drush/drush/docs/output-formats-filters.md) (docs:output-formats-filters)

#### Aliases

- status
- st
- core-status

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.