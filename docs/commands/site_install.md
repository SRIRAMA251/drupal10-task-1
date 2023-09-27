---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/SiteInstallCommands.php
command: site:install
---
# site:install

Install Drupal along with modules/themes/configuration/profile.

#### Examples

- <code>drush si demo_umami --locale=da</code>. (Re)install using the Umami install profile. Set default language to Danish.
- <code>drush si --db-url=mysql://root:pass@localhost:port/dbname</code>. Install using the specified DB params.
- <code>drush si --db-url=sqlite://sites/example.com/files/.ht.sqlite</code>. Install using SQLite
- <code>drush si --db-url=sqlite://:memory:</code>. Install using SQLite in-memory database.
- <code>drush si --account-pass=mom</code>. Re-install with specified uid1 password.
- <code>drush si --existing-config</code>. Install based on the yml files stored in the config export/import directory.
- <code>drush si standard install_configure_form.enable_update_status_emails=NULL</code>. Disable email notification during install and later. If your server has no mail transfer agent, this gets rid of an error during install.

#### Arguments

- **[profile]...**. An install profile name. Defaults to *standard* unless an install profile is marked as a distribution. Additional info for the install profile may also be provided with additional arguments. The key is in the form *[form name].[parameter name]*

#### Options

- ** --db-url=DB-URL**. A Drupal 6 style database URL. Required for initial install, not re-install. If omitted and required, Drush prompts for this item.
- ** --db-prefix=DB-PREFIX**. An optional table prefix to use for initial install.
- ** --db-su=DB-SU**. Account to use when creating a new database. Must have Grant permission (mysql only). Optional.
- ** --db-su-pw=DB-SU-PW**. Password for the *db-su* account. Optional.
- ** --account-name[=ACCOUNT-NAME]**. uid1 name. [default: *admin*]
- ** --account-mail[=ACCOUNT-MAIL]**. uid1 email. [default: *admin@example.com*]
- ** --site-mail[=SITE-MAIL]**. *From:* for system mailings. [default: *admin@example.com*]
- ** --account-pass=ACCOUNT-PASS**. uid1 pass. Defaults to a randomly generated password. If desired, set a fixed password in drush.yml.
- ** --locale[=LOCALE]**. A short language code. Sets the default site language. Language files must already be present. [default: *en*]
- ** --site-name[=SITE-NAME]**. Site name [default: *Drush Site-Install*]
- ** --site-pass=SITE-PASS**. 
- ** --sites-subdir=SITES-SUBDIR**. Name of directory under *sites* which should be created.
- ** --config-dir=CONFIG-DIR**. 
- ** --existing-config**. Configuration from *sync* directory should be imported during installation.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- si
- sin
- site-install

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.