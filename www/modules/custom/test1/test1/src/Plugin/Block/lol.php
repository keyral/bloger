<?php

/**
 * @file
 * Contains Drupal\test1\Plugin\Block\lol.
 */

namespace Drupal\test1\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'lol' block.
 *
 * @Block(
 *  id = "proute",
 *  admin_label = @Translation("proute"),
 * )
 */
class lol extends BlockBase {





  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['lol'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('lol'),
      '#description' => $this->t('lol'),
      '#default_value' => isset($this->configuration['lol']) ? $this->configuration['lol'] : '',
    );
    $form['lol'] = array(
      '#type' => 'tel',
      '#title' => $this->t('lol'),
      '#description' => $this->t('tel'),
      '#default_value' => isset($this->configuration['lol']) ? $this->configuration['lol'] : '',
    );
    $form['tel'] = array(
      '#type' => 'tel',
      '#title' => $this->t('tel'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['tel']) ? $this->configuration['tel'] : '',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['lol'] = $form_state->getValue('lol');
    $this->configuration['lol'] = $form_state->getValue('lol');
    $this->configuration['tel'] = $form_state->getValue('tel');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = array();
    $build['proute_lol']['#markup'] = '<p>' . $this->configuration['lol'] . '</p>';
    $build['proute_lol']['#markup'] = '<p>' . $this->configuration['lol'] . '</p>';
    $build['proute_tel']['#markup'] = '<p>' . $this->configuration['tel'] . '</p>';

    return $build;
  }
}
