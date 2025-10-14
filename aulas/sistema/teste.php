<?php
    //senha a ser criptografada: 1234
    $senha = '1234';

    $senha_hash = md5($senha);

    echo $senha_hash;

    // na tela: 81dc9bdb52d04dc20036dbd8313ed055

    // Utilizar esta senha criptografada no banco de dados....
?>