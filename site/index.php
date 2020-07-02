<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // O include carrega o conteúdo independente de haver algum erro.
    // O require não exibe o conteúdo se houver algum erro.
    
    // Pode ser utilizado o include_once (somente carrega o conteúdo uma única vez.)
    // Pode ser utilizado o require_once (somente carrega o conteúdo uma única vez.)

    include('includes/header.php')
    ?>
    <div>
        <?php
        echo 'Olá, esse é o site.'
        ?>
    </div>
    <?php
    include('includes/footer.php')
    ?>

</body>

</html>