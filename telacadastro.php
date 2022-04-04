<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <style>
        body {
            background-color: #7a7a7a;
            font-family: Arial, Helvetica, sans-serif;
            width: 0;
            padding: 0;
           
        }


        .cadastroContainer {
            position: absolute;
            background-color: #000000;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 70px;
            border-radius: 15px;
            color: white;
        }

        #tituloCadastro {
            position: center;
            top: 0px;
            left: 15%;
        }

        #email,
        #nome,
        #password {
            outline: none;
            border: none;
            width: 90%;
            padding: 12px;
            font-size: 15px;

        }

        #botoes{
            background-color: #000000;
            position: relative;
            top: 20px;
        
            
        }


        .btnCadastrar,.btnVoltar {
            position: relative;

            background-color: #0ab2ff;
            top: 0px;
            padding: 9px;
            width: 220px;
            border: none;
            border-radius: 5px;
            color: #000000;
            font-size: 15px;
            cursor: pointer;
            text-decoration: none;
        }

        .btnVoltar:hover,
        .btnCadastrar:hover {
            background-color: #ace2fc;
        }
    </style>
</head>

<body>
    <form name="cadastrar" action="criarusuario.php" method="post">
      <div class="cadastroContainer"
      <p class="nomeSistema"align="center"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
          <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
        </svg> <font size="4">L.S.C Controle de Remédios</font></p>
        <h1 id="tituloCadastro"><font size="6">Cadastrar</font> </h1>
        <table width="300", height="200">

        <label for="email">
            <span>Digite seu E-mail</span>
            <br>
            <input type="text" placeholder="E-mail" id="email" name="email">
        </label>
        <br>
        <br>
        <label for="nome">
            <span>Digite seu nome</span>
            <br>
            <input type="text" placeholder="Nome" id="nome" name="nome">
        </label>
        <br>
        <br>
        <label for="password">
            <span>Digite sua senha</span>
            <br>
            <input type="password" placeholder="Senha" id="password" name="senha">
        </label>
        <br>
        <br>
        <label for="password">
            <span>Confirmar sua senha</span>
            <br>
            <input type="password" placeholder="Senha" id="password" name="senha2">
        </label>
        <br>
        <div id="botoes">
            <button type="submit" class="btnCadastrar">Cadastrar</button>

            <a class="btnVoltar" href="index.php"
                type="button">Voltar</a>
        </div>

        </form>
    </div>


</body>

</html>
