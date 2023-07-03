<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://d1.awsstatic.com/acs/characters/Logos/Docker-Logo_Horizontel_279x131.b8a5c41e56b77706656d61080f6a0217a3ba356d.png" width="400" alt="Laravel Logo"></a></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://duboestetica.cl/assets/images/logo_.png" width="400" alt="Laravel Logo"></a></p>






<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Lravel docker -> el proyecto cambia el 22/03/2023

# Docker Larvel 8

Contenedor Docker laravel 8.77 - php 8.1
--
con los cambios imprevistos, la base de datos cambio y la forma de como se ejecuta el backend, por ende es buena practica reestructurar la base de datos,
con los servicios finales.
- verificar controladores
- modelos

## Instalacion

Clona el repo

```bash
git clone git@github.com:Taoista/docker-laravel9.git
```
Entra al proyecto
```bash
cd docker-laravel9
```

## Uso
Despues descargar, ejecutar

```docker
docker-compose up -d
```
verifica el nombre del contenedor (lo puedes cambiar, deberias)

```bash
CONTAINER ID   IMAGE                 COMMAND                  CREATED          STATUS          PORTS                  NAMES
a96b6b76b5f0   nginx:1.21.6-alpine   "/docker-entrypoint.…"   21 minutes ago   Up 21 minutes   0.0.0.0:8001->80/tcp   webserver-eternite
62ad5e14ff02   eternite-backend      "docker-php-entrypoi…"   22 minutes ago   Up 22 minutes   9000/tcp               backend-eternite
```
en este caso el container es 'backend', entra en la consola

```bash
docker-compose exec backend-eternite sh
```
ejectua

```bash
composer install
```
```bash
npm install
```
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```
si estas trabajando con xampp y/o largon, crea un usuario con los privilegios completos y en la configuracion de mysql agrega
```bash
bind-address=0.0.0.0
```





