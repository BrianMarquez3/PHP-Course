
<h2 align="center"> Learn PHP Beginner To Advanced | PHP Course 🐘&nbsp;</h2>

<p align="center">
  
  <a href="https://github.com/BrianMarquez3/PHP-Course/tags">
    <img src="https://img.shields.io/github/tag/BrianMarquez3/PHP-Course.svg?label=version&style=flat" alt="Version">
  </a>
  <a href="https://github.com/BrianMarquez3/PHP-Course/stargazers">
    <img src="https://img.shields.io/github/stars/BrianMarquez3/PHP-Course.svg?style=flat" alt="Stars">
  </a>
  <a href="https://github.com/BrianMarquez3/PHP-Course/network">
    <img src="https://img.shields.io/github/forks/BrianMarquez3/PHP-Course.svg?style=flat" alt="Forks">
  </a>
  <a href="https://github.com/BrianMarquez3/PHP-Course/network">
    <img src="https://img.shields.io/badge/coverage-80%25-yellowgreen">
  </a>
   <a href="https://github.com/BrianMarquez3/PHP-Course/network">
    <img src="https://img.shields.io/badge/gem-2.2.0-blue">
  </a>
   <a href="https://github.com/BrianMarquez3/PHP-Course/network">
    <img src="https://img.shields.io/badge/dependencies-out%20of%20date-orange">
  </a>
   <a href="https://github.com/BrianMarquez3/PHP-Course/network">
    <img src="https://img.shields.io/badge/Plataform-Windows-blue">
  </a>
</p>
  
![php](./images/code.jpg)
## Tabla de contenidos

- [Que es PHP](#Que-es-PHP)
- [Cualidades](#Cualidades)
- [Desarrollo Web](#Desarrollo-Web)
- [Servidores](#Servidores)
- [La Web Dinamica](#La-Web-Dinamica)
- [XAMPP](#XAMPP)
- [Servidor Portable](#Servidor-Portable)
- [Post Instalacion](#Post-Instalacion)
- [Entorno de Desarrollo](#Entorno-de-Desarrollo)
- [Codigo](#Codigo)
- [Cadenas de texto](#Cadenas-de-texto)
- [Heredoc](#Heredoc)
- [Niveles de Error](#Niveles-de-Error)
- [Operadores](#Operadores)
- [Operadores de Comparación](#Operadores-de-Comparación)
- [Operador Ternario](#Operador-Ternario)
- [Operador "Nave Espacial](#Operador-"Nave-Espacial")
- [Ciclos](#Ciclos)
- [Matrices](#Matrices)
- [Array Asociativo](#Array-Asociativo)
- [Iteración de Arrays asociativos](#Iteración-de-Arrays-asociativos)
- [Funciones para el manejo de Arrays](#Funciones-para-el-manejo-de-Arrays)
- [Paso de datos entre documentos GET y POST](#Paso-de-datos-entre-documentos-GET-y-POST)
- [Formularios](#formularios-i)
- [Formularios II](#formularios-ii)
- [Envio de checkbox mediante Formularios](#Envio-de-checkbox-mediante-Formularios)
- [Navegación de una web usando templates](#Navegación-de-una-web-usando-templates)
- [Inclusion de plantillas con include y requires](#Inclusion-de-plantillas-con-include-y-requires)
- [Debbug](#debbug)
- [Play List PHP](#Spotify-PHP)


## Que es PHP

PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.

* [PHP](https://www.php.net/downloads.php)
* [MYSQL](https://www.mysql.com/downloads)

## Cualidades

- Desarrollo de web dinamico
- No tiene costo
- Multiplataforma
- Servicio Automatizado

## Desarrollo Web

| LADO DEL CLIENTE                                             |     LADO DEL SERVIDOR            |  
|--------------------------------------------------------------|:--------------------------------:|
| HTML                                                         |PHP                               |    
| CSS                                                          |PHP                               | 
| JAVASCRIPTS                                                  |PHP                               |       

## Servidores

<p>WampServer es un entorno de desarrollo web de Windows. Te permite crear aplicaciones web con Apache2, PHP y una base de datos MySQL. Además, PhpMyAdmin le permite administrar fácilmente sus bases de datos.</p>

![php](./images/wamp.png)

## La Web Dinamica
 
- Una Página web dinámica genera su contenido según la petición de un usuario o contexto de la misma.
- Todo desde la programación (con las estructura y funciones del lenguaje)
- La Información accedida puede administrarse desde una base de datos.

## XAMPP

_Paquetes instaladores servidores_

* [WAMP](https://sourceforge.net/projects/wampserver/) - WampServer es una plataforma de desarrollo web en Windows que le permite crear aplicaciones web dinámicas con Apache2, PHP, MySQL y MariaDB. 
* [MAMP](https://www.mamp.info/en/downloads/) - MAMP instala un entorno de servidor local en cuestión de segundos en su computadora Windows o macOS. MAMP es gratuito y se instala fácilmente.
* [XAMP](https://www.apachefriends.org/download.html) - XAMPP es una distribución de Apache fácil de instalar que contiene MariaDB, PHP y Perl. Simplemente descargue e inicie el instalador. Es fácil.

![php](./images/xamp1.png)

## Servidor Portable

* [ZWAMP (Portable oficial, Windows)](https://sourceforge.net/projects/zwamp/) - Un paquete de servidor web ligero de instalación cero que se ejecuta en Windows. El proyecto tiene como objetivo proporcionar las últimas versiones de producción / estables de Apache, MySQL, PHP, Adminer, MongoDB, MemCached, SQLite, eAccelerator y Alternative PHP Cache (APC) para impulsar el rendimiento del servidor.
* [ZWAMP alterado (No oficial)](https://github.com/BrianMarquez3/PHP-Course/blob/main/Resource/zwamp%20portable.rar) - Un paquete Portable Modificado


## Post Instalacion

`WAMPP` C:\wamp\htdocs  <br>
`XAMPP` C:\xampp\htdocs  <br>
`ZWAMP` /drive/web <br>
`MAMP` /Applications/MAMO/htdocs <br>
`LINUX` /var\www/html  <br>

## Entorno de Desarrollo

* Visual Studio Code
* Sublime Text
* Brackets
* Notepad++
* DreamWeaver
* TextMate

##  Codigo


_Apertura nativa de PHP_
```js
<?php
  CODIGO PHP
?>
```

_Apertura corta (poco segura)_

```js
<?
  CODIGO PHP
?>
```

## Cadenas de texto

- Toda cadena de texto debe mostrarse en trer comilllas (sean dobles o simples)

- Cualquier Srting o que no esté "encomilado " PHP tratára de evauarlo como 
    - Una Palabre reservada del lenguaje
    - Una constante (aunque no se encuntre en mayúscula)

## Heredoc

- Heredoc es una manera "Alternativa" de delimitar y finalizar de un string.

- Tanto para hacer echo o guardar es una varable, se inicia con la secuencia de trers signos menores <<<

- Junto a los <<< viene una secuencia de caracteres delimitadores a tu eleccion

```js
$lista = <<<HEREDOC
    <ul>
        <li>$alumno1, el el primer alumno </li>
        <li>$alumno2, el el segundo 'mejor' alumno </li>
        <li>$alumno3, es el "ultimo alumno </li>
    </ul>

HEREDOC;
?>
```
## Niveles de Error

* E_ERROR : Error grave (fatal error)
* E_WARNING: Error leve (non-fatal error)
* E_PARSE: Error sintactico o de parseo
* E NOTICE: Avisos de Interprete de PHP 

## Operadores

* Las variables numericas se pueden modificar con uno operadores especiales:

-   INCREMENTO (de uno en uno): variable++ ✔️ variable = variable +1
-   DECREMENTO (de uno en uno): variable-- ✔️ variable = variable -1
-   INCREMENTO (mas de uno): variable += 5 ✔️ variable = variable +5
-   DECREMENT (mas de uno):  variable -= 5 ✔️ variable = variable -5

| Carpeta                    | Link |     
|----------------------------|:-----------:|
| [Operadores](https://github.com/BrianMarquez3/PHP-Course/tree/main/Operadores)          |      ✔️     | 
| [Operador Ternario](https://github.com/BrianMarquez3/PHP-Course/tree/main/Operador%20Ternario)          |      ✔️     | 

---
## Operadores de Comparación

Partiendo de valores de cualquier tipo , nos devolverá un resultado de tipo <b>Booleano</b>

✨   Mayor que: > <br>
✨   Menor que: < <br>
✨   Mayor o Igual que: >= <br>
✨   Menor o igual que: <= <br>
✨   Comparacion: == <br>

## Operador Ternario 

_Ejemplo_

```js
$logueado = true;

echo $logueado ==true ? # pregunta para hacer una evaluacion
    'usuario logueado ' :
    'usuario sin autentificar';
?>
```
| Carpeta                    | Link |     
|----------------------------|:-----------:|
| [Operador Ternario](https://github.com/BrianMarquez3/PHP-Course/tree/main/Operador%20Ternario)          |      ✔️     | 

---

## Operador "Nave Espacial"

Introducido en PHP 7 (no existe en las versiones anteriores), este operador permite saber si el primer valor es menor , igual o mayor al segundo valor.

![php](./images/espacial.png)

## Ciclos

- El Ciclo de repeticion <b>for</b> es uan esctructura finita, Al escribir el codigo le indicamos a PHP la cantidad de veces que debe ejecutarse.

- Para eso le debemos indicar tres datos al crearlo:

  * <b>Inicio</b> del ciclo: Inicializando una variable de tipo number
  * <b>Limite</b> de las repeteciones: Una Comparacion (de cualquie tipo) que evaluae el valor de esa variable.
  * <b>Desplazamiento</b> de la variable: Cualquier operacion aritmetica que modifique la variable inicial (de forma que llegue al limite)

| Carpeta                    | Link |     
|----------------------------|:-----------:|
| [Ciclos While, Do While y For](https://github.com/BrianMarquez3/PHP-Course/tree/main/Ciclos%20While%2C%20Do%20While%20y%20For)          |      ✔️     | 
| [CIclo FOR-EACH](https://github.com/BrianMarquez3/PHP-Course/tree/main/CIclo%20FOR-EACH)          |      ✔️     | 

---
## Matrices

- Una matriz es un array que tiene otros arrays como elementos.
- Se utiliza cuando por cada elemento del array principal necesitamos manipular mas informacion.

```php

$elementos = array(
    /*0*/ array(
        /*0*/'input',
        /*1*/'text',
        /*2*/'nombre',
        /*3*/'Tu nombre completo' //placeholder
    ),
    /*1*/ array(
        'input',
        'email',
        'corre',
        'usuario@email.com'
    ),
    /*2*/ array(
        'select',
        'motivo'
    )
);
//var_dump($elementos);
//elemento 3 y fila 3
echo $elementos[0][3]
```

| Carpeta                    | Link |     
|----------------------------|:-----------:|
| [Matrices](https://github.com/BrianMarquez3/PHP-Course/tree/main/Matrices)          |      ✔️     | 
| [Matrices II](https://github.com/BrianMarquez3/PHP-Course/tree/main/Matrices%20II)          |      ✔️     | 

---
## Array Asociativo

* Un Array asociativo es el que en lugar de indices basados en numeros los tiene con cadenas de texto

* de esa manera los indices estará entre comillas.

* Esto permite salir de las abstracion de lo indices 0,1,2 y facilita identificar la informacion que estamos manejando

## Instanciar un array asociativo

* En PHP tenemos dos maneras de crear un array con indices asociativos.
* la Primera opcion es crear el array vacio y luego ir creado indice por indice (de la misma manera asignabamos los numericos).

Ejemplo

```php
<?php 

$select = array( );
$select['name'] = 'motivo';
$select['required'] = false;
$select['tabindex'] = 2;


//var_dump($select);

$elementos = array( 
	/*0*/ array( 
		'etiqueta' => 'input',
		'type'  => 'text',
		'name'  => 'nombre',
		'placeholder' =>  'Tu nombre completo',
		'texto'  => 'Tu nombre'
	),
	/*1*/ array( 
		'etiqueta' => 'input',
		'type' => 'email',
		'name' => 'correo',
		'placeholder' => 'usuario@email.com',
		'texto' => 'Tu correo'
	),
	/*2*/ array( 
		'etiqueta' => 'select',
		'name' => 'motivo',
		'texto' => 'Motivo del mensaje',
		'opciones' => array( 'contacto', 'sugerencia', 'reclamo' )
	),
	array( 
		'etiqueta' => 'input',
		'type' => 'checkbox',
		'name' => 'item',
		'texto' => 'Acepto los terminos y condiciones'
	)
	
);
for( $i = 0; $i < count($elementos); $i++ ){
    	
	echo '<p>'.$elementos[$i]['texto'].'</p>';
	
	if( $elementos[$i]['etiqueta'] == 'input' ){
        echo '<input type="'.$elementos[$i]['name'].'" name="'.$elementos[$i]['name'].'" />';
        
	}else if( $elementos[$i]['etiqueta'] == 'select' ){
        echo '<select name="'.$elementos[$i]['name'].'">';
        
        //motivo de mensaje
		for( $x = 0; $x < count ($elementos[$i]['opciones'] ); $x++ ){
			echo '<option>';
			echo $elementos[$i]['opciones'][$x];
			echo '</option>';
			
		}
		echo '</select>';
	}
	
	echo '<hr />';
}

```
| Carpeta                    | Link |     
|----------------------------|:-----------:|
| [Array Asocitivo](https://github.com/BrianMarquez3/PHP-Course/tree/main/Arrays%20asociativos)          |      ✔️     |   

---

## Iteración de Arrays asociativos

## Utilidad del Array Asciativo

- La ventaja de Array asiciativo está en la posibilidad de aprovechar el indice u el valor para tener dos datos por casa elemento.

- Y la Ventaja es que la mayoria de los componentes en web se pueden reducir a dos datos:

    - En las imagenes: La ruta y el texto alternativo
    - En lo input de tipo radio/checkbox: el valor y su label (lo mismo para los option de un select).

## Recorrer Asociativos

- Es la estructura <strong>foreach</strong>, que recorre todo los elementos de un array automaticamente.

## Estructura Foreach

- El foreach requiere dos o tres datos entre sus parentesis
- primero el array que queremos iterar.
- Segundo. optativo una variable que capturará los indices de cada vuelta del ciclo de repeticion
- tercero, una variable que capturara los valores de cada vuelta del foreach.

| Carpeta                    | Link |     
|----------------------------|:-----------:|
[Iteración de Arrays asociativos](https://github.com/BrianMarquez3/PHP-Course/tree/main/Iteraci%C3%B3n%20de%20Arrays%20asociativos)          |      ✔️     | 

---
## Funciones para el manejo de Arrays

##  Funciones para el manejo de Arrays

- Los Array tiene varias funciones para manipular sus elementos.
- Por ejemplo , las funcion <strong>array_push() </strong> que nos permite agregar uno o varios elemtos al final del array.

- si queremos agregar al principio del array, podemos usar la funcion <strong>array_unshift() </strong>

- Podemos Eliminar un elemento por medio del <strong> array_pop()</strong>

- si queremos agregar al final del array, podemos usar la funcion <strong>array_unshift() </strong>

- y lo que existe una funcion llamada <strong>array_splice()</strong> que permite agregar o quitar elementos en cualquier lugar del arrat

## Verificar el Array

- Podemos verificar si el array tione o no un determado elemento.
- En este caso sera una funcion distinta segun se trate de un valor o de un indice
- la funcion <strong> in_array() </strong> recibe un array y un valor, devolverá verdadero si el valor existe dentro del array.

- La funcion <strong> isset() </strong>, verifica si existe un determinado indice adentro del array tanto el array como el indoce que estamos verificando.


## Ordenar los Arrays

- La Funcion <strong> sort() </strong> permite ordenar un array por su valores (de mennor a mayor)
- La Funcion <strong> rsort() </strong> hace el ordenamiento inverso (de mayor a menor)
- La Funcion <strong> ksort() </strong> ordena el array por sus indices en orden ascendente.
- La Funcion <strong> krsort() </strong> hace el ordenamiento del array seguin los indices en orden inverso.

## De array a String

- Podemos unir todos lo elementos de un array en una unica cadena de texto por medio de la funcion <strong> implode() </strong> que recibe dos datos.

- El camino inverso es el explode(), ue separa una cadena de texto en un array. tambien recibe dos datos.

## Obtener un numero al azar

- PHP tiene la funcion <strong> rand() </strong> para sacar un valor al azar, que recibe dos datos entre parentesis 


| Carpeta                    | Link |     
|----------------------------|:-----------:|
[Funciones para el manejo de Arrays](https://github.com/BrianMarquez3/PHP-Course/tree/main/Funciones%20para%20el%20manejo%20de%20Arrays)          |      ✔️     | 

---
## Paso de datos entre documentos GET y POST

## Paso de datos

- Cuando creamos una variable, la misma solo existe en el dcumento donde fue creada
- Al hacer click en otro vinculo, esta inforacion se elimina de la memoria
- Para pasar un dato (o un valor)de un archivo a otro, PHP nos ocrece 3 tecnicas:

* Enviar Datos por GET ➜ Por Formularios y vinculos
* Enviar Datos pro POST ➜ Formularios unicamente
* USAR VARIABLES DE SESION ➜ 

## Diferencia entre GET Y POST
### GET

- El Envio de dato por GET tiene 3 desventajas importantes sobre POST.
    * La Informacon es enviada de forma visible por URL, bajo la estructura

    ```php
    htttp://dominio.com/carpeta/archivo.php? variable1=valor&variable2=valor2
    ```

- Tiene un limite de 2048 caracteres, desde el principio al final(incluye http)

- No permite adjuntar archivos (no reconoce el input de tipo file)
- Tiene mejor Performanse.
- Se puede guardar en favoritos o compartir en redes sociales.


### POST

- No es visible y es para gran cantidad de documento
- Forma parte de encabesado (error 404)

| Carpeta                    | Link |     
|----------------------------|:-----------:|
[Paso de datos entre documentos (GET y POST)](https://github.com/BrianMarquez3/PHP-Course/tree/main/Paso%20de%20datos%20entre%20documentos%20(GET%20y%20POST))          |      ✔️     |

---
## Formularios

- Los Formularios permiten el envio de tanto GET como por POST
- Eso se define con el atributo <strong> method </strong> que tendra uno de eso dos valores.
- La Informacion ingresada sera enviada al documento que haya sido indicado en el atributo <strong>action</strong> del formulario

## Atributos y controles

- Todos los campos del formulario deben tener atributo name.
- Cuaquier control que no tenga un <strong> name </string> será omitido en el envio.
- Y en en caso de los controlesa de seleccion, deberan tener un <strong>Value</string> que sea representativo de la informacion a enviar.
- Si un radio o ckeckbox no tiene <strong>Value</string>, se envia el valot <strong>On</string> (pero no dice cual es el campo que fue seleccionado).

| Carpeta                    | Link |     
|----------------------------|:-----------:|
[Formularios](https://github.com/BrianMarquez3/PHP-Course/tree/main/Formularios)          |      ✔️     |

---

## Formularios II

### Recibir datos

- Para PHP, GET y POST son arrays asociativos con la informacion enviada desde un archivo al otro.

    * para obtener los datos enviados por GET se usa $_GET[]
    * Para obtener los datos enviados por POST, $_POST[]

Entrer los corchetes va (como cadena de texto, por que es un Array Asociativo)
el dato que estamos buscando:

    * para los datos POST, el name del campo del formulario.
    * para los datos por GET, el no,bre de la variable recopila por URL.

### El action del formulario

- El documento que procesa la informacion se conoce como "Documento de acccion"
- Seguin el objeto del formulario , este PHP trabajará con la base de datos o enviara una notificacion por mail.

| Carpeta                    | Link |     
|----------------------------|:-----------:|
[Formularios II Procesar datos enviados](https://github.com/BrianMarquez3/PHP-Course/tree/main/Formularios%20II%20Procesar%20datos%20enviados)          |      ✔️     |

---

## Envio de checkbox mediante Formularios

### Envio de Checkbox

- Al igual que lo demas compos el input <strong> input </strong> de timpo  <strong> checkbox </strong> debe tener un name. 
- pero cada <strong> checkbox </strong> debe tener un noombre diferente.
- Y como ya dijimos , todo <strong> checkbox </strong> que no fue seleccionado, no se envia al <strong> action  </strong> del formulario.
- El problema es que hacer un $_POST O $_GET de un elento que no esiste genera error.

    ```
    Categorias seleccionadas: $_POST[categoria0]  $_POST[categoria1]  $_POST[categoria2] $_POST[categoria3] $_POST[categoria4]<br />
    ```

- Usando la funcion <strong> isset($_POST['Nname_box']) </strong> que retornará verdadero si existe el <strong> input </strong> y falso si no existe.

### Simplificar el Checkbox

- Claro que hacer un <strong>  isset()  </strong>, por cada campo es aceptable con 5 o 10 checkbox.
- En un cantidad mayor se vuelve inmanejable

```
if (isset($_POST['categoria0'])){
    $categorias_seccionadas .= " ".$_POST['categoria0'];
}

if (isset($_POST['categoria1'])){
    $categorias_seccionadas .= " ". $_POST['categoria1'];
}

if (isset($_POST['categoria2'])){
    $categorias_seccionadas .= " ".$_POST['categoria2'];
}

if (isset($_POST['categoria3'])){
    $categorias_seccionadas .= " ". $_POST['categoria3'];
}

if (isset($_POST['categoria4'])){
    $categorias_seccionadas .= " ".$_POST['categoria4'];
}
```

- Por lo cual la solucion es hacer que el <strong>  name  </strong> en HTML tengan formato de array -> cbox[].
- Para HTML es un nombre valido y PHP asume que $_POST['cbox'] es efectivamente un array, por el cual podemos recorrerlo con un for/foreach o unirlos con un implode().

| Carpeta                    | Link |     
|----------------------------|:-----------:|
[Envio de checkbox mediante Formularios](https://github.com/BrianMarquez3/PHP-Course/tree/main/Envio%20de%20checkbox%20mediante%20Formularios)          |      ✔️     |

---

## Navegación de una web usando templates

###  Qué es un template

- Un Template es cualquier fragmeto de codigo HTML cuyo contendo no definido de antemano se va a completar con ayuda de php.

- Puede ser un <strong> Componente </strong> 
- Puede ser algo <strong>MICRO</strong> como el mail que se envia cuando un usuario completa un formulario.


### Navegando por Templates

- es no de los metodos mas usuados para optimizar las navegacion de una web
-Dado que la estructura de una pagina web se repite entre todos los archivos ue nevegamos (index, categorias, ver posteo, registro), dejamos en el index.php todos lo elementos en comun (header, aside, footer)

### Incluir los Templates

- Para cargar uno de estos archovso que convertimos en template, debemos usar la funcion <strong>include() o requiere() </strong> que reciben entre parentesis la ruta para llegar al archivo que queremos incluir.

- A nivel funcionamiento no hay diferencias entre ambas, salvo que el archivo solicitado no exita.
 
| Carpeta                    | Link |     
|----------------------------|:-----------:|
[Navegación de una web usando templates](https://github.com/BrianMarquez3/PHP-Course/tree/main/Navegaci%C3%B3n%20de%20una%20web%20usando%20templates)          |      ✔️     |

---

## Inclusion de plantillas con include y requires

###  Como seleccionar el Template

- Por Medio de <strong> include() o require() </strong> cargaremos el template que nos interesa

- para lograrlo, vamos a tener que engiar por GER una variable que no indique que el usuario hizo click en un vinculo de la botonera

### Modificar los Links

- Ahora todos lo vinculos (de la botonera , registro, login y ver perfil ), apuntaran al INDEX.PHP por ese motivo tiene la esctructura en comun vacia.

### Modificar los link

- Ahora todos lo vinculo (de la botonera, registro, login y ver perfil), apuntarán al INDEX.PHP por que ese archivo tiene la estructra en común vacia.
- Y cada vínculo manda por GET una variable(la misma para todos).
- Y Por cada vinculo, solo cambia el valor que manda la variable(lo que está después del igual).

### Cargar el Template

- Para saber cuál de todos lo templates hay que incluir solo debemos evaluar el valor que tiene la variable ercibida por GET.
- Y como puede teer muchos valores posibles )tanto como secciones existan), debemos hacer un IF o SWITCH que verifique que hemos recebido

| Carpeta                    | Link |     
|----------------------------|:-----------:|
[Inclusion de plantillas con include y require](https://github.com/BrianMarquez3/PHP-Course/tree/main/Inclusion%20de%20plantillas%20con%20include%20y%20require)          |      ✔️     |

---
## Debbug

[Xdebug](https://xdebug.org/wizard) 

- Main

![php](./images/xbug.png)
 

- Copy vercion PHp
![php](./images/dll.png)

- Config
![php](./images/dll.png)

- Install
![php](./images/phpdebug.png)

## Dueño del Material
Dueño y creador del Material [Bitdigitalacademy](https://www.bitdigitalacademy.com/)

---
## Spotify PHP
🎵 Music Python [List on Spotify 🎤](https://open.spotify.com/playlist/1npVE06BugI94aziBCozO1?si=okfjVV9CRF2Xjji-v66WFw)



