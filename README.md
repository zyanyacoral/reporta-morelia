Para instalar larvel lo haces por medio de composer
ejecutando desde una terminal cmd el siguiente comando:
composer global require "laravel/installer=~1.1"
para probar el proyecto.
1.-Descarga el código y la base de datos desde github desde esta liga:
github-windows://openRepo/https://github.com/zyanyacoral/reporta-morelia
2.-Instala la dependeicas de Laravel: con el siguiente comando 
composer install
3.-Crea la base de datos y corrobora las confiraciones en app/config/database.php
4.- Corre la migración: php artisan migrate
5.- Alimenta la bd con las semillas precargadas con el siguiente comando: php artisan db:seed
