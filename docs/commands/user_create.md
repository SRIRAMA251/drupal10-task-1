---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/UserCommands.php
command: user:create
---
# user:create

Create a user account.

#### Examples

- <code>drush user:create newuser --mail='person@example.com' --password='letmein'</code>. Create a new user account with the name newuser, the email address person@example.com, and the password letmein

#### Arguments

- **name**. The name of the account to add

#### Options

- ** --format[=FORMAT]**. Format the result data. Available formats: csv,json,list,null,php,print-r,sections,string,table,tsv,var_dump,var_export,xml,yaml [default: *table*]
- ** --password=PASSWORD**. The password for the new account
- ** --mail=MAIL**. The email address for the new account
- ** --fields=FIELDS**. Available fields: User ID (uid), User name (name), Password (pass), User mail (mail), User theme (theme), Signature (signature), Signature format (signature_format), User created (user_created), Created (created), User last access (user_access), Last access (access), User last login (user_login), Last login (login), User status (user_status), Status (status), Time zone (timezone), User picture (picture), Initial user mail (init), User roles (roles), Group Audience (group_audience), Language code (langcode), Uuid (uuid)
- ** --field=FIELD**. Select just one field, and force format to *string*.
- ** --filter[=FILTER]**. Filter output based on provided expression

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Output formatters and filters: control the command output](../../vendor/drush/drush/docs/output-formats-filters.md) (docs:output-formats-filters)

#### Aliases

- ucrt
- user-create

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.