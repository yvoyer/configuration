<?php
/**
 * This file is part of the configuration project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Configuration;

use Star\Component\Configuration\FailureHandler\FailureHandler;
use Star\Component\Configuration\Repository\InMemoryRepository;

/**
 * Class ConfigurationTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Configuration
 */
final class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    use ConfigurationMock;

    public function test_should_return_the_required_value()
    {
        $repository = new InMemoryRepository();
        $repository->add('key', 'value');

        $registry = new ConfigurationRegistry($repository);
        Configuration::setup($registry);

        $this->assertSame('value', Configuration::get('key', FailureHandler::TEST));
    }
}
