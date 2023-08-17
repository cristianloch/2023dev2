<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PA - Cristian Loch</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: royalblue;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            width: 700px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .form-row {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-row label, .container input {
            flex: 1;
            box-sizing: border-box;
            text-align: right;
        }
        h1 {
            margin-top: 0;
        }
        .result {
            color: #F0F8FF;
            font-weight: bold;
            font-size: 20px;
            margin-top: 20px;
            font-size: 30px;
        }
        footer {
            text-align: center;
            margin-top: 20px;
        }
        

    </style>
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
