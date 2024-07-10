<?php
ini_set('default_charset','UTF-8');
if(isset($_POST['email']) && !empty ($_POST['email'])){



$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['msg']);

$to = "teste@credsan.com";
$subjet = "Contato - Credsan.com";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From: contato@credsan.com"."\r\n"."Reply-to:".$email."\r\n"."X=Mailer:PHP/".phpversion();
if (mail($to,$subjet,$body,$header)){
    echo("<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Dosis&display=swap' rel='stylesheet'>

    <script src='https://kit.fontawesome.com/7bdc73ba97.js'></script>


    <title>Credsan</title>
    <link rel='icon' href='../img/sifraoicon.png'>
    <style>
        body {
            width: 100%;
            background-color: #ffc107;
            overflow-x: hidden;
            font-family: 'Dosis', sans-serif;
        }
        .jumbotron{
            margin-top: 9em;
            background-color: whitesmoke;
            border: 10px outset #cccccc;
        }
    </style>


</head>

<body>
    <div class='container'>
        <div class='jumbotron'>
            <h1 class='text-center display-4'>Formulário enviado com sucesso!</h1>
            <br>
            <p class='lead text-center'>Caso um de nossos atendentes não entrar em contato em 24 horas, favor utilizar outras formas de contato.<br>Obrigado!</p>
            <hr class='my-4'>
            <a class='btn btn-dark btn-block btn-lg' href='https://credsan.com' role='button'>Clique para voltar</a>
        </div>
    </div>
</body>");

  
} else{
    echo("<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Dosis&display=swap' rel='stylesheet'>

    <script src='https://kit.fontawesome.com/7bdc73ba97.js'></script>


    <title>Credsan</title>
    <link rel='icon' href='../img/sifraoicon.png'>
    <style>
        body {
            width: 100%;
            background-color: #ffc107;
            overflow-x: hidden;
            font-family: 'Dosis', sans-serif;
        }
        .jumbotron{
            margin-top: 9em;
            background-color: whitesmoke;
            border: 10px outset #cccccc;
        }
    </style>


</head>

<body>
    <div class='container'>
        <div class='jumbotron'>
            <h1 class='text-center display-4'>O formulário não foi enviado!</h1>
            <br>
            <p class='lead text-center'>Verifique se todos os campos foram preenchidos corretamente, tente novamente, ou utilize outro meio de contato<br>Obrigado!</p>
            <hr class='my-4'>
            <a class='btn btn-dark btn-block btn-lg' href='https://credsan.com' role='button'>Clique para voltar</a>
        </div>
    </div>
</body>");
}

}

?>