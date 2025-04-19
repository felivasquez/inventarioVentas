Documentación

Introducción
En este documento se explica cómo diseñar e implementar una base de datos para gestionar
un sistema de inventario y ventas. Además, se describen los beneficios de usar PHP y XAMPP
para desarrollar aplicaciones que permitan administrar productos, ventas y reportes de manera
eficiente.
Temas a Tratar
1. ¿Por qué usar bases de datos para inventario y ventas?
2. Ventajas de PHP como lenguaje de programación.
3. Uso de XAMPP: Apache y phpMyAdmin.
4. Base de datos.
5. CRUD
—--------------------------------------------------------------------------
1. ¿Por qué usar bases de datos para inventario y ventas?
Una base de datos para inventario y ventas ayuda a centralizar y automatizar procesos que, de
otra forma, serían manuales y propensos a errores. Sus beneficios principales son:
Control eficiente: Permite rastrear el stock de productos en tiempo real, evitando faltantes o
exceso de inventario.
Seguimiento de ventas: Registra cada transacción, facilitando el análisis de ingresos y ventas
por periodo.
Optimización del tiempo: Automatiza tareas como generación de facturas y actualizaciones de
inventario tras una venta.
Seguridad de la información: Protege los datos mediante respaldos automáticos y acceso
controlado.
Reportes personalizados: Ofrece datos clave como productos más vendidos, ingresos por
periodo, y rotación de inventarios.
—--------------------------------------------------------------------------
2. Ventajas de PHP como lenguaje de programación

PHP es una herramienta versátil y sencilla para desarrollar aplicaciones web relacionadas con
bases de datos. Algunas de sus ventajas son:
Integración con bases de datos SQL: PHP se conecta fácilmente con MySQL, permitiendo
gestionar datos de inventario y ventas.
Gestión de datos dinámica: Facilita el desarrollo de aplicaciones para agregar, editar, eliminar y
consultar productos o transacciones.
Adaptabilidad: Puedes personalizar la lógica del sistema para adaptarse a las necesidades
específicas de cualquier negocio.
Facilidad de integración: PHP se combina con HTML, CSS y JavaScript para crear interfaces
amigables para el usuario.
Gran soporte comunitario: Existen numerosos tutoriales, recursos y herramientas que hacen
más fácil la implementación.
—--------------------------------------------------------------------------
3. Uso de XAMPP: Apache y phpMyAdmin
XAMPP es una solución todo en uno que permite crear aplicaciones web locales y gestionar
bases de datos.
Apache: Ejecuta el servidor web necesario para probar aplicaciones en PHP de manera local.
phpMyAdmin: Proporciona una interfaz gráfica para gestionar bases de datos MySQL.
Ventajas de XAMPP:
Instalación rápida: Ideal para principiantes y desarrolladores que necesitan una solución
inmediata.
Ambiente local seguro: Permite realizar pruebas sin necesidad de un servidor remoto.
Compatibilidad: Funciona en múltiples plataformas, como Windows, macOS y Linux.
Simplicidad: Incluye todo lo necesario para desarrollar aplicaciones, desde el servidor hasta las
herramientas de administración de datos.
—--------------------------------------------------------------------------
4. Base de datos
Estructura de la base de datos

Nombre de la base de datos: inventario_ventas
1. Tabla: Productos
Función: Administra los productos disponibles en el inventario.
● ID_Producto | INT | Clave primaria
● Nombre | VARCHAR(100) | Nombre del producto.
● Categoría | VARCHAR(50) | Tipo o clasificación del producto
● PrecioCompra | DECIMAL(10,2) | Costo unitario del producto.
● PrecioVenta | DECIMAL(10,2) | Precio de venta unitario.
● StockActual | INT | Cantidad disponible en inventario
2. Tabla: Proveedores
Función: Almacena la información de los proveedores que suministran los productos.
● ID_Proveedor| INT | Clave primaria
● Nombre | VARCHAR(100) | Nombre del proveedor o empresa. |
● Contacto | VARCHAR(100) | Nombre de la persona de contacto. |
● Teléfono| VARCHAR(15) | Teléfono del proveedor.
● Dirección | VARCHAR(150) | Ubicación del proveedor.
3. Tabla: Compras
Función:Registra las compras de productos realizadas a los proveedores
● ID_Compra| INT | Clave primaria|
● ID_Proveedor | INT | Clave foránea, identifica al proveedor.
● Fecha | DATETIME | Fecha y hora de la compra.
● Total | DECIMAL(10,2) | Monto total de la compra.
4. Tabla: DetalleCompras
Función:Desglosa los productos adquiridos en cada compra.
● ID_Detalle | INT | Clave primaria
● ID_Compra | INT | Clave foránea, referencia a la compra.
● ID_Producto| INT | Clave foránea, identifica al producto.
● Cantidad | INT | Cantidad comprada del producto.
● CostoUnitario| DECIMAL(10,2) | Costo unitario del producto en esta compra.
● Subtotal | DECIMAL(10,2) | Cantidad * CostoUnitario.
5. Tabla: Clientes
Función: Almacena los datos de los clientes que realizan compras.
● ID_Cliente| INT | Clave primaria, identificador único del cliente

● Nombre | VARCHAR(100) | Nombre del cliente. Apellido |
VARCHAR(100) | Apellido del cliente. Teléfono | VARCHAR(15) |
Teléfono del cliente.
● Email | VARCHAR(100) | Correo electrónico del cliente.
● Dirección | VARCHAR(150) | Dirección del cliente(si aplica).
6. Tabla: Ventas
Función: Registra las ventas realizadas a los clientes.
● ID_Venta | INT | Clave primaria, identificador único de la venta.
● Fecha | DATETIME | Fecha y hora de la venta.
● Total | DECIMAL(10,2) | Monto total de la venta.
● ID_Cliente | INT | Clave foránea, identifica al cliente.
7. Tabla: DetalleVentas
Función:Desglosa los productos vendidos en cada transacción
● ID_Detalle | INT | Clave primaria
● ID_Venta | INT | Clave foránea, referencia a la venta.
● ID_Producto| INT | Clave foránea, identifica al producto.
● Cantidad | INT | Cantidad vendida del producto.
● PrecioUnitario | DECIMAL(10,2) | Precio unitario del producto en esta venta.
● Subtotal | DECIMAL(10,2) | Cantidad * PrecioUnitario.

—--------------------------------------------------------------------------
5. ¿Qué es CRUD?
CRUD es un acrónimo que representa las cuatro operaciones básicas que se pueden realizar
sobre una base de datos:
Create (Crear): Agregar nuevos registros a las tablas.
Read (Leer): Consultar datos existentes en la base de datos.
Update (Actualizar): Modificar datos existentes en la base de datos.
Delete (Eliminar): Borrar registros de la base de datos.
Estas operaciones son esenciales para gestionar y mantener cualquier sistema que maneje
datos, como un sistema de inventario y ventas. En el contexto del sistema inventario_ventas,
CRUD se implementa para todas las tablas de la base de datos.
Conclusión:

Al implementar CRUD, se logra una gestión integral del sistema de inventario y ventas. Esto
asegura que la información esté actualizada, que se puedan realizar consultas rápidas, y que
los errores puedan corregirse de forma eficiente. La funcionalidad CRUD es la base para
construir aplicaciones dinámicas y escalables.







/sales-manager
├── /config
│   └── database.php
├── /public
│   ├── index.php
│   ├── /assets
│   │   ├── /css
│   │   │   └── styles.css
│   │   ├── /js
│   │   │   └── scripts.js
│   │   └── /images
│   │       └── logo.png
├── /src
│   ├── /controllers
│   │   ├── ProductController.php
│   │   └── CustomerController.php
│   ├── /models
│   │   ├── Product.php
│   │   └── Customer.php
│   ├── /views
│   │   ├── /products
│   │   │   ├── index.php
│   │   │   ├── create.php
│   │   │   └── edit.php
│   │   └── /customers
│   │       ├── index.php
│   │       ├── create.php
│   │       └── edit.php
├── /routes
│   └── web.php
├── /vendor
├── .env
├── composer.json
└── README.md

