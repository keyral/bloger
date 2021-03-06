<?php

/**
 * @file
 * Contains \Drupal\migrate_drupal\Tests\Table\d6\AggregatorCategory.
 *
 * THIS IS A GENERATED FILE. DO NOT EDIT.
 *
 * @see core/scripts/migrate-db.sh
 * @see https://www.drupal.org/sandbox/benjy/2405029
 */

namespace Drupal\migrate_drupal\Tests\Table\d6;

use Drupal\migrate_drupal\Tests\Dump\DrupalDumpBase;

/**
 * Generated file to represent the aggregator_category table.
 */
class AggregatorCategory extends DrupalDumpBase {

  public function load() {
    $this->createTable("aggregator_category", array(
      'primary key' => array(
        'cid',
      ),
      'fields' => array(
        'cid' => array(
          'type' => 'serial',
          'not null' => TRUE,
          'length' => '11',
        ),
        'title' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '255',
          'default' => '',
        ),
        'description' => array(
          'type' => 'text',
          'not null' => TRUE,
          'length' => 100,
        ),
        'block' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
      ),
      'mysql_character_set' => 'utf8',
    ));
    $this->database->insert("aggregator_category")->fields(array(
      'cid',
      'title',
      'description',
      'block',
    ))
    ->execute();
  }

}
#836a3ecaf192c09b996431f0c4b71fe6
