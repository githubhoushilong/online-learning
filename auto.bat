@echo off
php artisan make:controller Admin/PaperController
php artisan make:controller Admin/QuestionController
php artisan make:model Admin/Paper
php artisan make:model Admin/Question
pause: