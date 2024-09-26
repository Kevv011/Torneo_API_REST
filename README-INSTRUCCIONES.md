# Torneo_API_REST
Ejecucion ejercicio 2 de investigacion aplicada #2, LIC104 donde se detalla y se estructura la creacion de una API REST con Laravel y contenida en Docker.

-----------------------------------Instrucciones sobre cómo configurar y construir el contenedor Docker de la API---------------------------------------

1) Se debe configurar el dispositivo local para admitir virtualizacion y subsistema de Windows para Linux. Para ello se debe seguir lo siguiente: 
   "PANEL DE CONTROL > PROGRAMAS > ACTIVAR O DESACTIVAR LAS CARACTERISTICAS DE WINDOWS", y accionar las opciones "PLATAFORMA DE MAQUINA VIRTUAL" y   
   "SUBSISTEMA DE WINDOWS PARA LINUX". Hecho esto, se debe reiniciar el equipo.
2) Se debe descargar la aplicacion para desktop "DOCKER DESKTOP", este sera el que ejecutara el archivo y generara la distribucion linux de "docker- 
   desktop"
3) Para ejecutar algunos comandos de DOCKER se debe instalar la distribucion de linux "UBUNTU" desde la microsoft store o con el comando desde la 
   powershell como administrador "wsl install -d Ubuntu". Se debe tener instalado WSL (Windows Subsystem for Linux) en el dispositivo local. Para ello 
   se puede ejecutar "wsl --install".
4) Una vez obtenido, el proyecto puede tener su contenedor, sin embargo, el contenedor es parte del framework utilizado, la cual es PHP LARAVEL. 
   Para poder obtener el framework, se debe descargar primero "COMPOSER" (https://getcomposer.org/download/), el instalador de dependencias de PHP. 
   Siguiente se busca la documentacion oficial de LARAVEL para instalarlo (https://laravel.com/docs/11.x) con el comando "composer global require 
   laravel/installer".
5) Una vez instalado LARAVEL, se pueden ejecutar proyectos bajo este framework. Respecto al proceso de dockerizacion, se hizo uso de "LARAVEL SAIL", 
   un contenedor nativo de LARAVEL para usarse con DOCKER.


-------------------------------------------Comandos para ejecutar y desplegar la API utilizando Docker-----------------------------------------------

6) Para instalarse LARAVEL SAIL se debe ingresar a su documentacion oficial (https://laravel.com/docs/11.x/sail) y se debe instalar dentro de la 
   ruta raiz del proyecto LARAVEL a trabajar estrictamente, si no, no funcionara bien dicha descarga de dependencias.
7) Una vez descargado dentro del proyecto raiz LARAVEL, se ejecuta los siguiente comandos:
   • "composer require laravel/sail --dev"    --> Dependencias de LARAVEL SAIL
   • "php artisan sail:install"               --> Instalacion de LARAVEL SAIL
   • "./vendor/bin/sail -d up"                --> Ejecucion para correr el contenedor en SAIL
     (El ultimo comando se ejecuta preferiblementw en la terminal de WSL, puede ser en la terminal de la distribucion de UBUNTU la cual se instala 
     en el paso #3. Si se trabaja desde VS CODE, este tiene acceso a todas estas terminales. La terminal puede abrirse con CTRL+J)
   • Para detener los contenedores se debe ejecutar "./vendor/bin/sail down"

-------------------------------------Pasos para probar la funcionalidad de la API dentro del contenedor Docker-------------------------------------
8) Para probar la funcionalidad de la API en el DOCKER debe estar corriendo con el comando en WSL "./vendor/bin/sail -d up" y se puede acceder a la 
   direccion "http://localhost", debera ejecutarse el entorno de LARAVEL. Entre direcciones especificas pueden usarse:
  • "http://localhost/api/jugadors"    --> Es la tabla de JUGADORES 
  • "http://localhost/api/equipos"     --> Es la tabla EQUIPOS
  • "http://localhost/api/partidos"    --> Es la tabla PARTIDOS
  • "http://localhost/api/resultados"  --> Es la tabla RESULTADOS
Todas las direcciones apuntaran directamente al contenido de las tablas creadas en la base de datos "torneo_futbol" de MySQL.

9) Para probar el CRUD de cada una de las 4 tablas de contenido, se recomienda instalar la extension de VS CODE llamada "THUNDECLIENT", esta extension esta diseñada para probar las solicitudes POST (Create), GET (Read),  PUT (Update) y DELETE (Delete). Para acceder a la prueba de la API, desde la terminal de POWERSHELL en VS CODE debe ejecutarse el comando "php artisan serve", este levanta el servidor local de LARAVEL y puede ingresarse a cada entidad y probar sus 4 operaciones CRUD por medio de los links de arriba, especificando el puerto 8000 de la siguiete manera:
  • "http://localhost:8000/api/jugadors"    --> Es la tabla de JUGADORES 
  • "http://localhost:8000/api/equipos"     --> Es la tabla EQUIPOS
  • "http://localhost:8000/api/partidos"    --> Es la tabla PARTIDOS
  • "http://localhost:8000/api/resultados"  --> Es la tabla RESULTADOS

------------------------------------------------------------------ADICIONAL--------------------------------------------------------------------------
• Tener configurado DOCKER DESKTOP para que admita UBUNTU. Hacer esto asi: "INGRESO A DOCKER DESKTOP > AJUSTES > RESOURCES > WSL INTEGRATION". Aqui activar a UBUNTU para que acepte comando DOCKER en esta terminal.
