---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/PhpCommands.php
command: php:eval
---
# php:eval

Evaluate arbitrary php code after bootstrapping Drupal (if available).

#### Examples

- <code>drush php:eval '$node = \Drupal
ode\Entity\Node::load(1); print $node->getTitle();'</code>. Loads node with nid 1 and then prints its title.
- <code>drush php:eval "\Drupal::service('file_system')->copy('$HOME/Pictures/image.jpg', 'public://image.jpg');"</code>. Copies a file whose path is determined by an environment's variable. Use of double quotes so the variable $HOME gets replaced by its value.
- <code>drush php:eval "node_access_rebuild();"</code>. Rebuild node access permissions.

#### Arguments

- **code**. PHP code. If shell escaping gets too tedious, consider using the php:script command.

#### Options

- ** --format[=FORMAT]**.  [default: *var_dump*]

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- eval
- ev
- php-eval

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.