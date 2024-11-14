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
    