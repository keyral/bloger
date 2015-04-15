<?php

/**
 * @file
 * Contains Drupal\blog_contact\Form\ContactFormDefault.
 */

namespace Drupal\blog_contact\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class ContactFormDefault extends FormBase
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
    $form['nom'] = array(
      '#type' => 'textfield',
      '#default_value' => '',
      '#attributes' => array(
        'placeholder' => $this->t('Nom')
      ),
    );
    $form['prenom'] = array(
      '#type' => 'textfield',
      '#default_value' => '',
      '#attributes' => array(
        'placeholder' => $this->t('Prenom')
      ),
    );
    $form['email'] = array(
      '#type' => 'email',
      '#default_value' => '',
      '#attributes' => array(
        'placeholder' => $this->t('E-Mail')
      ),
    );

    $form['message'] = array(
      '#type' => 'textarea',
      '#default_value' => '',
      '#attributes' => array(
        'placeholder' => $this->t('Message')
      ),
    );

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Envoyer'),
      '#button_type' => 'primary',
      '#submit' => array(array($this, 'send')),
      '#ajax' => array(
        'callback' => array(get_class($this), 'send'),
        'wrapper' => 'message-contact-form',
      ),
    );
    $form['sender'] = array(
      '#type' => 'textfield',
      '#title' => '',
      '#default_value' => '',
      '#attributes' => array(
        'style' => 'display:none'
      )
    );
    $form['message_error'] = array(
      '#type' => 'item',
      '#markup' => 'lol_test',
      '#prefix' => '<div id="message-contact-form">',
      '#suffix' => '</div>'
    );
    $form['#theme'] = 'contact_form'; //@TODO : voir comment faire un render children en twig
   return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if ($form_state->getValue('email') == '') {
      $form_state->setErrorByName(
        'email',
        $this->t("Veuillez renseigner votre adresse mail.")
      );
    }
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

  /**
   * {@inheritdoc}
   */
  public function send(array &$form, FormStateInterface $form_state){
    $debug = 1;
    if(isset($form_state->values['sender'])){

    }

    return array(
      '#type' => 'item',
      '#markup' => 'lol proute',
      '#prefix' => '<div id="message-contact-form">',
      '#suffix' => '</div>'
    );
  }


}
