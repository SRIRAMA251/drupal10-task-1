---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/field/FieldBaseOverrideCreateCommands.php
command: field:base-override-create
---
# field:base-override-create

:octicons-tag-24: 11.0+

Create a new base field override

#### Examples

- <code>field:base-field-override-create</code>. Create a base field override by answering the prompts.
- <code>field:base-field-override-create taxonomy_term tag</code>. Create a base field override and fill in the remaining information through prompts.
- <code>field:base-field-override-create taxonomy_term tag --field-name=name --field-label=Label --is-required=1</code>. Create a base field override in a completely non-interactive way.

#### Arguments

- **[entityType]**. The machine name of the entity type.
- **[bundle]**. The machine name of the bundle.

#### Options

- ** --field-name=FIELD-NAME**. A unique machine-readable name containing letters, numbers, and underscores.
- ** --field-label=FIELD-LABEL**. The field label
- ** --field-description=FIELD-DESCRIPTION**. The field description
- ** --is-required=IS-REQUIRED**. Whether the field is required
- ** --show-machine-names[=SHOW-MACHINE-NAMES]**. Show machine names instead of labels in option lists.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- bfoc

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.