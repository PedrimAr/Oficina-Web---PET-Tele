<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $jsonData = file_get_contents('dados.json');
        $data = json_decode($jsonData, true);
    ?>

    <main>
    <h1>Oficina de Pacote Web</h1>
    <p>Esta oficina está sendo oferecida durante a Semana de Telecomunicações (SeTel 24) pelos alunos do grupo PET-Tele.</p>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Altura</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data["alunos"] as $aluno){
                        echo "<tr>";
                            echo "<td>".$aluno["nome"]."</td>";
                            echo "<td>".$aluno["idade"]." anos</td>";
                            echo "<td>".$aluno["altura"]." cm</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <p>Obs.: Tabela gerada dinamicamente.</p>
    </main>
    <footer>
        <p>Desenvolvido por: Pedro Rangel</p>
        <div>
            <a href="https://github.com/PedrimAr" target="_blank"><img src="GitHub-Mark-ea2971cee799-removebg-preview.png" alt="GitHub Pessoal"></a>
            <a href="https://br.linkedin.com/in/pedro-do-amaral-rangel-3b91b2331" target="_blank"><img src="https://content.linkedin.com/content/dam/me/business/en-us/amp/brand-site/v2/bg/LI-Bug.svg.original.svg" alt="Linkedin Pessoal"></a>

        </div>
    </footer>
</body>
</html>