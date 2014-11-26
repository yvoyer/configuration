<?php
/**
 * This file is part of the configuration project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Configuration\Repository;

use Star\Component\Configuration\FailureHandler\FailureHandler;

/**
 * Class ConfigurationRepository
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Configuration\Repository
 */
interface ConfigurationRepository
{
    /**
     * @param string         $key
     * @param FailureHandler $handler
     *
     * @return string
     */
    public function findByKey($key, FailureHandler $handler);
}
