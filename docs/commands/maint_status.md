---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/MaintCommands.php
command: maint:status
---
# maint:status

:octicons-tag-24: 11.5+

Fail if maintenance mode is enabled.

This commands fails with exit code of 3 when maintenance mode is on. This special
exit code distinguishes from a failure to complete.

#### Examples

- <code>drush maint:status && drush cron</code>. Only run cron when Drupal is not in maintenance mode.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- mstatus

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.