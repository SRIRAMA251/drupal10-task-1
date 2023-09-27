---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/generate/GenerateCommands.php
command: generate
---
# generate

Generate boilerplate code for modules/plugins/services etc.

Drush asks questions so that the generated code is as polished as possible. After
generating, Drush lists the files that were created.

See https://github.com/Chi-teck/drupal-code-generator for a README and bug reports.

#### Examples

- <code>drush generate</code>. Pick from available generators and then run it.
- <code>drush generate drush-command-file</code>. Generate a Drush commandfile for your module.
- <code>drush generate controller --answer=Example --answer=example</code>. Generate a controller class and pre-fill the first two questions in the wizard.
- <code>drush generate controller -vvv --dry-run</code>. Learn all the potential answers so you can re-run with several --answer options.

#### Arguments

- **[generator]**. A generator name. Omit to pick from available Generators.

#### Options

- ** --replace**. 
- ** --working-dir=WORKING-DIR**. Absolute path to working directory.
- ** --answer=ANSWER**. Answer to generator question.
- ** --destination=DESTINATION**. Path to a base directory for file writing.
- ** --dry-run**. Output the generated code but not save it to file system.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

#### Topics

- [Instructions on creating your own Drush Generators.](../../vendor/drush/drush/docs/generators.md) (docs:generators)

#### Aliases

- gen

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.