---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/MkCommands.php
command: mk:docs
---
# mk:docs

Build a Markdown document for each Drush command/generator that is available on a site.

This command is an early step when building the www.drush.org static site. Adapt it to build a similar site listing the commands that are available on your site. Also see Drush's [Github Actions workflow](https://github.com/drush-ops/drush/blob/12.x/.github/workflows/main.yml).

#### Examples

- <code>drush mk:docs</code>. Build many .md files in the docs/commands and docs/generators directories.

#### Arguments

- **command**. The command to execute

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.