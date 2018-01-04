<?php

namespace BN\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BNUserBundle extends Bundle
{
	public function getParent()
	{
	return 'FOSUserBundle';
	}
}
