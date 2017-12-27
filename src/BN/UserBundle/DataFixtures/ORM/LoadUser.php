<?php 

namespace BN\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BN\Userbundle\Entity\User;

/**
* 
*/
class LoadUser implements FixtureInterface
{
	
	function load(ObjectManager $manager)
	{
		$listNames = array('Alexandre', 'Marine', 'Anna');

		foreach ($listNames as $name) {			
			$user = new User;

			$user->setUsername($name);
			$user->setpassword($name);

			$user->setSalt('');
			$user->setRoles(array('ROLE_USER'));

			$manager->persist($user);
		}
		$manager->flush();
	}
}