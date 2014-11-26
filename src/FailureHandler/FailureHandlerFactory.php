<?php
/**
 * This file is part of the configuration project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Configuration\FailureHandler;

/**
 * Class FailureHandlerFactory
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Configuration\FailureHandler
 */
final class FailureHandlerFactory
{
    /**
     * @param int $strategy
     *
     * @return FailureHandler
     * @throws \InvalidArgumentException
     */
    public function create($strategy)
    {
        $handler = null;
        switch ($strategy)
        {
            case FailureHandler::TEST:
                $generator = new \PHPUnit_Framework_MockObject_Generator();
                $handler = $generator->getMock('Star\Component\Configuration\FailureHandler\FailureHandler');
                break;
            default:
                throw new \InvalidArgumentException("Failure handler '{$strategy}' is not supported.");
        }

        return $handler;
    }
}
