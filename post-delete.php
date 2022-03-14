<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="form.css">
    <title>Toyota (@toyota_ofc) • Deletar</title>
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

            <h2>Deletar sua participação</h2>

            <div class="gallery">

            <?php
            require_once('conectar.php');
            $sql="select * from cadastro";
            $res=mysqli_query($conexao,$sql) or die (mysqli_connect_error());
            $num=mysqli_num_rows($res);
            while ($linha = mysqli_fetch_row($res))
            {
                $cod=$linha[0];
                echo "Telefone: ".$linha[2]. ' - '; 
                echo "<a href='post-delete.php?cod=$cod&&tel=$linha[2]'> [ Excluir ] </a> ";
                echo "<br />";
            }
            ?>

                <form action="./exec_excluir.php" method="post">
                    <div class="form-container">

                        <label><b>Telefone</b></label>
                        <input type="text" placeholder="Insira seu telefone" name="tel" value="<?php if (isset ($_GET['tel'])) echo $_GET['tel'] ?>" required>

                        <button type="submit" class="send-btn">Deletar</button>
                      </label>
                    </div>
                </form>

            </div>

            <?php
            if (isset ($_GET['retorno']))
            { 
          $msg = $_GET['retorno'];
          echo "<br />";
          echo "<font face='Arial' size='3' color='#F00'>";
          echo $msg;
          $msg="";
          echo "</font>";
          }
          ?>

            <h3><a href="./index.php">Voltar</a></h3>

        </div>

    </main>

</body>

</html>