<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indice</title>
</head>
<body>
<div>
    <p><?php imprimirVisitas(); ?></p>
    <p><?php imprimirLastSect(); ?></p>
    <p><?php imprimirMomLastAct();?></p>
    <p><?php imprimirAlias()?></p>
</div>
<form method="post">
    <label for="alias">Introduce tu nuevo alias:</label>
    <input type="text" id="alias" name="alias" placeholder="Escribe tu alias" required>

    <button type="submit">Cambiar alias</button>
</form>
<p>A donde quieres ir </p>
<div>
    <a href="/contact.php"><button>Contacto</button></a>
    <a href="/index.php"><button>indice</button></a>
</div>
</body>
</html>
