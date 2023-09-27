---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/LocaleCommands.php
command: locale:import-all
---
# locale:import-all

:octicons-tag-24: 12.2+

Imports multiple translation files from the defined directory.

#### Examples

- <code>drush locale:import-all /var/www/translations</code>. Import all translations from the defined directory (non-recursively). Supported filename patterns are: {project}-{version}.{langcode}.po, {prefix}.{langcode}.po or {langcode}.po.
- <code>drush locale:import-all /var/www/translations/custom --types=customized --override=all</code>. Import all custom translations from the defined directory (non-recursively) and override any existing translation. Supported filename patterns are: {project}-{version}.{langcode}.po, {prefix}.{langcode}.po or {langcode}.po.

#### Arguments

- **directory**. The path to directory with translation files to import.

#### Options

- ** --type=TYPE**. String types to include, defaults to *not-customized*. Recognized values: *not-customized*, *customized*
- ** --override=OVERRIDE**. Whether and how imported strings will override existing translations. Defaults to the Import behavior configured in the admin interface. Recognized values: *none*, *customized*, *not-customized*, *all*

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- locale-import-all
- locale:import:all

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.