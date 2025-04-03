# XML Y BOOTSTRAP
Boostrap:
https://getbootstrap.com/docs/4.3/getting-started/introduction/

- Estilo link: https://getbootstrap.com/docs/4.3/getting-started/introduction/

Tenemos el archivo XML. Podemos imprimirlo con un vardump, de esta forma lo podemos ver por elementos. 
<?php
$films = simplexml_load_file('./cartelara.xml');
var_dump($films);
?>

## VALIDAR XML
Para validar que exista, lo hacemos con un if, comparando los nombres
if (file_exists ('./cartelera.xml')){
    $films = simplexml_load_file('./cartelera.xml');
} else {
    echo "No se encuentra el archivo XML";
    exit;
}

Despres de esta validacion, podemos empezar con nuestro archivo. 
Tenemos en "nav por defecto de la web de bootstrap".

## GUARDAR POR LI
Para guardar cada peli de forma separada, haremos un pequeño php

<?php
foreach ($films->film as $fila) {
    echo '<li class="nav-item">';
    echo $fila["cine"];
    // echo '<a class="nav-link" href="#">'. $fila->title. '</a>';
    echo '</li>';
}
?>

Con esto guardaremos cada "film" como "fila". Y los podremos separar uno por uno. 
