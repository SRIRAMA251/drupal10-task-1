---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/config/ConfigImportCommands.php
command: config:import
---
# config:import

Import config from the config directory.

#### Examples

- <code>drush config:import</code>. Update Drupal's configuration so it matches the contents of the config directory.
- <code>drush config:import --partial --source=/app/config</code>. Import from the /app/config directory which typically contains one or a few yaml files.
- <code>cat tmp.yml | drush config:set --input-format=yaml user.mail ? -</code>. Update the *user.mail* config object in its entirety.

#### Options

- ** --source=SOURCE**. An arbitrary directory that holds the configuration files.
- ** --partial**. Allows for partial config imports from the source directory. Only updates and new configs will be processed with this flag (missing configs will not be deleted). No config transformation happens.
- ** --diff**. Show preview as a diff.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Deploy command for Drupal.](../../vendor/drush/drush/docs/deploycommand.md) (docs:deploy)

#### Aliases

- cim
- config-import

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.