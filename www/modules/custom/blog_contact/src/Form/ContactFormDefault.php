<?php

/**
 * @file
 * Contains Drupal\blog_contact\Form\ContactFormDefault.
 */

namespace Drupal\blog_contact\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ContactFormDefault extends ConfigFormBase
{

  /**
  * {@inheritdoc}
  */
  protected function getEditableConfigNames() {
  }

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'contact_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    //$config = $this->config('blog_contact.contact_form_config');
    $form['lol'] = array(
      '#type' => 'tel',
      '#title' => $this->t('lol'),
      '#description' => $this->t('lo'),
      '#default_value' => 'lol',
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    /*
    $this->config('blog_contact.contact_form_config')
      ->set('lol', $form_state->getValue('lol'))
    ->save();
    */
  }
}
