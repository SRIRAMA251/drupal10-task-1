---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/LocaleCommands.php
command: locale:export
---
# locale:export

Exports to a gettext translation file.

See Drupal Core: \Drupal\locale\Form\ExportForm::submitForm

#### Examples

- <code>drush locale:export nl > nl.po</code>. Export the Dutch translations with all types.
- <code>drush locale:export nl --types=customized,not-customized > nl.po</code>. Export the Dutch customized and not customized translations.
- <code>drush locale:export --template > drupal.pot</code>. Export the source strings only as template file for translation.

#### Arguments

- **[langcode]**. The language code of the exported translations.

#### Options

- ** --template**. POT file output of extracted source texts to be translated.
- ** --types=TYPES**. A comma separated list of string types to include, defaults to all types. Recognized values: *not-customized*, *customized*, *not-translated*

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- locale-export

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.