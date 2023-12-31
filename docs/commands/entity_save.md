---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/EntityCommands.php
command: entity:save
---
# entity:save

:octicons-tag-24: 11.0+

Load and save entities.

#### Examples

- <code>drush entity:save node --bundle=article</code>. Re-save all article entities.
- <code>drush entity:save shortcut</code>. Re-save all shortcut entities.
- <code>drush entity:save node 22,24</code>. Re-save nodes 22 and 24.
- <code>drush entity:save node --exclude=9,14,81</code>. Re-save all nodes except node 9, 14 and 81.
- <code>drush entity:save user</code>. Re-save all users.
- <code>drush entity:save node --chunks=5</code>. Re-save all node entities in steps of 5.

#### Arguments

- **entity_type**. An entity machine name.
- **[ids]**. A comma delimited list of Ids.

#### Options

- ** --bundle=BUNDLE**. Restrict to the specified bundle. Ignored when ids is specified.
- ** --exclude=EXCLUDE**. Exclude certain entities. Ignored when ids is specified.
- ** --chunks[=CHUNKS]**. Define how many entities will be loaded in the same step. [default: *50*]

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- esav
- entity-save

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.