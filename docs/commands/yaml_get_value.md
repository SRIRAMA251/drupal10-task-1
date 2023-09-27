---
edit_url: 
command: yaml:get:value
---
# yaml:get:value

:octicons-tag-24: 12.0+

Get a value for a specific key in a YAML file.

See https://github.com/grasmash/yaml-cli for a README and bug reports.

#### Arguments

- **filename**. The filename of the YAML file
- **key**. The key for the value to get, in dot notation.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Aliases

- y:get:value

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.