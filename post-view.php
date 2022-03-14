<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="form.css">
    <title>Toyota (@toyota_ofc) • Visualizar</title>
</head>

<body>
    <header>

        <div class="container">

            <div class="profile">

                <div class="profile-image">

                    <img src="./public/icon.jpg">

                </div>

                <div class="profile-user-settings">

                    <h1 class="profile-username">toyota_ofc</h1>

                    <button class="btn profile-follow-btn">Seguir</button>

                </div>

                <div class="profile-info">

                    <ul>
                        <li><span class="profile-stat-count">12</span> publicações</li>
                        <li><span class="profile-stat-count">128mil</span> seguidores</li>
                        <li><span class="profile-stat-count">3</span> seguindo</li>
                    </ul>

                </div>

                <div class="profile-bio">

                    <p><span class="profile-real-name">Toyota Oficial</span><br/> Inscrevasse no nosso sorteio de uma Hilux novinha! Mais informações nos posts abaixo.</p>

                </div>

            </div>

        </div>

    </header>

    <main>

        <div class="container">

            <h2>Veja sua participação no Sorteio</h2>

            <div class="gallery">

                <form action="./post-view.php" method="post">
                    <div class="form-container">
                        <label><b>Telefone</b></label>
                        <input type="text" placeholder="Insira seu telefone" name="tel" required>

                        <button type="submit" class="send-btn">Enviar</button>
                      </label>
                    </div>
                </form>

                <div id="direita">
                <?php
                ini_set('display_errors', 0 );
                require_once('./conectar.php');

                $tel = $_POST['tel'];

                if ($tel != "")  
                {

                $sql = "select * from cadastro where telefone='$tel'"; 
                $res = mysqli_query($conexao,$sql) or die(mysqli_connect_error()); 
                $num = mysqli_num_rows($res); 


                if ($num > 0)
                { 
                $linha = mysqli_fetch_row($res);
                $nome = $linha[1];
                $cel = $linha[2];
 
                }
               else 
              { 
             echo "<font color='#000000' size='4' weight='bold'>"; 
             echo "Contato não encontrado...";
             echo "</font>";
           } 
        }  

        echo "Nome: ", $nome;
        echo "    Telefone: ", $cel;

    ?>


</div>

            </div>

            <h3><a href="./index.php">Voltar</a></h3>

        </div>

    </main>

</body>

</html>