<?php

namespace Mayssoun\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MayssounUserBundle extends Bundle
{
    function getParent()
    {
        return "FOSUserBundle";
    }
}
