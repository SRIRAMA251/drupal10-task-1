---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/SiteCommands.php
command: site:set
---
# site:set

Set a site alias that will persist for the current session.

Stores the site alias being used in the current session in a temporary
file.

#### Examples

- <code>drush site:set @dev</code>. Set the current session to use the @dev alias.
- <code>drush site:set user@server/path/to/drupal#sitename</code>. Set the current session to use a remote site via site specification.
- <code>drush site:set /path/to/drupal#sitename</code>. Set the current session to use a local site via site specification.
- <code>drush site:set -</code>. Go back to the previously-set site (like `cd -`).
- <code>drush site:set</code>. Without an argument, any existing site becomes unset.

#### Arguments

- **[site]**. Site specification to use, or *-* for previous site. Omit this argument to unset.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Creating site aliases for running Drush on remote sites.](../../vendor/drush/drush/docs/site-aliases.md) (docs:aliases)

#### Aliases

- use
- site-set

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.