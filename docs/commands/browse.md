---
edit_url: https://github.com/drush-ops/drush/blob/12.x/vendor/drush/drush/src/Commands/core/BrowseCommands.php
command: browse
---
# browse

Display a link to a given path or open link in a browser.

#### Examples

- <code>drush browse</code>. Open default web browser (if configured or detected) to the site front page.
- <code>drush browse node/1</code>. Open web browser to the path node/1.
- <code>drush @example.prod browse</code>. Open a browser to the web site specified in a site alias.

#### Arguments

- **[path]**. Path to open. If omitted, the site front page will be opened.

#### Options

- ** --browser[=BROWSER]**. Open the URL in the default browser. Use --no-browser to avoid opening a browser. [default: *1*]
- ** --redirect-port=REDIRECT-PORT**. The port that the web server is redirected to (e.g. when running within a Vagrant environment).
- ** --no-browser**. Negate --browser option.

#### Global Options

- ** -v|vv|vvv, --verbose**. Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
- ** -y, --yes**. Auto-accept the default for all user prompts. Equivalent to --no-interaction.
- ** -l, --uri=URI**. A base URL for building links and selecting a multi-site. Defaults to *https://default*.
- To see all global options, run <code>drush topic</code> and pick the first choice.

!!! hint "Legend"
    - An argument or option with square brackets is optional.
    - Any default value is listed at end of arg/option description.
    - An ellipsis indicates that an argument accepts multiple values separated by a space.