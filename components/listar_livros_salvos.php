<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }

    require_once "../database/conexao.php";

    $sql = "SELECT path_capa, titulo FROM livros INNER JOIN livros_salvos ON livros.id = livros_salvos.id_livro INNER JOIN usuario ON livros_salvos.id_usuario = " . $_SESSION['usuario_id'];
    $result = mysqli_query($conexao, $sql);

    if ($result->num_rows > 0){
        $linha = 0;
        echo "<div class='row'>";

        while ($row = $result->fetch_assoc()) {
            ?>

            <div class="col-3">
                <img src="<?= $row['path_capa']; ?>" alt="">
                <h5 class="text"><?= $row['titulo']; ?></h5>
            </div>

            <?php

            $linha = $linha + 1;

            if ($linha % 4 == 0) {
                echo "</div><div class='row'>";
            }
        }

        echo "</div>";
    }


?>

