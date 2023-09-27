---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/ArchiveDumpCommands.php
command: archive:dump
---
# archive:dump

Backup your code, files, and database into a single file.

The following paths would be excluded from a code archive:

 - .git
 - vendor
 - [docroot]/sites/@/settings.@.php
 - Drupal files directory
 - Composer packages installed paths (`composer info --path --format=json`)

The following directories would be excluded from a file archive:

- css
- js
- styles
- php

#### Examples

- <code>drush archive:dump</code>. Create a site archive file in a temporary directory containing code, database and Drupal files.
- <code>drush archive:dump --destination=/path/to/archive.tar.gz</code>. Create /path/to/archive.tar.gz file containing code, database and Drupal files.
- <code>drush archive:dump --destination=/path/to/archive.tar.gz --overwrite</code>. Create (or overwrite if exists) /path/to/archive.tar.gz file containing code, database and Drupal files.
- <code>drush archive:dump --code --destination=/path/to/archive.tar.gz</code>. Create /path/to/archive.tar.gz file containing the code only.
- <code>drush archive:dump --exclude-code-paths=foo_bar.txt,web/sites/.+/settings.php --destination=/path/to/archive.tar.gz</code>. Create /path/to/archive.tar.gz file containing code, database and Drupal files but excluding foo_bar.txt file and settings.php files if found in web/sites/* subdirectories.
- <code>drush archive:dump --files --destination=/path/to/archive.tar.gz</code>. Create /path/to/archive.tar.gz file containing the Drupal files only.
- <code>drush archive:dump --database --destination=/path/to/archive.tar.gz</code>. Create /path/to/archive.tar.gz archive file containing the database dump only.

#### Options

- ** --code**. Archive codebase.
- ** --files**. Archive Drupal files.
- ** --db**. Archive database SQL dump.
- ** --destination=DESTINATION**. The full path and filename in which the archive should be stored. If omitted, it will be saved to the drush-backups directory.
- ** --overwrite**. Overwrite destination file if exists.
- ** --description=DESCRIPTION**. Describe the archive contents.
- ** --tags=TAGS**. Add tags to the archive manifest. Delimit several by commas.
- ** --generator=GENERATOR**. The generator name to store in the MANIFEST.yml file. The default is "Drush archive-dump".
- ** --generatorversion=GENERATORVERSION**. The generator version number to store in the MANIFEST file. The default is Drush version.
- ** --exclude-code-paths=EXCLUDE-CODE-PATHS**. Comma-separated list of paths (or regular expressions matching paths) to exclude from the code archive.
- ** --skip-tables-key=SKIP-TABLES-KEY**. A key in the $skip_tables array. @see [Site aliases](../site-aliases.md)
- ** --structure-tables-key=STRUCTURE-TABLES-KEY**. A key in the $structure_tables array. @see [Site aliases](../site-aliases.md)
- ** --tables-key=TABLES-KEY**. A key in the $tables array.
- ** --skip-tables-list=SKIP-TABLES-LIST**. A comma-separated list of tables to exclude completely.
- ** --structure-tables-list=STRUCTURE-TABLES-LIST**. A comma-separated list of tables to include for structure, but not data.
- ** --tables-list=TABLES-LIST**. A comma-separated list of tables to transfer.
- ** --database[=DATABASE]**. The DB connection key if using multiple connections in settings.php. [default: *default*]
- ** --db-url=DB-URL**. A Drupal 6 style database URL. For example *mysql://root:pass@localhost:port/dbname*
- ** --target[=TARGET]**. The name of a target within the specified database connection. [default: *default*]
- ** --show-passwords**. Show password on the CLI. Useful for debugging.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- ard

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.