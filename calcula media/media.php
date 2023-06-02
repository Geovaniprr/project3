<?php
if (isset($_POST["submit"])) {
    $nota1 = $_POST["nmbNumber1"];
    $nota2 = $_POST["nmbNumber2"];
    $nota3 = $_POST["nmbNumber3"];
    $nota4 = $_POST["nmbNumber4"];
    $nota5 = $_POST["nmbNumber5"];

    if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4) && is_numeric($nota5) && $nota1 >= 0 && $nota1 <= 10 && $nota2 >= 0 && $nota2 <= 10 && $nota3 >= 0 && $nota3 <= 10 && $nota4 >= 0 && $nota4 <= 10 && $nota5 >= 0 && $nota5 <= 10) {
        $media = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

        if ($media < 6) {
            echo "<span style='color: blue;'>Reprovado</span>";
            echo "<p style='color: red;'>Você precisa se esforçar mais!</p>";
        } elseif ($media >= 6 && $media <= 6.9) {
            echo "<span style='color: yellow;'>Aprovado com Regular</span>";
            echo "<p style='color: black;'>Bom trabalho, mas você pode melhorar!</p>";
        } elseif ($media >= 7 && $media <= 8) {
            echo "<span style='color: green;'>Aprovado</span>";
            echo "<p style='color: purple;'>Você foi bom, parabéns!</p>";
        } elseif ($media >= 9 && $media <= 10) {
            echo "<span style='color: gold;'>Aprovado com Muito Bom</span>";
            echo "<p style='color: pink;'>Você arrasou, parabéns!</p>";
        }
    } else {
        echo "Por favor, Digite um número de 0 a 10";
    }
}
?>