<?php

namespace PortalFlare\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PortalFlareUserBundle extends Bundle {

  public function getParent() {
    return 'FOSUserBundle';
  }
}
