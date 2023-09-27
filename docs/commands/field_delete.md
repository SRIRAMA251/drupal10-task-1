---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/field/FieldDeleteCommands.php
command: field:delete
---
# field:delete

:octicons-tag-24: 11.0+

Delete a field

#### Examples

- <code>field:delete</code>. Delete a field by answering the prompts.
- <code>field-delete taxonomy_term tag</code>. Delete a field and fill in the remaining information through prompts.
- <code>field-delete taxonomy_term tag --field-name=field_tag_label</code>. Delete a field in a non-interactive way.
- <code>field-delete taxonomy_term --field-name=field_tag_label --all-bundles</code>. Delete a field from all bundles.

#### Arguments

- **[entityType]**. The machine name of the entity type.
- **[bundle]**. The machine name of the bundle.

#### Options

- ** --field-name=FIELD-NAME**. The machine name of the field.
- ** --show-machine-names[=SHOW-MACHINE-NAMES]**. Show machine names instead of labels in option lists.
- ** --all-bundles[=ALL-BUNDLES]**. Whether to delete the field from all bundles.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- field-delete
- fd

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.