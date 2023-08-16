<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PA - Cristian Loch</title>
   
</head>
<body>
    <div class="container">
        <h1>Progressão Aritmética</h1>
        <form method="GET">
            <div class="form-row">
                <label for="a1">Digite o Primeiro Termo da P.A.:</label>
                <input type="number" name="a1">
            </div>
            <div class="form-row">
                <label for="r">Digite a Razão da P.A.:</label>
                <input type="number" name="r">
            </div>
            <div class="form-row">
                <label for="n">Digite a quantidade de Termos da P.A.:</label>
                <input type="number" name="n">
            </div>
            <button type="submit">Calcular</button>
        </form>
        
        <?php
        if (isset($_GET['a1']) && isset($_GET['r']) && isset($_GET['n'])) {
            $a1 = (float)$_GET['a1'];
            $r = (float)$_GET['r'];
            $n = (int)$_GET['n'];

            echo "<div class='result'> P.A.: ";
            for ($i = 0; $i < $n; $i++) {
                echo ($i === 0) ? $a1 : ", " . ($a1 + $r * $i) ;
            }
            echo "</div>";
        } elseif (isset($_GET['a1']) || isset($_GET['r']) || isset($_GET['n'])) {
            echo "<div class='result'>Informe todos os valores: a1, r e n.</div>";
        }
        ?>
    </div>
    <footer>
        <h4>Cristian Loch<br>
            Desenvolvimento Web II
        </h4>
    </footer>
</body>
</html>
