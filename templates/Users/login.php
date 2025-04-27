<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
    <!-- Adicione os links para os estilos do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <style>
    body{

    background-size: cover;
  
    justify-content: center;
    align-items: center;
    height: 100vh;
}

 </style>
</head>
<body>
    <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'login']]); ?>
    <div class="shadow w-50 m-auto p-3">
    
    <?= $this->Form->control('username', ['label' => 'USUÁRIO', 'class' => 'form-control']); ?>
    <?= $this->Form->control('password', ['label' => 'SENHA', 'class' => 'form-control']); ?>
    <?= $this->Form->button('ENTRAR', ['class' => ' btn btn-outline-success w-50 mt-3']); ?>
    </div>
    <?= $this->Form->end(); ?>
</body>
</html>
