---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/RoleCommands.php
command: role:list
---
# role:list

Display a list of all roles defined on the system.

If a role name is provided as an argument, then all of the permissions of
that role will be listed.  If a permission name is provided as an option,
then all of the roles that have been granted that permission will be listed.

#### Examples

- <code>drush role:list --filter='administer nodes'</code>. Display a list of roles that have the administer nodes permission assigned.

#### Options

- ** --format[=FORMAT]**. Format the result data. Available formats: csv,json,list,null,php,print-r,sections,string,table,tsv,var_dump,var_export,xml,yaml [default: *yaml*]
- ** --fields=FIELDS**. Available fields: ID (rid), Role Label (label), Permissions (perms)
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

- rls
- role-list

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.