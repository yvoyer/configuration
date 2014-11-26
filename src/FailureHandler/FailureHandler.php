<?php
/**
 * This file is part of the configuration project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Configuration\FailureHandler;

use Star\Component\Configuration\Repository\ConfigurationRepository;

/**
 * Class FailureHandler
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Configuration\FailureHandler
 */
interface FailureHandler
{
    const TEST = 0;

    /**
     * @param string                  $key
     * @param ConfigurationRepository $repository
     */
    public function handleError($key, ConfigurationRepository $repository);
}
