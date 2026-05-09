Pasos para el backend
2. Copia el archivo de configuración de entorno:
   ```
   cp .env.example .env
   ```

5. Genera la clave de la aplicación:
   ```
   php artisan key:generate
   ```

6. Configura la base de datos en `.env` y ejecuta las migraciones:
   ```
   php artisan migrate
   ```

7. Ejecuta los seeders para poblar la base de datos:
   ```
   php artisan db:seed
   ```

8. Inicia el servidor de desarrollo:
   ```
   php artisan serve
   ```
