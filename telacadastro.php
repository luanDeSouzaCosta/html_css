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
            position: relative;
            top: 0px;
            left: 15%;
        }

        #email,
        #nome,
        #password {
            outline: none;
            border: none;
            padding: 10px;
            font-size: 15px;

        }

        #botoes{
            background-color: #000000;
            position: relative;
            top: 10px;
            tab-size: 100%;
        }

        
        .btnCadastrar,.btnVoltar {
            position: relative;
            
            background-color: #0ab2ff;
            top: 0px;
            padding: 8px;
            border: none;
            width: 72%;
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
    <div class="cadastroContainer">

        <h1 id="tituloCadastro"> Cadastrar </h1>

        <label for="email">
            <span>Digite seu E-mail</span>
            <br>
            <input type="text" placeholder="E-mail" id="email">
        </label>
        <br>
        <br>
        <label for="nome">
            <span>Digite seu nome</span>
            <br>
            <input type="text" placeholder="Nome" id="nome">
        </label>
        <br>
        <br>
        <label for="password">
            <span>Digite sua senha</span>
            <br>
            <input type="password" placeholder="Senha" id="password">
        </label>
        <br>
        <br>
        <label for="password">
            <span>Confirmar sua senha</span>
            <br>
            <input type="password" placeholder="Senha" id="password">
        </label>
        <br>
        <div id="botoes">
            <button type="submit" class="btnCadastrar">Cadastrar</button>
            
            <a class="btnVoltar" href="file:///C:/Desktop/TUDO%20LUAN/TCC%20ESTACIO/projeto_tcc/html_css/index.html"
                type="button">Voltar</a>
        </div>

        </form>
    </div>


</body>

</html>