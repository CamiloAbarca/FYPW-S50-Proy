
-- Creación de dos controladores (registro y sesión)
#php artisan make:controller RegisterController
#php artisan make:controller SessionsController
#php artisan migrate:fresh
#php artisan make:middleware AdminAuth
#php artisan make:controller AdminController
#php artisan db:seed
