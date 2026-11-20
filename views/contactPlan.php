<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
</head>
<body>
<div>
    <p><?php imprimirVisitas(); ?></p>
    <p><?php imprimirLastSect(); ?></p>
    <p><?php imprimirMomLastAct(); ?></p>
    <p><?php imprimirAlias(); ?></p>
</div>

<div>
    <p>1. ¿Qué parte del estado está en el navegador y qué parte está realmente en el servidor?</p>
    <p>la cookie PHPSESSID y la informacion que nosotros queremos que este </p>
</div>

<div>
    <p>2. ¿En qué se diferencia unset($_SESSION[...]) de destruir completamente la sesión?</p>
    <p>Destruit las sesiones borra todos los datos del servidor mientras que unset borra la informacion pero no la id ni los datos</p>
</div>

<div>
    <p>3. ¿Por qué no utilizarías una sesión como almacenamiento permanente de información de negocio?</p>
    <p> porque se borra cada vez que alguien cierra la pestaña o se va del servidor</p>
</div>

<p>A donde quieres ir </p>
<div>
    <a href="/index.php"><button>indice</button></a>
    <a href="/info.php"><button>informacion</button></a>
</div>
</body>
</html>
