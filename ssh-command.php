<?php

declare(strict_types=1);

/**
 * @param array $parsedSshUrl
 * @return string
 */
function generateSshCommand(array $parsedSshUrl): string
{
    $sshCommand = '';
    if (array_key_exists('user', $parsedSshUrl)) {
        $sshCommand .= $parsedSshUrl['user'] . '@';
    }
    if (array_key_exists('host', $parsedSshUrl)) {
        $sshCommand .= $parsedSshUrl['host'];
    }

    if (array_key_exists('port', $parsedSshUrl)) {
        $sshCommand .= ' -p ' . $parsedSshUrl['port'];
    }
    return "ssh {$sshCommand}";
}

/**
 * @param $args
 * @param $assoc_args
 * @return void
 */
function sshCommand($args, $assoc_args): void
{
    $aliasName = $args[0];
    $aliases = WP_CLI::get_runner()->aliases;
    if (!array_key_exists($aliasName, $aliases)) {
        WP_CLI::error("Alias '$aliasName' does not exist.");
    }
    $alias = $aliases[$aliasName];
    $parsedSshUrl = parse_url($alias['ssh']);
    $sshCommand = generateSshCommand($parsedSshUrl);

    passthru($sshCommand);
}

WP_CLI::add_command('ssh', 'sshCommand');
