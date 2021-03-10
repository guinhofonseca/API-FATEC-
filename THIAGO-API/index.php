<?php

$chave = ''; 


$nomeCidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
$dados = hg_request(array('city_name' => $nomeCidade), $chave);


if(!isset($dados));


function hg_request($parametros, $chave = null, $endpoint = 'weather'){
  $url = 'http://api.hgbrasil.com/'.$endpoint.'/?format=json&';
  
  if(is_array($parametros)){
    
    if(!empty($chave)) $parametros = array_merge($parametros, array('key' => $chave));
    
    
    foreach($parametros as $key => $value){
      if(empty($value)) continue;
      $url .= $key.'='.urlencode($value).'&';
    }
    
    $resposta = file_get_contents(substr($url, 0, -1));
    
    return json_decode($resposta, true);
  } else {
    return false;
  }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Previsão do Tempo - API</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
    <center>
        <h1>Previsão do Tempo - API</h1>
        <center>
            <center>
                <h2>Thiago Fonseca - Fatec SR</h2>
                <center>
                    <div class="jumbotron">
                        <div class='row'>
                            <form class="form-inline" name="formulario" method="post" action="index.php">
                                <input class="form-control mr-sm-2" type="search" placeholder="Digite aqui a cidade" name="cidade">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
                            </form>
                        </div>
                    </div>

                    <section class="container">
                        <div class='row mb-5'>
                            <div class="card" style="width: 21.5em;margin: auto;">
                                <div class="card-body">
                                    <h2 class="card-title"><?= $dados['results']['city']; ?></h2>
                                    <h3 class="card-title"><?= $dados['results']['temp']; ?> ºC</h3>
                                    <p class="card-text"><?= $dados['results']['date'];?> <?=$dados['results']['time']; ?></p>
                                    <p class="card-text"><?= $dados['results']['description'];?></p>
                                    <h6>Nascer do Sol:</h6>
                                    <p class="card-text"><?= $dados['results']['sunrise'];?></p>
                                    <h6>Pôr do Sol:</h6>
                                    <p class="card-text"><?= $dados['results']['sunset'];?></p>
                                    <hr>
                                    <img class="card-img-botton" src="imagens/<?php echo $dados['results']['img_id']; ?>.png" class="imagem-do-tempo">
                                </div>
                            </div>
                        </div>
                    </section>



</body>

</html>
