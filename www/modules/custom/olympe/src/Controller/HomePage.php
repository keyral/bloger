<?php

/**
 * @file
 * Contains Drupal\olympe\Controller\HomePage.
 */

namespace Drupal\olympe\Controller;

use Drupal\Core\Controller\ControllerBase;

class HomePage extends ControllerBase {




  /**
   * View.
   *
   * @return string
   *   Return Hello string.
   */
  public function view() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Implement method: view')
    ];
  }
}
