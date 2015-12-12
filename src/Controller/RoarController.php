<?php

namespace Drupal\dino_roar\Controller;

use Drupal\dino_roar\Jurassic\RoarGenerator;
use Symfony\Component\HttpFoundation\Response;

class RoarController
{
  public function roar($count)
  {
    // Instantiate RoarGenerator object.
    $roarGenerator = new RoarGenerator();
    // Call method on object.
    $roar = $roarGenerator->getRoar($count);

    return new Response($roar);
  }
}