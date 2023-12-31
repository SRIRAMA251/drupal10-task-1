---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/DrupalDirectoryCommands.php
command: drupal:directory
---
# drupal:directory

Return the filesystem path for modules/themes and other key folders.

#### Examples

- <code>cd $(drush dd devel)</code>. Navigate into the devel module directory
- <code>cd $(drush dd)</code>. Navigate to the root of your Drupal site
- <code>cd $(drush dd files)</code>. Navigate to the files directory.
- <code>drush dd @alias:%files</code>. Print the path to the files directory on the site @alias.
- <code>edit $(drush dd devel)/devel.module</code>. Open devel module in your editor

#### Arguments

- **[target]**. A module/theme name, or special names like root, files, private, or an *alias:path* string such as @alias:%files.

#### Options

- ** --local-only**. Reject any target that specifies a remote site.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- dd
- drupal-directory

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.