<?php 

App::uses("AppController","Controller");

class ContatosController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('contatos', $this->Contato->find('all'));
    }

}