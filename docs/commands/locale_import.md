---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/LocaleCommands.php
command: locale:import
---
# locale:import

Imports to a gettext translation file.

#### Examples

- <code>drush locale-import nl drupal-8.4.2.nl.po</code>. Import the Dutch drupal core translation.
- <code>drush locale-import --type=customized nl drupal-8.4.2.nl.po</code>. Import the Dutch drupal core translation. Treat imported strings as custom translations.
- <code>drush locale-import --override=none nl drupal-8.4.2.nl.po</code>. Import the Dutch drupal core translation. Don't overwrite existing translations. Only append new translations.
- <code>drush locale-import --override=not-customized nl drupal-8.4.2.nl.po</code>. Import the Dutch drupal core translation. Only override non-customized translations, customized translations are kept.
- <code>drush locale-import nl custom-translations.po --type=customized --override=all</code>. Import customized Dutch translations and override any existing translation.

#### Arguments

- **langcode**. The language code of the imported translations.
- **file**. Path and file name of the gettext file. Relative paths calculated from Drupal root.

#### Options

- ** --type[=TYPE]**. String types to include, defaults to all types. Recognized values: *not-customized*, *customized*, *not-translated* [default: *not-customized*]
- ** --override=OVERRIDE**. Whether and how imported strings will override existing translations. Defaults to the Import behavior configured in the admin interface. Recognized values: *none*, *customized*, *not-customized*, *all*
- ** --autocreate-language**. Create the language in addition to import.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- locale-import

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.