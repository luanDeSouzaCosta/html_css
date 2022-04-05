<?php

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>inputs</title>

</head>
<body>
<div class="formCadLog">
    <p class="nomeSistema"align="center"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
      </svg> L.S.C Controle de Remédios</p>
    <p>Adicione o item!</p>
<table width="370", height="240">
</div>
<form action="input.php" method="post">
<label for="nomeProduto">
            <span>Digite o nome do produto</span>
            <br>
            <input type="text" placeholder="Nome do produto" id="nomeProduto" name="nomeProduto">
        </label>
        <br>
        <br>
        <label for="dataValidade">
            <span>Informe o prazo de validade!</span>
            <br>
            <input type="text" placeholder="Informe o prazo" id="dataValidade" name="dataValidade">
        </label>
        <br>
        <br>
        <p>Informe se esta aberto ou fechado!</p>
<p>
	
	Aberto:  <input type="radio" name="citizenship" /><br />
	Fechado: <input type="radio" name="citizenship" /><br />
	
</p>

<a class="btnVoltar" href="lista.php" button type="button">Voltar à lista </button></a>

</form>
</body>

</html>