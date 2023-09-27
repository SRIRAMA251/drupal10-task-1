---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Drupal/Commands/sql/SanitizeCommands.php
command: sql:sanitize
---
# sql:sanitize

Sanitize the database by removing or obfuscating user data.

Commandfiles may add custom operations by implementing:

    - `#[CLI\Hook(type: HookManager::ON_EVENT, target: 'sql-sanitize-confirms')]`. Display summary to user before confirmation.
    - `#[CLI\Hook(type: HookManager::POST_COMMAND_HOOK, target: 'sql:sanitize')]`. Run queries or call APIs to perform sanitizing

Several working commandfiles may be found at https://github.com/drush-ops/drush/tree/12.x/src/Drupal/Commands/sql

#### Examples

- <code>drush sql:sanitize --sanitize-password=no</code>. Sanitize database without modifying any passwords.
- <code>drush sql:sanitize --allowlist-fields=field_biography,field_phone_number</code>. Sanitizes database but exempts two user fields from modification.

#### Options

- ** --allowlist-fields[=ALLOWLIST-FIELDS]**. A comma delimited list of fields exempt from sanitization.
- ** --sanitize-email[=SANITIZE-EMAIL]**. The pattern for test email addresses in the sanitization operation, or *no* to keep email addresses unchanged. May contain replacement patterns *%uid*, *%mail* or *%name*. [default: *user+%uid@localhost.localdomain*]
- ** --sanitize-password[=SANITIZE-PASSWORD]**. By default, passwords are randomized. Specify *no* to disable that. Specify any other value to set all passwords to that value.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Drush hooks.](../../vendor/drush/drush/docs/hooks.md) (docs:hooks)

#### Aliases

- sqlsan
- sql-sanitize

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.