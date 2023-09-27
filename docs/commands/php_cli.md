---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/CliCommands.php
command: php:cli
---
# php:cli

Open an interactive shell on a Drupal site.

#### Examples

- <code>$node = Node::load(1)</code>. Entity classes are available without their namespace. For example, Node::load(1) works instead of Drupal\Node\entity\Node::load(1).
- <code>$paragraph = Paragraph::loadRevision(1)</code>. Also, a loadRevision static method is made available for easier load of revisions.

#### Options

- ** --version-history**. Use command history based on Drupal version. Default is per site.
- ** --cwd=CWD**. A directory to change to before launching the shell. Default is the project root directory

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Drush's PHP Shell.](../../vendor/drush/drush/docs/repl.md) (docs:repl)

#### Aliases

- php,core:cli
- core-cli

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.