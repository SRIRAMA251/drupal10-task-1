---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/DrupalCommands.php
command: core:cron
---
# core:cron

Run all cron hooks in all active modules for specified site.

#### Examples

- <code>drush maint:status && drush core:cron</code>. Run cron unless maintenance mode is enabled

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Crontab instructions for running your Drupal cron tasks via `drush cron`.](../../vendor/drush/drush/docs/cron.md) (docs:cron)

#### Aliases

- cron
- core-cron

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.