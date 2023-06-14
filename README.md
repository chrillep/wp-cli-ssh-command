# WP-CLI SSH Command

This command allows to connect to an SSH alias and stay connected. The core functionality only allows to execute single commands via SSH.

## Table of Contents

*   [Installation](#installation)
*   [Usage](#usage)
*   [TODO](#todo)

## Installation

Since the package index of WP-CLI is currently [on hold](https://github.com/wp-cli/wp-cli/issues/3977), the package has to be installed by hand:

```sh
wp package install https://github.com/chrillep/wp-cli-ssh-command.git
```

## Usage

[Configure your SSH aliases](https://make.wordpress.org/cli/handbook/references/config/#config-files) in `wp-cli.yml` or `wp-cli.local.yml`:

```yaml
@production:
  ssh: user@myserver.de
  path: www

@alias2:
  ...
```

Connect to the server via the SSH command:

```sh
wp ssh @production
```

## TODO

*   Directly navigate into the SSH aliase's `path`
