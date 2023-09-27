---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/WatchdogCommands.php
command: watchdog:tail
---
# watchdog:tail

:octicons-tag-24: 10.6+

Tail watchdog messages.

#### Examples

- <code>drush watchdog:tail</code>. Continuously tail watchdog messages.
- <code>drush watchdog:tail "cron run successful"</code>. Continuously tail watchdog messages, filtering on the string *cron run successful*.
- <code>drush watchdog:tail --severity=Notice</code>. Continuously tail watchdog messages, filtering severity of notice.
- <code>drush watchdog:tail --severity-min=Warning</code>. Continuously tail watchdog messages, filtering for a severity of warning or higher.
- <code>drush watchdog:tail --type=php</code>. Continuously tail watchdog messages, filtering on type equals php.

#### Arguments

- **[substring]**. A substring to look search in error messages.

#### Options

- ** --severity=SEVERITY**. Restrict to messages of a given severity level (numeric or string).
- ** --severity-min=SEVERITY-MIN**. Restrict to messages of a given severity level and higher.
- ** --type=TYPE**. Restrict to messages of a given type.
- ** --extended**. Return extended information about each message.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- wd-tail
- wt
- watchdog-tail

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.