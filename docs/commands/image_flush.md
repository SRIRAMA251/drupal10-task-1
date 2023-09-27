---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/ImageCommands.php
command: image:flush
---
# image:flush

Flush all derived images for a given style.

#### Examples

- <code>drush image:flush</code>. Pick an image style and then delete its derivatives.
- <code>drush image:flush thumbnail,large</code>. Delete all thumbnail and large derivatives.
- <code>drush image:flush --all</code>. Flush all derived images. They will be regenerated on demand.

#### Arguments

- **style_names**. A comma delimited list of image style machine names. If not provided, user may choose from a list of names.

#### Options

- ** --all**. Flush all derived images

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- if
- image-flush

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.