# Configurador de ElectroSoft PHP

Proyecto web con PHP el cual se conecta a mySQL

## Notas del desarrollador

* Para ejecutar este proyecto se debe de tener instalado `XAMPP` en un entorno local de desarrollo, también se debe habilitar el servidor de apache y mySQL, a la hora de clonar el proyecto se debe guardar en la siguiente ruta `C:\xampp\htdocs\*nombre del proyecto*`. Por defecto, para visualiar el proyecto, en el navegador debes poner la siguiente url `http://localhost/*nombre del proyecto*`.

## Arquitectura

Para el desarrollo de este proyecto es importante tener en cuenta las siguientes politicas y metodologias.

* **HTML:** Lenguaje utilizado para la maquetación.
* **CSS:** Lenguaje utilizado para brindar estetica a la web
* **JavaScript:** Lenguaje de programación utilizado.
* **PHP:** Lenguaje de programación utilizado como puente entre la base de datos y la web.
* **MySQL:** Sistema de gestión de bases de datos relacional.

### Estructura del proyecto

La distribucion de las carpetas es en su mayoria definida por el desarrollador pero es importante tener en cuenta la estructura dentro de la carpeta electro-recicla para la creacion de los archivos.
```json
electro-recicla/
              |
              |-assets/
              |   |-sass/ // Todos lo archivos de configuracion del tema con el cual se debe implementar el skin de la aplicacion
              |-DB/ //Carpeta que contiene toda la configuración de conexion a la base de datos
              |-producto/ //Carpeta que contiene toda la interaccion con un producto
              |-usuario/ //Carpeta que contiene toda la interaccion con un usuario
              |   ...
              ...
```

### Convenciones de desarrollo generales

1. El IDE de trabajo elegido es VSCode [installar](https://code.visualstudio.com/)
2. Todo el codigo debera estar escrito en ingles.

### Extensiones VSCode

* Ayuda en el analisis de codigo estatico para BEM en SASS [instalar](https://marketplace.visualstudio.com/items?itemName=glen-84.sass-lint).

### CI/CD

## Distribucion

## Pruebas unitarias

## Referencias
