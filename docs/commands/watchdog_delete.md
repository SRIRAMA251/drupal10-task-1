---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/WatchdogCommands.php
command: watchdog:delete
---
# watchdog:delete

Delete watchdog log records.

#### Examples

- <code>drush watchdog:delete</code>. Delete all messages.
- <code>drush watchdog:delete 64</code>. Delete messages with id 64.
- <code>drush watchdog:delete "cron run succesful"</code>. Delete messages containing the string "cron run succesful".
- <code>@usage drush watchdog:delete --severity=Notice</code>. Delete all messages with a severity of notice.
- <code>drush watchdog:delete --type=cron</code>. Delete all messages of type cron.

#### Arguments

- **[substring]**. Delete all log records with this text in the messages.

#### Options

- ** --severity=SEVERITY**. Delete messages of a given severity level.
- ** --type=TYPE**. Delete messages of a given type.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- wd-del
- wd-delete
- wd
- watchdog-delete

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.