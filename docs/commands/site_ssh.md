---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/SshCommands.php
command: site:ssh
---
# site:ssh

Connect to a webserver via SSH, and optionally run a shell command.

#### Examples

- <code>drush @mysite ssh</code>. Open an interactive shell on @mysite's server.
- <code>drush @prod ssh "ls /tmp"</code>. Run *ls /tmp* on *@prod* site.
- <code>drush @prod ssh "git pull"</code>. Run *git pull* on the Drupal root directory on the *@prod* site.
- <code>drush ssh "git pull"</code>. Run *git pull* on the local Drupal root directory.

#### Arguments

- **[code]...**. Code which should run at remote host.

#### Options

- ** --cd=CD**. Directory to change to. Defaults to Drupal root.
- ** --ssh-options=SSH-OPTIONS**. A string of extra options that will be passed to the ssh command (e.g. *-p 100*)
- ** --tty**. Create a tty (e.g. to run an interactive program).

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Creating site aliases for running Drush on remote sites.](../../vendor/drush/drush/docs/site-aliases.md) (docs:aliases)

#### Aliases

- ssh
- site-ssh

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.