\# Dukety - Tienda online de galletas



\##  Descripción del proyecto



Dukety es una tienda online de galletas artesanales desarrollada como proyecto final del ciclo formativo de Desarrollo de Aplicaciones Web (DAW).



El objetivo principal es la creación de una plataforma de comercio electrónico funcional que permita la visualización de productos, gestión de carrito de compra y administración de pedidos mediante un CMS.



\---



\## Tecnologías utilizadas



\- WordPress (CMS)

\- WooCommerce (plugin de e-commerce)

\- PHP

\- MySQL

\- HTML5 / CSS3

\- JavaScript

\- XAMPP (entorno local)



\---



\## Funcionalidades principales



\- Catálogo de productos dinámico

\- Sistema de carrito de compra

\- Gestión de pedidos desde el panel de administración

\- Registro y autenticación de usuarios

\- Aplicación de impuestos (IVA 10%)

\- Configuración de envíos y recogida local



\---



\## Arquitectura del sistema



El proyecto sigue una arquitectura basada en CMS:



\- \*\*Frontend\*\*: WordPress + tema Blocksy

\- \*\*Backend\*\*: PHP (WordPress core + WooCommerce)

\- \*\*Base de datos\*\*: MySQL



\---



\## Base de datos



WordPress utiliza una base de datos MySQL con estructura genérica:



\- `wp\_posts`: productos y pedidos

\- `wp\_postmeta`: datos adicionales

\- `wp\_users`: información de usuarios



WooCommerce gestiona los productos y pedidos como tipos de contenido personalizados.



\---



\## Seguridad



Se han aplicado medidas de seguridad básicas:



\- Validación de datos de entrada

\- Protección frente a inyección SQL (WordPress ORM)

\- Prevención de ataques XSS

\- Sistema de roles de usuario

\- Plugins de seguridad (WordPress ecosystem)



\---



\## Entorno de desarrollo



El desarrollo se ha realizado en entorno local utilizando:



\- XAMPP (Apache + MySQL)

\- Instalación local de WordPress

\- Configuración de WooCommerce

\- Navegador web para pruebas



\---



\## Control de versiones



Se ha utilizado Git como sistema de control de versiones y el repositorio se encuentra alojado en GitHub.



Esto ha permitido:

\- Registro de cambios durante el desarrollo

\- Eliminación de archivos innecesarios (backups)

\- Trazabilidad del proyecto

\- Subida del proyecto a repositorio remoto



\---



\## Capturas del proyecto



\*(Añadir aquí imágenes de:)\*



\- Página de inicio

\- Catálogo de productos

\- Página de producto

\- Carrito de compra

\- Checkout

\- Panel de administración



\---



\## Mejoras futuras



\- Integración de pasarela de pago real (Stripe / PayPal)

\- Despliegue en servidor cloud

\- Optimización SEO

\- Implementación de desarrollo colaborativo con ramas en Git



\---



\## Autor



Proyecto desarrollado por: \*\*Javier Ballesteros\*\*



Ciclo: Desarrollo de Aplicaciones Web (DAW)

