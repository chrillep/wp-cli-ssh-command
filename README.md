# WP-CLI SSH Command

This command allows to connect to an SSH alias and stay connected. The core functionality only allows to execute single commands via SSH.

## Usage

Configure your SSH aliases in `wp-cli.yml`:

    @live:
      ssh: user@myserver.de
      path: www

    @alias2:
      ...

Connect to the server via the SSH command:

    wp ssh @live

## Installation

Since the package index of WP-CLI is currently [https://github.com/wp-cli/wp-cli/issues/3977](on hold), the package has to be installed by hand:

    $ cd ~/.wp-cli/packages/
    $ composer require dword-design/wp-cli-ssh-command

## TODO

- Directly navigate into the SSH aliase's `path`