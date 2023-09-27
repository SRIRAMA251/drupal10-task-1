---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/config/ConfigCommands.php
command: config:delete
---
# config:delete

Delete a configuration key, or a whole object(s).

#### Examples

- <code>drush config:delete system.site,system.rss</code>. Delete the system.site and system.rss config objects.
- <code>drush config:delete system.site page.front</code>. Delete the 'page.front' key from the system.site object.

#### Arguments

- **config_name**. The config object name(s). Delimit multiple with commas.
- **[key]**. A config key to clear, May not be used with multiple config names.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- cdel
- config-delete

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.