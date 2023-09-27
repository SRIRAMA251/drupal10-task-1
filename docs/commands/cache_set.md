---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/CacheCommands.php
command: cache:set
---
# cache:set

Cache an object expressed in JSON or var_export() format.

#### Arguments

- **cid**. id of the object to set.
- **data**. The object to set in the cache. Use - to read the object from STDIN.
- **[bin]**. The cache bin to store the object in.
- **[expire]**. 'CACHE_PERMANENT', or a Unix timestamp.
- **[tags]**. A comma delimited list of cache tags.

#### Options

- ** --input-format[=INPUT-FORMAT]**. The format of value. Use *json* for complex values. [default: *string*]
- ** --cache-get**. If the object is the result a previous fetch from the cache, only store the value in the 'data' property of the object in the cache.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- cs
- cache-set

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.