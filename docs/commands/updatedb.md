---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/UpdateDBCommands.php
command: updatedb
---
# updatedb

Apply any database updates required (as with running update.php).

#### Options

- ** --cache-clear[=CACHE-CLEAR]**. Clear caches upon completion. [default: *1*]
- ** --no-cache-clear**. Negate --cache-clear option.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Deploy command for Drupal.](../../vendor/drush/drush/docs/deploycommand.md) (docs:deploy)

#### Aliases

- updb

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.