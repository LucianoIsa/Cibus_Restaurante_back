<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Nombre

CIBUS-RESTAURANTE API, este es el backend de nuestro PIN del curso Fullstack de MundosE, desarrollado por Agustina Paula Cabrera y Luciano Javier Isa.

## Descripcion
El backend esta desarrollado en PHP utilizando el Framework Laravel. Laravel nos permite realizar un proyecto escalable gracias a que implementa un patron de disenio MVC.
Desarrollamos una API Rest para recibir las reservas de los clientes desde un formulario.

## Endpoints
Ruta para insertar un cliente con su fecha de reserva
POST
api/insertarCliente
Se deben pasar los siguientes parametros: nombre_completo, email, telefono, fecha_reserva

Ruta para actualizar un cliente
PUT
api/actualizaCliente/{id}
{id} del cliente

Ruta para borrar un cliente y su reserva
DELETE
api/borrarCliente/{id}
{id} del cliente

Ruta para obtener un cliente y su reserva
GET
api/obtenerCliente/{id}
{id} del clientes

Ruta para obtener todos los clientes
GET
api/obtenerClientes

## AUTORES
PAULA AGUSTINA CABRERA Y LUCIANO JAVIER ISA

El  proyecto se encuentra con cotinuas mejoras de desarrollo. 
