---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/MaintCommands.php
command: maint:set
---
# maint:set

:octicons-tag-24: 11.5+

Set maintenance mode.

#### Examples

- <code>drush maint:set 1</code>. Put site into Maintenance mode.
- <code>drush maint:set 0</code>. Remove site from Maintenance mode.

#### Arguments

- **value**. The value to assign to the state key

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- mset

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.