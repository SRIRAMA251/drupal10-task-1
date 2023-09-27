---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/ImageCommands.php
command: image:derive
---
# image:derive

Create an image derivative.

#### Examples

- <code>drush image:derive thumbnail core/themes/bartik/screenshot.png</code>. Save thumbnail sized derivative of logo image.

#### Arguments

- **style_name**. An image style machine name.
- **source**. Path to a source image. Optionally prepend stream wrapper scheme. Relative paths calculated from Drupal root.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- id
- image-derive

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.