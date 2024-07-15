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

----------------------------------------------------------------
# Documentación de la API
## Autenticación
### Bearer Token
|Header|Value|
|--|--|
|Authorization|Bearer your-bearer-token|
## Headers
|Header|Value|
|--|--|
|Accept|application/json|
## Endpoints
- **GET** /tweets - Devuelve un listado de Tweets
  
    **Query params**
  
    |Param|Value|Required
    |--|--|--|
    |limit|Integer|No|
  
  **Response /tweets?limit=1**
  ```json
  {
    "count": 1,
    "data": [
        {
            "id": "9c8607b6-c700-40a7-9c24-01afe3ecc311",
            "user": "ebert.kolby",
            "content": "El parque temático es una explosión de diversión y emoción para toda la familia, con atracciones que desafían la gravedad y espectáculos que te dejan sin aliento.",
            "hashtags": "[\"viajes\",\"fotografía\",\"aventura\",\"arte\",\"amistad\"]",
            "likes_count": 91,
            "published_at": "2024-04-07 02:14:15",
            "created_at": "2024-07-14T22:04:49.000000Z",
            "updated_at": "2024-07-14T22:04:50.000000Z"
        }
    ]
    }
    ```
- **GET** /tweets/hashtag/{hashtag} - Devuelve un listado de Tweets filtrado por Hashtag

    **Route params**
  
    |Param|Value|Required
    |--|--|--|
    |hashtag|String|Si|
  
    **Query params**
  
    |Param|Value|Required
    |--|--|--|
    |limit|Integer|No|
  
  **Response /tweets/hashtag/farina?limit=1**
  ```json
    {
        "count": 1,
        "data": [
            {
                "id": "9c8607b6-ce42-4ef9-ba7d-0ab6928d31cc",
                "user": "erica.rau",
                "content": "El libro es una joya literaria que te transporta a otra época y te hace vivir aventuras inolvidables.",
                "hashtags": "[\"motivación\",\"historia\",\"autoayuda\",\"farina\",\"creatividad\",\"educación\",\"comida\"]",
                "likes_count": 72,
                "published_at": "2023-09-22 00:43:33",
                "created_at": "2024-07-14T22:04:49.000000Z",
                "updated_at": "2024-07-14T22:04:50.000000Z"
            }
        ]
    }
    ```
- **POST** /tweets/randomize - Genera un nuevo listado random de Tweets en el servidor

  **Response /tweets/randomize**
  ```json
    {
        "count": 1,
        "data": {
            "result": "Randomize completed."
        }
    }
    ```


