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
require_once DRUPAL_ROOT . '/modules/custom/elasticsearch/vendor/autoload.php';

use Elasticsearch\ClientBuilder;

class elasticController{

  public function Index(){

    $hosts = ['192.168.56.101:9200'];
    $client = ClientBuilder::create()->setHosts($hosts)->build();


    $params = [
      'index'  => 'test_missing',
      'type'   => 'test',
      'id'     => 1,
      'client' => [
        'ignore' => 404
      ]
    ];
    $test = $client->get($params);
    print_r($test);

    return array(
      '#markup' => 'hello',
    );
  }
}