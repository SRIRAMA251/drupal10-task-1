---
edit_url: 
command: yaml:update:value
---
# yaml:update:value

:octicons-tag-24: 12.0+

Update the value for a specific key in a YAML file.

See https://github.com/grasmash/yaml-cli for a README and bug reports.

#### Arguments

- **filename**. The filename of the YAML file
- **key**. The key for the value to set, in dot notation
- **value**. The new value

#### Options

- **-t, --type=TYPE**. Set the variable type for the value. Accepted types are int, integer, bool, boolean, str, and string.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- y:update:value

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.