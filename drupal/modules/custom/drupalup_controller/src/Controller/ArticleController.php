<?php

namespace Drupal\drupalup_controller\Controller;

class ArticleController {

  public function page() {
    $curent_user = \Drupal::currentUser();
    $user = \Drupal\user\Entity\User::load($curent_user->id());
  
    $items = array(
      array('name' => 'Article one'),
      array('name' => 'Article two'),
      array('name' => 'Article three'),
      array('name' => 'Article four'),
      array('name' => 'Article five'),
    );
    if($user)
    {
      array_push($items,array('name'=>'Hello '.$user->name->value));
    }

    return array(
      '#theme' => 'article_list',
      '#items' => $items,
      '#title' => 'Our article list'
    );
  }
}