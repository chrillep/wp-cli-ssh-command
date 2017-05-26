<?php

function ssh_command($args, $assoc_args) {
    $aliasName = $args[0];
    $aliases = WP_CLI::get_runner()->aliases;
    if (!array_key_exists($aliasName, $aliases)) {
        WP_CLI::error("Alias '$aliasName' does not exist.");
    }
    $alias = $aliases[$aliasName];
    passthru('ssh ' . $alias['ssh']);
};

WP_CLI::add_command('ssh', 'ssh_command');