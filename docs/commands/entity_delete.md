---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/EntityCommands.php
command: entity:delete
---
# entity:delete

Delete content entities.

To delete configuration entities, see config:delete command.

#### Examples

- <code>drush entity:delete node --bundle=article</code>. Delete all article entities.
- <code>drush entity:delete shortcut</code>. Delete all shortcut entities.
- <code>drush entity:delete node 22,24</code>. Delete nodes 22 and 24.
- <code>drush entity:delete user</code>. Delete all users except uid=1.
- <code>drush entity:delete node --exclude=9,14,81</code>. Delete all nodes except node 9, 14 and 81.
- <code>drush entity:delete node --chunks=5</code>. Delete all node entities in steps of 5.

#### Arguments

- **entity_type**. An entity machine name.
- **[ids]**. A comma delimited list of Ids.

#### Options

- ** --bundle=BUNDLE**. Restrict deletion to the specified bundle. Ignored when ids is specified.
- ** --exclude=EXCLUDE**. Exclude certain entities from deletion. Ignored when ids is specified.
- ** --chunks[=CHUNKS]**. Specify how many entities will be deleted in the same step. [default: *50*]

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- edel
- entity-delete

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.