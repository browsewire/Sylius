<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\SettingsBundle\Manager;

use Doctrine\Common\Cache\Cache;
use Doctrine\Common\Persistence\ObjectManager;
use PhpSpec\ObjectBehavior;
use Sylius\Bundle\ResourceBundle\Model\RepositoryInterface;
use Sylius\Bundle\SettingsBundle\Schema\SchemaRegistryInterface;

/**
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class SettingsManagerSpec extends ObjectBehavior
{
    function let(
        SchemaRegistryInterface $registry,
        Cache $cache,
        ObjectManager $manager,
        RepositoryInterface $repository
    )
    {
        $this->beConstructedWith($registry, $manager, $repository, $cache);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\SettingsBundle\Manager\SettingsManager');
    }

    function it_should_be_a_Sylius_settings_manager()
    {
        $this->shouldImplement('Sylius\Bundle\SettingsBundle\Manager\SettingsManagerInterface');
    }
}
