# Levantar el proyecto en local

1. `git clone https://github.com/adrianfervenzarodriguez/fk-twt-api.git`
2. `cd fk-twt-api`
3.	Copiar fichero .env.example en nuevo fichero .env y configurar variables **.env**
   
        DB_HOST=127.0.0.1
  	
        DB_PORT=3306
  	
        DB_DATABASE=xxx
  	
        DB_USERNAME=xxx
  	
        DB_PASSWORD=xxx
  	
        APP_URL=http://<your-local-host>/api
  	
4.	Instalar dependencias
   
	`composer install`
 
5. Ejecutar optimize
  
    `php artisan optimize`
   

6. Ejecutar migraciones

	`php artisan migrate`

	`php artisan migrate --path=database\migrations\tweets`
7. Ejecutar seeders
   
	`php artisan db:seed` 
8. Obtener token de acceso
    
	`php artisan generate:token`
9. Ejecutar tests
    
	`php artisan test`
