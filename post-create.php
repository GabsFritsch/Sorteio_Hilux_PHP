<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="form.css">
    <title>Toyota (@toyota_ofc) • Registrar</title>
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

            <h2>Inscrição para o Sorteio</h2>

            <div class="gallery">

                <form action="./exec_cadastrar.php" method="post">
                    <div class="form-container">
                        <label><b>Nome Completo</b></label>
                        <input type="text" placeholder="Insira seu nome completo" name="nome" required>

                        <label><b>Telefone</b></label>
                        <input type="text" placeholder="Insira seu telefone" name="telefone" required>

                        <button type="submit" class="send-btn">Cadastrar</button>
                      </label>
                    </div>
                </form>
                <?php
if (isset ($_GET['retorno']))
{
 $msg = $_GET['retorno'];
 echo "<br />";
 echo "<font size='4' color='#000000'>";
 echo $msg;
 $msg="";
 echo "</font>";
}
?>

            </div>

            <h3><a href="./index.php">Voltar</a></h3>

        </div>

    </main>

</body>

</html>