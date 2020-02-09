# Lesson

## Installer

```
$ composer global require "laravel/installer"
```

## Learn

1. Files and folders
    - .env
    - composer.json
    - package.json
    - webpack.mix.js
    - app/
        - Http/
        - Exceptions/
        - Providers/
        - Console/
    - resources/
        - views/
    - routes/
    - config/
        - database.php
    - database/
        - migrations/
    - storage/
2. Artisan
    - `php artisan list`
    - `php artisan route:list`
3. App key
    - composer.json
4. App namespace
    - composer.json
    - `php artisan app:name Learn`
5. Configuration
    - .env > `APP_ENV`
    - config/app.php
    - config/services.php > Braintree
    - Afficher dans app/routes/web.php
6. Basic routing
    - app/routes/web.php
7. Group routing
    - app/routes/web.php
8. Name routing
9. Basic controllers
    - `php artisan artisan make:controller HomeController`
    - app/routes/web.php
    - app/Http/Controller/HomeController.php
10. Request
    - `/home?name=clement`
    - app/Http/Controller/HomeController.php
11. Send a form
    - app/routes/web.php
    - app/Http/Middleware/VerifyCsrfToken.php
12. View
    - resources/views/home/index.blade.php
    - app/Http/Controller/HomeController.php
13. Templates
    - resources/views/templates/default.blade.php
    - resources/views/home/index.blade.php
14. Custom error page
    - app/Http/Exceptions/Handler.php
    - resources/views/errors/404.blade.php
15. CSRF protection
    - resources/views/mail/index.blade.php
    - `php artisan make:controller MailingController`
    - app/routes/web.php
    - app/Http/Controller/MailingController.php
16. Basic validation
    - app/Http/Controller/MailingController.php
    - resources/views/mail/index.blade.php
17. Custom validation
    - app/Http/Controller/MailingController.php
    - app/resources/lang/en/validation.php
18. Bootstrap example
    - resources/views/templates/bootstrap.blade.php
    - resources/views/mailing/index.blade.php
19. Keep old values in form
    - resources/views/mailing/index.blade.php
20. Form request
    - app/routes/web.php
    - `php artisan make:controller NewsletterController`
    - app/Http/Controller/NewsletterController.php
    - resources/views/newsletter/index.blade.php
    - `php artisan make:request CreateSubscriptionFormRequest`
    - app/Http/Requests/Newsletter/CreateSubscriptionFormRequest.php
21. Redirecting
    - app/routes/web.php
    - app/Http/Controller/HomeController.php
22. Json Response
    - app/routes/web.php
    - app/Http/Controller/HomeController.php
23. Configure email
    - mailtrap.io
    - .env
    - config/mail.php
24. Send email
    - `php artisan make:controller MailController`
    - app/Http/Controller/MailController.php
    - resources/views/emails/welcome.blade.php
25. Basic migration
    - `php artisan make:migration create_users_table`
    - database/migrations/create_user_table.php
    - `php artisan migrate`
    - `php artisan make:migration add_password_column_to_users_table`
    - database/migrations/add_password_column_to_users_table.php
    - `php artisan migrate`
    - `php artisan migrate:rollback`
    - `php artisan migrate:reset`
    26. Modifying columns
    - `php artisan make:migration update_users_set_bio_nullable --table=users`
    - database/migrations/update_users_set_bio_nullable.php
    - `composer require doctrine/dbal`
    - `php artisan migrate`
27. Model (Eloquent)
    - `php artisan make:migration create_posts_table --create=posts`
    - `php artisan migrate`
    - `php artisan make:model Post`
    - app/Http/Post.php
    - app/routes/web.php
28. Fetch results
    - app/routes/web.php
    - app/Http/Controller/HomeController.php
    - resources/views/posts/index.blade.php
29. CRUD
    - app/routes/web.php
    - app/Http/Controller/HomeController.php
30. Dates
    - app/routes/web.php
    - app/Http/Controller/HomeController.php
    - resources/views/posts/post.blade.php
    - app/Http/Post.php
31. Properties and methods
    - app/routes/web.php
    - app/Http/Controller/HomeController.php
    - app/Http/User.php
32. Scopes
    - app/routes/web.php
    - app/Http/Controller/HomeController.php
    - app/Http/User.php
33. Route model binding
    - `php artisan make:controller PostController`
    - app/routes/web.php
    - app/Http/Controller/PostController.php
34. Basic pagination
    - app/routes/web.php
    - app/Http/Controller/HomeController.php
    - resources/views/posts/pagination.blade.php
35. Seeders
    - `php artisan make:seeder PostSeeder`
    - database/seeds/DatabaseSeeder.php
    - database/seeds/PostSeeder.php
    - `php artisan db:seed`