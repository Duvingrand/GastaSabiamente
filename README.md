# GastaSabiamente

# Aplicación de Gestión de Gastos Personales

Esta es una aplicación web desarrollada en Laravel que permite a los usuarios registrar, gestionar y visualizar sus gastos personales de forma sencilla y eficiente. Los usuarios pueden agregar gastos, editarlos y eliminarlos, así como visualizar un resumen de sus gastos por categoría y un total acumulado.

## Características

- Registro y autenticación de usuarios.
- Registro de gastos con detalles como categoría, descripción, monto y fecha.
- Visualización de todos los gastos registrados por el usuario.
- Cálculo y visualización del total de gastos.

## Requisitos

- PHP >= 7.3
- Composer
- MySQL o cualquier base de datos compatible con Laravel

## Instalación
 - git clone https://github.com/Duvingrand/GastaSabiamente.git
 - cd GastaSabiamente
 - composer install

## Configurar el archivo de entorno
 - cp .env.example .env

## Generar la clave de la aplicación
 - php artisan key:generate

## Migrar la base de datos
 - php artisan migrate:fresh --seed

## Iniciar el servidor de desarrollo
 - composer run dev
