# CSS
Cascading Style Sheets

## EVOLUCION Y FUNCION

Al principio HTML, era muy senzillo y no era capaz de representar recursos gráficos a la información textual. 

Para esa funcion, se creo CSS, para personalizar la pagina. 

### VENTAJAS
- Posibilidad de mantener el codigo
- Nivel de diseño, mas potente que etiquetas de HTML
- CSS Lenjuage sencillo
- Se pueden reutilizar en diferentes documentos

### INCONVENIENTES
No todos los navegadores se comportan de la misma forma antes CSS. 

### UBICACIÓN
1. INLINE ==> En la misma etiqueta

    - Se añaden propiedades CSS directamente en el elemento usando el atributo style:
    <p> style="text-align: center; color:red"</p>
    
2. INTERNO ==> En la cabercera del documento HTML

    - Podemos poner diferentes propiedades CSS dentro del mismo elemento <style>

        <style>        
        h2 {
            color: #FF0000;
        }
        </style>

3. EXTERNO ==> En un documento externo vinculado
    - Se coloca en propiedades de estilo en documento externo con extencion .css y desde el documento HTML, se enlace con esta hoja de estilo con la etiqueta "<link>" dentro del elemento head:

    <head>
        <link> rel="stylesheet" href="nombrearchivo.css type="text/css">
    </head>

### PRIORIDAD
En el caso de que diferentes declaraciones css, afectasen a la misma de forma direfente, cual tendra preferencia. 

Lo debemos de entender de forma que, a mayor cercania, mayor preferencia. Debemos de entender que lee de arriba a abajo el archivo, con lo cual si tenemos un link a un css, un style y un style en la misma etiqueta, vamos a ver la orden de la etiqueta de ese mimso h1, h2, p o bien la etiqueta que sea. 

1. ESPECIFICIDAD
Se calcula en función de un sistema de puntuación basado en las partes del selector:

    - INLINE ==> ESPECIFICIDAD = 1000
    - INTERNO ==> ESPECIFICIDAD = 100
    - EXTERNAL ==> ESPECIFICIDAD = 10
    - SELECTORES DE ELEMENTOS Y PSEUDOELEMENTOS ==> ESPECIFICIDAD = 1

Podemos añadir una regla, de forma que le demos prioridad a cualquier regla, con !important seguido del color ==> color: red !important; (FUNCIONA PARA TODAS LAS ETIQUETAS)

### SINTAXIS BÁSICA CSS
Cada regla está formado por un selector y un conjunto de declaraciones.

Una declaración, esta formada por una propiedad y su valor asociado. 

#### COMENTARIOS
Al igual que en HTML se pueden agregar comentarios entre /* */ puede ocupar varias lineas al contrario que otros lenguajes. 

#### AGREGAR SELECTORES
Podemos agruparlas de forma que afectamos a todos los h1, h2 o aquello que desemos. Simplemente los separamos con comas h1, h2 {...}

#### TIPOS DE SELECTORES AVANZADOS
1. Selector de elementos
2. Selector de id 
3. Selector de clase 
4. Selectores de hijos

Hijos de DIV
HTML
    <div class="parent">
        <h1>Titulo</h1>
        <p>..... </p>
        <h1>Titulo2 </h1>
    </div>

CSS

div > em {h1
} 
Afectara a el

Descendiente de DIV

HTML
    <div class="parent">
        <h2>Titulo</h2>
        <p>..... </p>
        <h2>Titulo2 </h2>
    </div>

CSS

div em {h1} 
Afectara a todos los h1. 

5. Selector de Hermanos Adyacentes
HTML
    <div class="parent">
        <h2>Titulo</h2>
        <p>..... </p>
        <p>Titulo2 </>
    </div>

CSS

h1 + p {propiedad: valor}

6. Pseudoclases

id(name):visited ==> Afecta a el id del nombre cuando se visita
a: visitied ==> Afecta a todos aquellos elementos que sean <a>
7. Pseudoelementos

Seleciona  la primera linea de un <p>

p::first-line {
    color: red;
}


