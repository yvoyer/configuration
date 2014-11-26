<?php
/**
 * This file is part of the configuration project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Configuration;

/**
 * Class ConfigurationMock
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Configuration
 */
trait ConfigurationMock
{
    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockConfigurationRepository()
    {
        return $this->getMock('Star\Component\Configuration\Repository\ConfigurationRepository');
    }
}
