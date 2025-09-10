API de Gestión de Bibliotecas – Punto 3
Diseñe e implemente un sistema de gestión de bibliotecas sencillo con clases para libros, bibliotecas y miembros.

php: 8.2.1
mysql: 8.0.30
laravel 12

Este proyecto implementa una **API REST con Laravel 12** para gestionar:

- **Bibliotecas (Libraries)**
- **Libros (Books)**
- **Miembros (Members)**

Cada recurso cuenta con un **CRUD completo** (crear, listar, ver, actualizar y eliminar).

---
1. clonar el repositorio https://github.com/jhondestroy16/biblioteca_prueba
2. configurar .env
3. ejecutar el comando composer install
4. ejecutar el comando php artisan migrate
5. ejecutar el comando php artisan serve

configuracion base .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=biblioteca
DB_USERNAME=root
DB_PASSWORD=

Bibliotecas

GET /api/libraries → Listar bibliotecas
POST /api/libraries → Crear biblioteca
GET /api/libraries/{id} → Ver una biblioteca
PUT /api/libraries/{id} → Actualizar biblioteca
DELETE /api/libraries/{id} → Eliminar biblioteca

Libros

GET /api/books → Listar libros
POST /api/books → Crear libro
GET /api/books/{id} → Ver un libro
PUT /api/books/{id} → Actualizar libro
DELETE /api/books/{id} → Eliminar libro

Miembros

GET /api/members → Listar miembros
POST /api/members → Crear miembro
GET /api/members/{id} → Ver un miembro
PUT /api/members/{id} → Actualizar miembro
DELETE /api/members/{id} → Eliminar miembro

Bibliotecas
{
  "name": "Biblioteca Central",
  "location": "Ibagué"
}

Libros
{
  "library_id": 1,
  "title": "Cien Años de Soledad",
  "author": "Gabriel García Márquez",
  "isbn": "9780060883287"
}

Miembros
{
  "library_id": 1,
  "name": "Jhon Valencia",
  "email": "jhonstevenvalenciaguzman@gmail.com"
}
