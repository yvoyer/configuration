<?php
/**
 * This file is part of the configuration project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Configuration;

use Star\Component\Configuration\FailureHandler\FailureHandler;
use Star\Component\Configuration\Repository\ConfigurationRepository;

/**
 * Class ConfigurationRegistry
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Configuration
 */
final class ConfigurationRegistry
{
    /**
     * @var ConfigurationRepository
     */
    private $repository;

    /**
     * @param ConfigurationRepository $repository
     */
    public function __construct(ConfigurationRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string         $key
     * @param FailureHandler $handler
     *
     * @return string
     */
    public function search($key, FailureHandler $handler)
    {
        return $this->repository->findByKey($key, $handler);
    }
}
