---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/pm/PmCommands.php
command: pm:install
---
# pm:install

Enable one or more modules.

#### Examples

- <code>drush pm:install --simulate content_moderation</code>. Display what modules would be installed but don't install them.

#### Arguments

- **[modules]...**. A comma delimited list of modules.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- in
- install
- pm-install
- en
- pm-enable
- pm:enable

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.