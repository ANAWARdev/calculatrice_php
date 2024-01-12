<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="traitement.php" method="post">
            <input type="number" name="nombre" required step="0.01">
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>

                <input type="number" name="nombre1" required step="0.01" min="0.5">
                <input type="submit" name="b1" value="click ">
        </form>
    </main>
</body>

</html>