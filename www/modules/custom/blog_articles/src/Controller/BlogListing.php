<?php

/**
 * @file
 * Contains Drupal\blog_articles\Controller\BlogListing.
 */

namespace Drupal\blog_articles\Controller;

use Drupal\Core\Controller\ControllerBase;

class BlogListing extends ControllerBase {




  /**
   * View.
   *
   * @return string
   *   Return Hello string.
   */
  public function View() {
    $listing = $this->QueryListing();
    if(isset($listing)){
      return node_view_multiple($listing, "teaser");
    }
  }



  private function QueryListing(){
    $query = \Drupal::entityQuery('node');
    $query->condition('type', 'articles');
    $query->condition('status', 1);
    $query->sort('created', 'DESC');
    $query->range(0,10);
    $result = $query->execute();
    $debug = 1;

    if(isset($result[1])){
      return $nodes = entity_load_multiple('node', $result);
    }
    return FALSE;
  }
}
