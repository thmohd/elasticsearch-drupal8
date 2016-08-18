<?php

/**
 * @file
 * @author Mohammad Althayabeh
 * Contains \Drupal\elasticsearch\Controller\elasticController.
 * Please Place this file under your
 * MODULE_NAME/src/Controller/
 *
 */

namespace Drupal\elasticsearch\Controller;

class elasticController{

  public function Index(){

    return array(
      '#markup' => 'hello',
    );
  }
}