<?php

App::uses("SimplePasswordHasher", "Controller/Component/Auth");

class User extends AppModel
{
    public $validate = array(
        'nome' => array(
            'minLength' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Your name must be at least 3 characters long.',
            )
        ),
        'email' => array(
            'email' => array(
                'rule' => 'email',
                'message' => 'Invalid email.'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'Email already registered.'
            )
        ),
        'senha' => array(
            'minLength' => array(
                'rule' => array('minLength', '4'),
                'message' => 'Password at least 4 characters',
            ),
    
        ),
        // 'confirmar_senha' => array(
        //     'matchPasswords' => array(
        //         'rule' => 'matchPasswords',
        //         'message' => 'Suas senhas devem conresponder',
        //     )
        // ),
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