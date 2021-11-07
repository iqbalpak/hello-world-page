<?php

namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloWorldController
 * 
 * @package Drupal\hello_world\Controller
 */

class HelloWorldController extends ControllerBase{
    public function index(){
        return [
            '#type' => 'markup',
            '#markup' => $this->t('Hello World'),
        ];
    }
}