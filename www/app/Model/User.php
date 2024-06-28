<?php

App::uses("SimplePasswordHasher", "Controller/Component/Auth");

class User extends AppModel
{
    public $validate = array(
        'nome' => array(
            'minLength' => array(
                'rule' => array('minLength', '3'),
                'message' => 'No minimo 3 caracteres.',
            )
        ),
        'email' => array(
            'email' => array(
                'rule' => 'email',
                'message' => 'Email invalido.'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'Email ja registrado.'
            )
        ),
        'senha' => array(
            'minLength' => array(
                'rule' => array('minLength', '4'),
                'message' => 'No minimo 4 caracteres.',
            ),
    
        ),
    );

    public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['senha'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['senha'] = $passwordHasher->hash($this->data[$this->alias]['senha']);
        }
        return true;
    }
}