---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/TopicCommands.php
command: core:topic
---
# core:topic

Read detailed documentation on a given topic.

#### Examples

- <code>drush topic</code>. Pick from all available topics.
- <code>drush topic docs-repl</code>. Show documentation for the Drush interactive shell
- <code>drush docs:r</code>. Filter topics for those starting with 'docs-r'.

#### Arguments

- **topic_name**. The name of the topic you wish to view. If omitted, list all topic descriptions (and names in parenthesis).

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [README.md](https://raw.githubusercontent.com/drush-ops/drush/12.x/README.md) (docs:readme)

#### Aliases

- topic
- core-topic

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.