<?php if(!empty($_POST['nome'])){
        $mensagem  = '';
        $mensagem .= 'Obrigado por entrar em contato conosco!<br>';
        $mensagem .= $_POST['nome'] . '<br>';
        $mensagem .= $_POST['email'] . '<br>'; 
        $mensagem .= $_POST['selecao'] . '<br>'; 
        $mensagem .= $_POST['mensagem'] . '<br>'; 
}  else {
    $mensagem  = 'Favor preencher corretamente o formulario.<br>';
    $mensagem  .= '<a href="formulario.html">Voltar</a>';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
   
        <?php        echo $mensagem; ?>
    </body>
</html>

