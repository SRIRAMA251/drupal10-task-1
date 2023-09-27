---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/StateCommands.php
command: state:set
---
# state:set

Set a state value.

#### Examples

- <code>drush sset system.maintenance_mode 1 --input-format=integer</code>. Put site into Maintenance mode.
- <code>drush state:set system.cron_last 1406682882 --input-format=integer</code>. Sets a timestamp for last cron run.
- <code>php -r "print json_encode(array('drupal', 'simpletest'));"  | drush state-set --input-format=json foo.name -</code>. Set a key to a complex value (e.g. array)
- <code>drush state:set twig_debug TRUE</code>. Enable the Twig debug mode (since Drupal 10.1)
- <code>drush state:set twig_autoreload TRUE</code>. Enable Twig auto reload (since Drupal 10.1)
- <code>drush state:set twig_cache_disable TRUE</code>. Disable the Twig, page, render and dynamic page caches (since Drupal 10.1)
- <code>drush state:set disable_rendered_output_cache_bins TRUE</code>. Disables render cache, dynamic page cache, and page cache. (since Drupal 10.1)

#### Arguments

- **key**. The state key, for example: *system.cron_last*.
- **value**. The value to assign to the state key. Use *-* to read from Stdin.

#### Options

- ** --input-format[=INPUT-FORMAT]**. Type for the value. Other recognized values: string, integer, float, boolean, json, yaml. [default: *auto*]

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- sset
- state-set

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.