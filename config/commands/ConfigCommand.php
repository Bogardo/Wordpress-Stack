<?php

/**
 * Generate config files.
 */
class ConfigCommand extends WP_CLI_Command
{

    /**
     * Create new configuration file.
     *
     * ## OPTIONS
     * <environment>
     * : The name of the environment. (development, testing, staging, production)
     *
     * ## EXAMPLES
     *     wp config create staging
     *
     * @synopsis <environment>
     */
    function create($args)
    {
        $allowedEnvironments = array(
            'development',
            'testing',
            'staging',
            'production'
        );
        $env = strtolower($args[0]);
        if (!in_array($env, $allowedEnvironments)) {
            WP_CLI::error('Specified environment not allowed. Choose: ' . implode(', ', $allowedEnvironments));
        }

        $envDir = dirname(__DIR__) . DS . 'environments' . DS;
        $envPath = $envDir . $env . '.php';
        if (!is_file($envPath)) {
            WP_CLI::log(sprintf('Creating new configuration file at "%s"', $envPath));
            copy($envDir . '_default.php', $envPath);
        } else {
            WP_CLI::warning(sprintf('Configuration file already exists at "%s"', $envPath));
        }

        $configContent = file_get_contents($envPath);

        //Set Salts
        WP_CLI::log('Generating new salts');
        $salts = file_get_contents("https://api.wordpress.org/secret-key/1.1/salt/");
        $configContent = str_replace("#{{SALTS}}#", $salts, $configContent);

        file_put_contents($envPath, $configContent);

        WP_CLI::success('Configuration created');
    }
}

WP_CLI::add_command('config', 'ConfigCommand');