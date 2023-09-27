---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/QueueCommands.php
command: queue:run
---
# queue:run

Run a specific queue by name.

#### Arguments

- **name**. The name of the queue to run, as defined in either hook_queue_info or hook_cron_queue_info.

#### Options

- ** --time-limit=TIME-LIMIT**. The maximum number of seconds allowed to run the queue.
- ** --items-limit=ITEMS-LIMIT**. The maximum number of items allowed to run the queue.
- ** --lease-time=LEASE-TIME**. The maximum number of seconds that an item remains claimed.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- queue-run

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.