---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/EditCommands.php
command: core:edit
---
# core:edit

Edit drush.yml, site alias, and Drupal settings.php files.

#### Examples

- <code>drush core:edit</code>. Pick from a list of config/alias/settings files. Open selected in editor.
- <code>drush --bg core-config</code>. Return to shell prompt as soon as the editor window opens.
- <code>drush core:edit etc</code>. Edit the global configuration file.
- <code>drush core:edit demo.alia</code>. Edit a particular alias file.
- <code>drush core:edit sett</code>. Edit settings.php for the current Drupal site.
- <code>drush core:edit --choice=2</code>. Edit the second file in the choice list.

#### Arguments

- **[filter]**. A substring for filtering the list of files. Omit this argument to choose from loaded files.

#### Options

- ** --editor[=EDITOR]**. A string of bash which launches user's preferred text editor. Defaults to *${VISUAL-${EDITOR-vi}}*.
- ** --bg**. Launch editor in background process.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- conf
- config
- core-edit

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.