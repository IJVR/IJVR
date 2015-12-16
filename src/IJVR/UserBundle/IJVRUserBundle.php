<?php

namespace IJVR\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IJVRUserBundle extends Bundle
{
public function getParent()
  {
    return 'FOSUserBundle';
  }


}
