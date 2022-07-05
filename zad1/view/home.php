<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main style="max-width: 720px; display: flex; flex-direction: column; row-gap: 20px">
        <form>
            <fieldset>
                <label>Podaj ciąg numerów</label> <br>
                <input type="text" name="toStringInput"/> <br>
                <input type="submit"  value="Zamień na tekst"/> <br>
                <?php
                    if(isset($_GET['toStringInput'])){
                        echo $phoneKeyboard->showResult($_GET['toStringInput'], $phoneKeyboard->convertToString($_GET['toStringInput']));
                    }
                ?>
            </fieldset>
        </form>

        <form>
            <fieldset>
                <label>Podaj ciąg znaków</label> <br>
                <input type="text" name="toNumberInput"/> <br>
                <input type="submit"  value="Zamień na numery"/> <br>
                <?php
                if(isset($_GET['toNumberInput'])){
                    echo $phoneKeyboard->showResult($_GET['toNumberInput'], $phoneKeyboard->convertToNumeric($_GET['toNumberInput']));
                }
                ?>
            </fieldset>
        </form>
    </main>
</body>
</html>