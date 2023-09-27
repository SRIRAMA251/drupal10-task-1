---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/RoleCommands.php
command: role:create
---
# role:create

Create a new role.

#### Examples

- <code>drush role:create 'test_role' 'Test role'</code>. Create a new role with a machine name of 'test_role', and a human-readable name of 'Test role'.

#### Arguments

- **machine_name**. The symbolic machine name for the role.
- **[human_readable_name]**. A descriptive name for the role.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- rcrt
- role-create

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.