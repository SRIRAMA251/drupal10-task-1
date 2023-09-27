---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/DrupalCommands.php
command: core:route
---
# core:route

:octicons-tag-24: 10.5+

View information about all routes or one route.

#### Examples

- <code>drush route</code>. View all routes.
- <code>drush route --name=update.status</code>. View details about the *update.status* route.
- <code>drush route --path=/user/1</code>. View details about the *entity.user.canonical* route.
- <code>drush route --url=https://example.com/node/1</code>. View details about the *entity.node.canonical* route.

#### Options

- ** --name=NAME**. A route name.
- ** --path=PATH**. An internal path or URL.
- ** --format[=FORMAT]**.  [default: *yaml*]

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- route

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.