# About Laravel Setup

Setup Steps

`composer install`

`npm install`

`npm run dev`

`cp .env.example .env`

`php artisan key:generate`

`php artisan optimize` (Logic Exception api/user <--ignore this)

`php artisan serve`

---

## Packages

- [Laravel UI](https://laravel.com/docs/7.x/frontend)
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)
- [Laravel Telescope](https://laravel.com/docs/7.x/telescope)
- [Laravel Spatie Permission](https://spatie.be/docs/laravel-permission/v3/introduction)
- [Laravel Datatable Core](https://yajrabox.com/docs/laravel-datatables/master)
- [Laravel Datatable Html](https://yajrabox.com/docs/laravel-datatables/master/html-installation)
- [Laravel Datatable Buttons](https://yajrabox.com/docs/laravel-datatables/master/buttons-installation)
- [Laravel Backup](https://spatie.be/docs/laravel-backup/v6/introduction)
- [Laravel Slack Notification](https://laravel.com/docs/7.x/notifications#slack-notifications)
- [Laravel Excel](https://docs.laravel-excel.com/3.1/getting-started/)
- [Laravel Passport](https://laravel.com/docs/7.x/passport)
- [Laravel Livewire](https://laravel-livewire.com/docs/quickstart)
- [Laravel Activity Log](https://spatie.be/docs/laravel-activitylog/v3/introduction)
- [Laravel Blueprint](https://blueprint.laravelshift.com/)

---

## Template
1. [Frest Template](https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/landing-page/)
2. [Skote Template](https://themesbrand.com/skote/)

---

## Common Command
1. php artisan optimize
2. composer dump-autoload

---

## Create Blueprint yaml

Command: 

`php artisan add:blueprint {folder\\model} {option}`

Option:

`--force : to force rewrite yaml file` 

Example:

`php artisan add:blueprint Admin\\Post --force`

To generate files based on draft.yaml

`php artisan blueprint:build`

To erase files for generated files

`php artisan blueprint:erase`
