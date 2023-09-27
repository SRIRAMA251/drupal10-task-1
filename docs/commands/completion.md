---
edit_url: 
command: completion
---
# completion

Dump the shell completion script

The *%command.name%</> command dumps the shell completion script required
to use shell autocompletion (currently, bash, fish, zsh completion are supported).

<comment>Static installation
-------------------</>

Dump the script to a global completion file and restart your shell:

    *%command.full_name%  | sudo tee /etc/bash_completion.d/drush</>

Or dump the script to a local file and source it:

    *%command.full_name%  > completion.sh</>

    <comment># source the file whenever you use the project</>
    *source completion.sh</>

    <comment># or add this line at the end of your "~/.bashrc" file:</>
    *source /path/to/completion.sh</>

<comment>Dynamic installation
--------------------</>

Add this to the end of your shell configuration file (e.g. *"~/.bashrc"</>):

    *eval "$(C:\xampp\htdocs\drupal\drupal10\vendor\bin\drush completion )"</>

#### Arguments

- **[shell]**. The shell type (e.g. "bash"), the value of the "$SHELL" env var will be used if this is not given

#### Options

- ** --debug**. Tail the completion debug log

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.