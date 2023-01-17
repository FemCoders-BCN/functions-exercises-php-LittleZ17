# 🎡 Ejercicios de funciones en PHP

## ES

### Introducción
Este es un ejercicio básico de PHP para aprender a hacer funciones, empleando condicionales, bucles y operadores. Dentro de la carpeta src se encuentran 3 archivos con una serie de instrucciones que te permitirá pasar los tests que se encuentran en la carpeta tests, dentro de cada archivo de test están las aserciones que queremos que pasen cuando se ejecuten las funciones que tú vas a escribir. Será necesario que instales phpunit con composer para poder ejecutar el script que te permitirá correr el test de cada archivo. Pasa el test y mira la consola que te dirá cuál es el error, y así, puedas escribir correctamente tu código. El objetivo será que puedas pasar los tests de los 3 archivos.

### Instrucciones
1. git clone <repositorio> (el proyecto deberá estar dentro de la carpeta htdocs de xampp o mamp).
2. Para instalar phpUnit: composer require --dev phpunit/phpunit
3. Para instalar composer: composer i
4. Para correr el test: ./vendor/bin/phpunit tests/NombreDelArchivoDelTest.php
5. Para este ejercicio no será necesario usar un servidor, por lo que no se requiere tener xampp o mamp encendido para hacer correr los tests, sin embargo, hay un archivo index.php con información en la que te puedes apoyar, por lo que tener el servidor encendido es requerido.


### Reglas
1. Empieza con el archivo Functions.php, una vez lo tengas terminado pasa al archivo Store.php y finalmente completa el ejercicio del archivo Item.php
2. Solo se debe escribir la función dentro de los archivos de la carpeta src.
3. Puedes mirar lo que hay en los archivos de la carpeta tests pero no podrás modificarlos.
4. Se deberán usar parámetros.
5. Deberás ir mirando lo que devuelve la consola cada vez que corras los tests.
6. El objetivo final es que pasen todos los tests de los 3 archivos.
---

## EN

### Introduction
This is a basic PHP exercise to learn how to make functions, using conditionals, loops, and operators. Inside the src folder there are 3 files with a series of instructions that will allow you to pass the tests found in the tests folder, inside each test file are the assertions that we want to pass when the functions that you write are executed. You will need to install phpunit with composer in order to run the script that will allow you to run the test for each file. Pass the test and see the console that will tell you what the error is, so you can write your code correctly. The objective will be that you can pass the tests of the 3 files.

### Instructions
1. git clone <repository> (the folder has to be inside the htdocs folder of xampp or mamp).  
2. To install phpUnit: composer require --dev phpunit/phpunit
3. To install composer: composer i
4. To run a test: ./vendor/bin/phpunit tests/TestFileName.php
5. For this exercise it will not be necessary to use a server, so it's not required to have xampp or mamp turned on for running the tests, however, there is an index.php file with information you can rely on, so having the server turned on is required.

### Rules
1. Start with the Functions.php file, once you have finished it move on to the Store.php file and finally complete the Item.php file exercise.
2. The function should only be written inside the files in the src folder.
3. You can see what's in the files in the tests folder but you shouldn't modify them.
4. Parameters must be used.
5. You should be looking at what the console returns each time you run the tests.
6. The final goal is that all the tests of the 3 files pass.
