---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/UserCommands.php
command: user:role:add
---
# user:role:add

Add a role to the specified user accounts.

#### Examples

- <code>drush user:role:add 'editor' user3</code>. Add the editor role to user3

#### Arguments

- **role**. The machine name of the role to add.
- **[names]**. A comma delimited list of user names.

#### Options

- ** --uid=UID**. A comma delimited list of user ids to lookup (an alternative to names).
- ** --mail=MAIL**. A comma delimited list of emails to lookup (an alternative to names).

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- urol
- user-add-role

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.