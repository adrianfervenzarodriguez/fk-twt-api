# Levantar el proyecto en local

1. `git clone https://github.com/adrianfervenzarodriguez/fk-twt-api.git`
2. `cd fk-twt-api`
3.	Configurar variables fichero **.env**
			DB_HOST=127.0.0.1

			DB_PORT=3306

			DB_DATABASE=xxx

			DB_USERNAME=xxx

			DB_PASSWORD=xxx

            APP_URL=http://<your-local-host>/api
4. `php artisan optimize`
5.	Instalar dependencias
		`composer install`
6. Ejecutar migraciones
		`php artisan migrate`

		`php artisan migrate --path=database\migrations\tweets`
7. Ejecutar seeders
		`php artisan db:seed` 
8. Obtener token de acceso
		`php artisan generate:token`
9. Ejecutar tests
		`php artisan test`
