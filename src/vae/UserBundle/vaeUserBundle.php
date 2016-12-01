<?php

namespace vae\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class vaeUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
