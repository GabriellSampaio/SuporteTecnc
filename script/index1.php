<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes do Formulário</title>
  <link rel="stylesheet" href="../css/css1.css">


</head>

<body>

  <?php
    echo" <div class='container'>
            <div class='cells'>
              <div class='containerRes'>

                <p class='titulo'>
                  FICHA CLIENTE
                </p>

                <p class='quadrado1'>
                  Nome:            
                  <ul>
                  " . htmlspecialchars($_POST["nome"]) . "    
                  </ul>   
                </p>          
                      


                <p class='quadrado'>
                  Email:
                  <ul>
                    " . htmlspecialchars($_POST["email"]) . "                
                  </ul>  
                </p>

                <p class='quadrado'>
                  Defeito:
                  <ul>
                    " . htmlspecialchars($_POST["defeito"]) . "                
                  </ul> 
                </p>  

                <p class='quadrado'>
                  Sua mensagem:
                  <ul>
                    " . nl2br(htmlspecialchars($_POST["mensagem"])) . "                
                  </ul> 
                </p>  

                <p class='quadrado'>
                  Dispositivo está ligando?                           
                  <ul>
                    " . htmlspecialchars($_POST["EstadoCel"]) . "
                  </ul>
                </p>";


                if (isset($_POST["aceito"])) {
                  echo 
                    " <p class='quadrado'>
                        Aceita receber notificação neste email? 
                      </p>
                      <ul>";
                      foreach ($_POST["aceito"] as $aceito) {
                      echo  "<li>" 
                              . htmlspecialchars($aceito) . 
                            "</li>";
                      }
                      echo "</ul>";} 
                      
                else {
                      echo "
                      <p class='quadrado'>
                        Você NÃO aceitou receber notificações!
                      </p>";}

                      echo "
                      <p class='quadrado'>
                        Modelo:
                      </p> 
                      <ul>
                        " . htmlspecialchars($_POST["Celular"]) . "  
                      </ul>  

              </div> 
            </div>
          </div>";
  ?>

</body>

</html>