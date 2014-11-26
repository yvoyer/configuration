<?php
/**
 * This file is part of the configuration project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Configuration\Repository;

use Star\Component\Configuration\FailureHandler\FailureHandler;

/**
 * Class InMemoryRepository
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Configuration\Repository
 */
final class InMemoryRepository implements ConfigurationRepository
{
    /**
     * @var array
     */
    private $elements = array();

    /**
     * @param $key
     * @param $value
     */
    public function add($key, $value)
    {
        $this->elements[$key] = $value;
    }

    /**
     * @param string $key
     * @param FailureHandler $handler
     *
     * @return string
     */
    public function findByKey($key, FailureHandler $handler)
    {
        if (false === array_key_exists($key, $this->elements)) {
            $handler->handleError($key, $this);
        }

        return $this->elements[$key];
    }
}
