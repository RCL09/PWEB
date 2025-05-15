<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Currículo de Rudson Caleb Correia Rodrigues Lima</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
            $nome = "Rudson Caleb Correia Rodrigues Lima";
            $idade = 19;
            $cidade = "Pedra Branca - Ceará";
            $email = "rudson.rodrigues10@aluno.ifce.edu.br";
            $telefone = "(88) 99721-6890";
        ?>
        <img src="imagens/FotoRudson.jpg" alt="Minha Foto" width="150">
        <h1><?php echo $nome; ?></h1>
        <p><?php echo "$idade anos - $cidade"; ?></p>
        <p>Email: <?php echo $email; ?> | Tel: <?php echo $telefone; ?></p>
    </header>

    <section id="experiencia">
        <h2>Experiência Profissional</h2>
        <?php
            $experiencias = [
                "Provenet - Técnico/Suporte (06/2022 - 06/2023): Fazia parte da equipe técnica da empresa, tanto na manutenção quanto na instalação de equipamentos."
            ];
            foreach($experiencias as $exp) {
                echo "<p>$exp</p>";
            }
        ?>
    </section>

    <section id="cursos">
        <h2>Cursos e Formação</h2>
        <?php
            $cursos = [
                "Técnico em Informática - EEEP Antonio Rodrigues de Oliveira (2022)",
                "Sistemas de Informação - IFCE Campus Cedro (Cursando)"
            ];
            foreach($cursos as $curso) {
                echo "<p>$curso</p>";
            }
        ?>
    </section>

    <section id="habilidades">
        <h2>Habilidades</h2>
        <?php
            $habilidades = [
                "Python" => 8,
                "HTML/CSS" => 9,
                "C/C++" => 8
            ];
            foreach($habilidades as $habilidade => $nota) {
                echo "<p>$habilidade: ";
                for ($i = 0; $i < $nota; $i++) {
                    echo "★";
                }
                for ($i = $nota; $i < 10; $i++) {
                    echo "☆";
                }
                echo "</p>";
            }
        ?>
    </section>

    <section id="hobbies">
        <h2>Hobbies</h2>
        <?php
            $hobbies = [
                "Jogar futebol" => 10,
                "Assistir filmes e séries" => 8,
                "Jogar xadrez" => 7,
                "Viajar" => 8
            ];
            foreach($hobbies as $hobbie => $nota) {
                echo "<p>$hobbie: ";
                for ($i = 0; $i < $nota; $i++) {
                    echo "★";
                }
                for ($i = $nota; $i < 10; $i++) {
                    echo "☆";
                }
                echo "</p>";
            }
        ?>
    </section>

    <section id="idiomas">
        <h2>Idiomas</h2>
        <ul>
            <li>Inglês – Avançado</li>
            <li>Espanhol – Avançado</li>
        </ul>
    </section>
</body>
</html>
