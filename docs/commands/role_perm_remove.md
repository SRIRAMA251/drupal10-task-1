---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/RoleCommands.php
command: role:perm:remove
---
# role:perm:remove

Remove specified permission(s) from a role.

#### Examples

- <code>drush role:remove-perm anonymous</code>. Remove 2 permissions from anon users.

#### Arguments

- **machine_name**. The role to modify.
- **permissions**. The list of permission to grant, delimited by commas.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- rmp
- role-remove-perm

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.