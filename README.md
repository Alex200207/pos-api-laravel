# 🏪 Sistema de Inventario API

API RESTful desarrollada con PHP/Laravel para la gestión de inventario, ventas y compras.

## 📋 Endpoints Disponibles

### Productos 🛍️
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/productos` | Obtener todos los productos | ✅ Completado |
| GET | `/api/productos/{id}` | Obtener un producto específico | ✅ Completado |
| POST | `/api/productos` | Crear nuevo producto | ✅ Completado |
| PUT | `/api/productos/{id}` | Actualizar producto | ✅ Completado |
| DELETE | `/api/productos/{id}` | Eliminar producto | ✅ Completado |

### Proveedores 🏢
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/proveedores` | Obtener todos los proveedores | ✅ Completado |
| GET | `/api/proveedores/{id}` | Obtener un proveedor específico | ✅ Completado |
| POST | `/api/proveedores` | Crear nuevo proveedor | ✅ Completado |
| PUT | `/api/proveedores/{id}` | Actualizar proveedor | ✅ Completado |
| DELETE | `/api/proveedores/{id}` | Eliminar proveedor | ✅ Completado |

### Clientes 👥
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/clientes` | Obtener todos los clientes | ✅ Completado |
| GET | `/api/clientes/{id}` | Obtener un cliente específico | ✅ Completado |
| POST | `/api/clientes` | Crear nuevo cliente | ✅ Completado |
| PUT | `/api/clientes/{id}` | Actualizar cliente | ✅ Completado |
| DELETE | `/api/clientes/{id}` | Eliminar cliente | ✅ Completado |

### Todos
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/todos` | Obtener todos | ✅ Completado |
| POST | `/api/todos` | Crear un todo| ✅ Completado |
| DELETE | `/api/todos/{id}` | Eliminar todo | ✅ Completado |
| UPDATE | `/api/todos/{id}` | Actualizar un Todo| ✅ Completado |

### Ventas 💰
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/ventas` | Obtener todas las ventas | ✅ Completado |
| GET | `/api/ventas/{id}` | Obtener una venta específica | ✅ Completado |
| POST | `/api/ventas` | Crear nueva venta | ✅ Completado |
| PUT | `/api/ventas/{id}` | Actualizar venta | ✅ Completado |
| DELETE | `/api/ventas/{id}` | Eliminar venta | ✅ Completado |

### Compras 🛒
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/compras` | Obtener todas las compras | ✅ Completado |
| GET | `/api/compras/{id}` | Obtener una compra específica | ✅ Completado |
| POST | `/api/compras` | Crear nueva compra | ✅ Completado |
| PUT | `/api/compras/{id}` | Actualizar compra | ✅ Completado |
| DELETE | `/api/compras/{id}` | Eliminar compra | ✅ Completado |

## 🔄 Relaciones

### ProductoVenta (Pivot)
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/producto-venta` | Obtener todas las relaciones | ✅ Completado |
| POST | `/api/producto-venta` | Crear nueva relación | ✅ Completado |
| DELETE | `/api/producto-venta/{id}` | Eliminar relación | ✅ Completado |

### CompraProducto (Pivot)
| Método | Ruta | Descripción | Estado |
|--------|------|-------------|---------|
| GET | `/api/compra-producto` | Obtener todas las relaciones | ✅ Completado |
| POST | `/api/compra-producto` | Crear nueva relación | ✅ Completado |
| DELETE | `/api/compra-producto/{id}` | Eliminar relación | ✅ Completado |



## 🛠️ Tecnologías Utilizadas

- PHP 8.x
- Laravel Framework
- MySQL/MariaDB
- RESTful API

## 🚀 Instalación

Sigue estos pasos para instalar y ejecutar el proyecto localmente:

1. **Clona el repositorio:**
    ```bash
    git clone https://github.com/profcswni/pos-api-laravel
    ```
    **Ingresa a la carpeta:**
    ```bash
    cd pos-api-laravel
    ```

2. **Instala las dependencias de PHP:**
    ```bash
    composer install
    ```
3. **Copia el archivo de entorno y configura tus variables:**
    ```bash
    cp .env.example .env
    # Edita el archivo .env con tus credenciales de base de datos
    ```
4. **Genera la clave de la aplicación:**
    ```bash
    php artisan key:generate
    ```
5. **Ejecuta las migraciones para crear las tablas:**
    ```bash
    php artisan migrate
    ```
6. **(Opcional) Pobla la base de datos con datos de ejemplo:**
    ```bash
    php artisan db:seed
    ```
7. **Añade el proyecto a Laravel Herd:**
    ```bash
    Abre Herd y añade el sitio para activarlo. Tambien puedes ejecutar php artisan serve
    ```

La API estará disponible en `http://localhost:8000` por defecto.

## 📝 Notas

- ✅ Endpoints Completados

## 🔍 Pruebas

Los endpoints pueden ser probados utilizando:
- Postman
- Insomnia
- Cualquier cliente REST

## 📚 Documentación Adicional

Para más detalles sobre la implementación y uso de cada endpoint, consulte la documentación específica de cada recurso.

