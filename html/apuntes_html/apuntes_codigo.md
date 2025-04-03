[Creación apuntes HTML - 14/11/2024 18:19.]: #

# APUNTES HTML

En este documuento, vamos a organizar todos los elementos importantes a la hora de picar codigo en html.
Creo que es conveniente que los separemos en tres grandes bloques. 
Distinguiendo entre:

## Día 1 de apuntes HTML - Páginas

1. Elementos Grandes
    - html 5 ==> Estructura base html.
    - head ==> Reside información del documento y se navega por el, aunque no se vea en la misma página. 
    - link ==> Nos sirve para "linkear" otras páginas o documentos.
    - title ==> Breve desripción que identifica la página.
    - body ==> Reside información del documento.
    - div ==> Divisiones del contenido de la página.
    - h1 ==> Titulo con estilo 1.
    - h2 ==> Titulo con estilo 2.
    - h3 ==> Titulo con estilo 3.
    - li ==> Especifican los items de la lista.
    - ul ==> Lista desordenada.
    - ol ==> Lista ordenada.
    - a ==>  Crea enlaces internos o externos, archivos, ubicaciones, direcciones de correo, cualquier otra URL.
    - p ==> Parrafo.
    - img ==> Insertar una imagen.
    - br ==> Salto de espacio.
    - hr ==> Linea separadora. 
    

2. Elementos Medianos
    - content
    - rel ==> Nos permite relacionar, generlamente páginas. 
    - href ==> Enlazar elementos internos o externos.
    - id ==> Nombrar a ese elemento (lo podemos usar en cualquier elemento para "etiquetarlo").
    - src ==> Pondremos la ruta donde queramos insertar aquella imagen o documento. 
    - type ==> Nos determina el tipo de entrada que vamos a utilizar.
    - alt ==> En caso de error veremos el contenido que se introduzca.


3. Elementos más bien gráficos
    - strong ==> Texto en negrita
    - em ==> Texto en cursiva
    - u ==> Texto subrayado
    - width ==> Ancho
    - height ==> Alto

[Actualización apuntes HTML - 14/11/2024 19:03.]: #

## Día 2 de apuntes HTML - Formularios

1. Elementos/Atributos Grandes
    - form ==> Formato de formulario. Normalmente se linea a un php. 
    - label ==> El label nos sirve como si fuese un "p", pero lo podemos relacionar con otro elemento, como puede ser un "input".
     - for ==> Nos permite indicar hacia donde mirar
    - input ==> El input principalmente recaba datos, con diferentes formas para hacerlo. 
    - fieldset ==> Fieldset nos permite añadir una línea alredor del texto
    - legend ==> Nos pemite añadir un título al "fieldset". 
    - select ==> Nos permite añadir varias opciones a seleccionar. 
    - option ==> Es la herramienta que nos va a permitir añadir las opciones. 
    - textarea ==> Nos permite añadir un campo donde el usuario puede añadir un comentario. 
    - button ==> Nos permite añadir un boto. 

2. Elementos/Atributos Medianos
    - action ==> Definde la URL donde se enviaran los datos de los formularios.
    - method ==> Metodo de envio de datos.
        - get ==> de forma insegura.
        - post ==> de forma segura.
    - name ==> Nombre del campo de entrada. 
    - placeholder ==> Texto que aparece en el campo cuando esta vacío. 
    - target ==> Indico donde se debe de mostrar la respuesta del formulario.
        - _self ==> La respuesta se carga en la misma ventana.
        - _blank ==> Abre respuesta en nueva ventana.
    - value => Valor predeterminado campo de entrada.
    - select ==> Formato de la opción. En este caso de selección. 
    - requiered ==> Indica que el campo debe de compltearse. 
    - disabled ==> Desactiva el campo. 
    - Readonly ==> Hace que el campo solo sea de lectura. 
    - cols ==> Caractares disponibles.
    - rows ==> Filas máximas.

    [Actualización apuntes HTML - 21/11/2024 19:03.]: #
    ## Creación de tablas en HTML
    1. Para crear y cerrar una tabla usaremos:
        - <table> y </table>
        1.1 Elementos de tabla
            - Filas ==> rows. Usaremos <tr>
            - Columnas ==> col. Usaremos <td>
            - Juntar celdas en horizontal: <colspan= "numero de celdas">
            - Juntar celdas en vertical: <rowspan= "numero de celdas">
            
        1.2 Elementos de encabezado
            - Fila ==> <th> El th, nos sirve para darle formato de "titulo" a la linea, y alinear contenido del título.
            - Borde ==> <table border="1" width="100%"> 
    
    _La diferencia que vemos entre th y td, es a nivel semantico, donde el t"h" significa header y le da más importancia_
    
    2. Partes de una tabla
        - encabezado ==> header. Usaremos <thead>
        - Cuerpo ==> body. Usaremos <tbody>
        - Pie de pagina ==> footer. Usaremos <tfoot>
    
    3. Atributos
        - alinear ==> Usaremos align en el tr, quedando: <tr align="center"> en este caso centrado el centro
        - color de fondo ==> Usaremos: <tr bgcolor="blue"> o bien  <tr bgcolor="0000ff">
            + Ejemplos de colors:
                * Negro: 000000
                * Blanco: ffffff
                * Rojo: ff0000
                * Lima (verde brillante): 00ff00
                * Azul: 0000ff
                * Amarillo: ffff00
                * Cian (aqua): 00ffff
                * Magenta (fucsia): ff00ff
                * Gris: 808080
                * Plateado (gris claro): c0c0c0
                * Gris oscuro: 404040
                * Marrón: a52a2a
                * Naranja: ffa500
                * Verde oscuro: 006400
                * Azul marino: 000080
                * Púrpura: 800080
                * Rosa: ffc0cb
                * Oro: ffd700
    [Actualización apuntes HTML - 16/01/2025]: #
    ## Posicionamiento
    Con la opcion "style" podemos ajustar algunos parametros, por ejemplo: color de fondo, ancho, alto, dispocicion
        <style>
            .container {
                width: 100px;
                height: 100px;
                background-color: blue;
                padding: 10px;
                }
    Hay que tener en cuenta que va a ocupar en este caso no 100px, sino 120px, ya que el pading nos va a añdir 10px por lado en cualquier sentido es decir de forma horizontal o vertical, quedara: 120x120.
    
    Si tuviesemos un border, tambien deberiamos de aplicar esta misma logica, si añadimos 5px de border, ya hablamos de 130px.
    
    Haciendo *_FN+F12_*, es una herramienta que podemos ver desde la pagina de google para ver esta informacion. 
    
    Es importante que tengamos el cuenta el box-sizing, por este motivo y cambiar el: "box-sizing: content-box" a "box-sizing: border-box". Que se implemento con el CSS3. 
    Esto es imporante aplicarlo por la "retrocompatibilidad".
    [Actualización apuntes HTML - 23/01/2025]: #

    ### Propiedad Overflow
    
    La propiedad overflow, nos pemite esconder aquello que no cabe o no entra para que no se desordene la pagina, overflow hidden lo esconde, overflow visible lo vemos desbordado y con un overflow scroll nos pemite "scrollear". 
    *MIRAR HTML DE POSICIONAMIENTO (posicionamiento.html)* 
    Encontramos tambien la opcion "text-overflow". Clip y ellipsis.
    - Clip ==> Desborda el texto. 
    - Ellipsis ==> Al final de la cadena de texto se ven puntos suspensivos, para dar a entender que hay más texto. *_es importante que overflow, este en hidden_*.
    - String ==> Es una funcion aun no implementada que nos permitiria poner texto peronalizado. 

    EJ:<style>
        .container {
            width: 130px;
            height: 120px;
            background-color: #FFFFFF;
            padding: 10px;
            border: 10 px solid #FF0000;
            box-sizing: border-box;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        section {
            display: block;
            box-sizing: border-box;
        }
    </style>

    ### Position: Section y ".cotainer"
    1. Position: Static ==> Se guia por la posicion del html por defecto.
    2. Position: Absolute ==> Lo ubica respecto al documento html, dónde empieza y acaba body. Pero tenemos que definir a cuanta distancia (px por ejemplo) queremos ponerlo.
        - Top ==> Respecto a su posicion arriba
        - Bottom ==> Respecto a su posicion abajo
        - Left ==> Respecto a su posicion a la izquierda
        - Right ==> Respecto a su posicion a la derecha
    _SINTAXIS_ = _"Top: 0;"_
    3. Position: Relative ==> Imaginemos que relative, es padre de un absolute. Este absolute, se aplicara en relacion al relative. Es decir:
    Con este codigo: 
    <section>
        <div class="container">container</div>
        <!-- <div class="container">container</div> -->
    </section>
    
    Con los styles:
    .container {
        position: relative;
    }
    
    y

    section {
        position: absolute;
        top:0;
    }

    Va a aplicar ese *"absolute"* en relacion al *"relative"*. Si no hubiese este relative, se aplicaria directamente respecto al html, ya que no hay ningun otro padre en ese caso. 
    
    4. Position: Fixed ==> La posición se queda fija, independientemente de si hacemos scroll o no. Fijas respecto al viewport (la pantalla no la html).

    5. Position: Sticky ==> Esta enganchado al contenedor relative.

## Composición
### Display
Tenemos opciones para los display, para entenderlo vamos a decir que en block=vertical y flex=horizontal.
### Flex-direction
Parecido nos pasa con flex-direction, row = horizontal, column = vertical. Pero tenemos la opción de invertir con flex-direction: row-reverse. Por ejemplo:
.container {
            height: 450px;
            width: 450px;
            background-color: #FFFFFF;
            display: flex;
            flex-direction:row-reverse;
        }
### Jusitify Content
Tambien podemos alinear el contenido con "Jusitify content".
1. Space-around ==> Espaciado alrededor
2. Space-between ==> Espacio entre
3. Space-evenly ==> Espacio proporcional (iguales)

### Align-Items
1. Flex-start ==> arriba
2. Flex-end ==> abajo
3. Flex-center ==> centro

### Flex-wrap
1. Flex-wrap: nowrap ==> Va a compactarlo segun disposición (display)
2. Flex-wrap: wrap ==> Va a respetar el espacio de cada elemento. 
Tambien existen los wrap-reverse, funcionan de la misma forma que el row o column-reverse. 

### Order 
Segun el orden que pongamos se van a mostrar de una u otra forma, es decir:

        .item-1{
            order: 2;
        }
        .item-2{
            order: 1;
        }
        .item-3{
            order: 1;
        }
    <div>
        <div class="container">
        <div class="item item-1">1</div>
        <div class="item item-2">2</div>
        <div class="item item-3">3</div>
    </div>

Se mostraría en resultado, 2 - 3 - 1.
### Flex-Grow
Ese item, crecera lo máximo que pueda en el espacio del padre. Imaginemos que fuera el item-1. 
Pues este crecera lo maximo que pueda. <form action="" method="post"></form>

    