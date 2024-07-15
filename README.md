# Levantar el proyecto en local

1. `git clone https://github.com/adrianfervenzarodriguez/fk-twt-api.git`
2. `cd fk-twt-api`
3.	Configurar variables de acceso a base de datos en fichero **.env**
			DB_HOST=127.0.0.1
			DB_PORT=3306
			DB_DATABASE=xxx
			DB_USERNAME=xxx
			DB_PASSWORD=xxx
			
4.	Instalar dependencias
		`composer install`
5. Ejecutar migraciones
		`php artisan migrate`
		`php artisan migrate --path=database\migrations\tweets`
6. Ejecutar seeders
		`php artisan db:seed` 
7. Obtener token de acceso
		`php artisan generate:token`
8. Ejecutar tests
		`php artisan test`
