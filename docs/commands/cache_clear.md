---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/CacheCommands.php
command: cache:clear
---
# cache:clear

Clear a specific cache, or all Drupal caches.

#### Examples

- <code>drush cc bin</code>. Choose a bin to clear.
- <code>drush cc bin entity,bootstrap</code>. Clear the entity and bootstrap cache bins.

#### Arguments

- **type**. The particular cache to clear. Omit this argument to choose from available types.
- **[args]...**. Additional arguments as might be expected (e.g. bin name).

#### Options

- ** --cache-clear[=CACHE-CLEAR]**. Set to 0 to suppress normal cache clearing; the caller should then clear if needed. [default: *1*]
- ** --no-cache-clear**. Negate --cache-clear option.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- cc
- cache-clear

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.