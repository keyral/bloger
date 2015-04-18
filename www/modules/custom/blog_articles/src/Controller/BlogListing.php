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


  public function ViewAll() {
    $listing = $this->QueryListing(true);
    if(isset($listing)){
      return array(
        'content' => node_view_multiple($listing, "teaser"),
        'pager' => array(
          '#theme' => 'pager',
        ),
      );
    }
  }



  private function QueryListing($all = False){
    $query = \Drupal::entityQuery('node');
    $query->condition('type', 'articles');
    $query->condition('status', 1);
    $query->sort('created', 'DESC');
    if($all != False){
      $query->pager(1);
    }
    else {
      $query->range(0,10);
    }
    $result = $query->execute();

    if(isset($result)){
      return $nodes = entity_load_multiple('node', $result);
    }
    return FALSE;
  }
}
