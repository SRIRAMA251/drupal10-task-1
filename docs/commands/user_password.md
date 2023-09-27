---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/UserCommands.php
command: user:password
---
# user:password

Set the password for the user account with the specified name.

#### Examples

- <code>drush user:password someuser 'correct horse battery staple'</code>. Set the password for the username someuser. See https://xkcd.com/936

#### Arguments

- **name**. The name of the account to modify.
- **password**. The new password for the account.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- upwd
- user-password

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.