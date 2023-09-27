---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/CacheCommands.php
command: cache:get
---
# cache:get

Fetch a cached object and display it.

#### Examples

- <code>drush cache:get hook_info bootstrap</code>. Display the data for the cache id "hook_info" from the "bootstrap" bin.
- <code>drush cache:get update_available_releases update</code>. Display the data for the cache id "update_available_releases" from the "update" bin.

#### Arguments

- **cid**. The id of the object to fetch.
- **[bin]**. The cache bin to fetch from.

#### Options

- ** --format[=FORMAT]**. Format the result data. Available formats: csv,json,list,null,php,print-r,string,table,tsv,var_dump,var_export,xml,yaml [default: *json*]
- ** --fields=FIELDS**. Available fields: Cache ID (cid), Data (data), Created (created), Expire (expire), Tags (tags), Checksum (checksum), Valid (valid)
- ** --field=FIELD**. Select just one field, and force format to *string*.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Output formatters and filters: control the command output](../../vendor/drush/drush/docs/output-formats-filters.md) (docs:output-formats-filters)

#### Aliases

- cg
- cache-get

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.