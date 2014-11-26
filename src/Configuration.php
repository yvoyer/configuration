<?php
/**
 * This file is part of the configuration project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Configuration;

use Star\Component\Configuration\FailureHandler\FailureHandlerFactory;

/**
 * Class Configuration
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Configuration
 */
final class Configuration
{
    /**
     * @var ConfigurationRegistry
     */
    private static $registry;

    /**
     * @var FailureHandlerFactory
     */
    private static $factory;

    /**
     * @param ConfigurationRegistry $registry
     */
    public static function setup(ConfigurationRegistry $registry)
    {
        self::$registry = $registry;
        self::$factory = new FailureHandlerFactory();
    }

    /**
     * @param string $key
     * @param int    $errorHandlingStrategy
     *
     * @return string
     */
    public static function get($key, $errorHandlingStrategy)
    {
        $handler = self::$factory->create($errorHandlingStrategy);

        return self::$registry->search($key, $handler);
    }
}
