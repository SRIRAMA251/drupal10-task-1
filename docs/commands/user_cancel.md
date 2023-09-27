---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/UserCommands.php
command: user:cancel
---
# user:cancel

Block or delete user account(s) with the specified name(s).

- Existing content may be deleted or reassigned to the Anonymous user. See options.
- By default only nodes are deleted or reassigned. Custom entity types need own code to
support cancellation. See https://www.drupal.org/project/drupal/issues/3043725 for updates.

#### Examples

- <code>drush user:cancel username</code>. Block the user account with the name username.
- <code>drush user:cancel --delete-content username</code>. Delete the user account with the name *username* and delete all content created by that user.
- <code>drush user:cancel --reassign-content username</code>. Delete the user account with the name *username* and assign all her content to the anonymous user.

#### Arguments

- **[names]**. A comma delimited list of user names.

#### Options

- ** --delete-content**. Delete the user, and delete all content created by that user.
- ** --reassign-content**. Delete the user and make its content belong to the anonymous user.
- ** --uid=UID**. A comma delimited list of user ids to lookup (an alternative to names).
- ** --mail=MAIL**. A comma delimited list of emails to lookup (an alternative to names).

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- ucan
- user-cancel

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.