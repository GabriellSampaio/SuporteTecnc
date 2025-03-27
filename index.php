<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conserto Celular </title>
    <link rel="stylesheet" href="./css/css.css">

</head>

<body>
    <form action="./script/index1.php" method="post">
        <div class="pai"></div>
            <div class="container"></div>
                <div class="cell"></div>
                <div class="info">

                <p> Nome:</p>
                <input type=text name="nome" placeholder="Digite seu nome:" required>

                <p>Email:</p>
                <input type=text name="email" placeholder="Digite aqui seu email:" required>

                <p> Defeito: </p>
                <input type=text name="defeito" placeholder="Digite aqui o Defeito:" required>

                <p>Qual modelo do seu celular?</p>
                <select name="Celular" placeholder="Escolha o modelo:" required>
                <option value=samsung>A14</option>
                <option value=samsung>A24</option>
                <option value=samsung>A34</option>
                <option value=motorola>G54</option>
                <option value=motorola>G24</option>
                <option value=motorola>G34</option>
                <option value=samsung>Iphone13</option>
                <option value=samsung>Iphone14</option>
                <option value=samsung>Iphone14Max</option>
               </select>

               <p class="radioss"><B>Seu celular liga?</B>
               <input type=radio name=EstadoCel value="Sim"> Sim
                <input type=radio name=EstadoCel value="Não"> Não</p>


              <p>Descrição do Defeito:</p>
              <textarea cols=35 rows=5 name="mensagem" placeholder="Digite sua mensagem:" required></textarea>

             <p><input type=checkbox name="aceito[]" value=aceito> Aceito receber notificações no email</p>
              <input type=submit>

             </div>
        </div>
    </form>
</body>

</html>