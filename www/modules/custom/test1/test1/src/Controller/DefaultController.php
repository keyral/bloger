<?php

/**
 * @file
 * Contains Drupal\test1\Controller\DefaultController.
 */

namespace Drupal\test1\Controller;

use Drupal\Core\Controller\ControllerBase;

class DefaultController extends ControllerBase {




  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Hello @name!', ['@name' => $name])
    ];
  }
}
