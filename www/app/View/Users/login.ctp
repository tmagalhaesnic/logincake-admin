<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name= "viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/csslogin.css">
</head>

<body>

    <div class = "content_login">
            <div class = "text_container">
                <h2  class = 'title'> Faça seu login</h2>
        </div>

        <div class="form_container">
    <?php
        echo $this->Form->create('User');
        echo $this->Form->input('email', array('class' => 'input', 'label' => 'Email', 'div' => array(
            'class' => 'field_container',
        ),));
        echo $this->Form->input('senha', array('class' => 'input', 'type' => 'password', 'label' => 'Senha', 'div' => array(
            'class' => 'field_container',
        ),));
        echo $this->Form->button('Login', array('class' => 'btn')) ;
        echo $this->Form->end();
    ?>
    </div>
        <button href="/users/add">cadastre-se</button>
    </div>  

</body>

</html>