<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name= "viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/css/csslogin.css">
</head>

<body>

    <div class = "content_login">
            <div class = "text_container">
                <h2  class = 'title'> Faça seu cadastro</h2>
        </div>

        <div class="form_container">
            <?php
            echo $this->Html->css('csslogin');
            echo $this->Form->create('User'); ?>
            <?php
            echo $this->Form->input('email', array('class' => 'input', 'label' => 'Email', 'div' => array(
                'class' => 'field_container',
            ),));
            echo $this->Form->input('nome', array('class' => 'input', 'label' => 'Nome', 'div' => array(
                'class' => 'field_container',
            ),));
            echo $this->Form->input('senha', array('class' => 'input', 'type' => 'password', 'label' => 'Senha', 'div' => array(
                'class' => 'field_container',
            ),));
            echo $this->Form->input('confirmar_senha', array('class' => 'input', 'type' => 'password', 'label' => 'Confirme sua senha', 'div' => array(
                'class' => 'field_container',
            ),));
            echo $this->Form->end(array(
                'label' => 'Cadastre-se',
                'class' => 'btn'
            ));
            ?>
            </div>
    </div>

</body>

</html>