# About Laravel Setup

###Setup Steps

1. Remove .git folder
2. Run command `composer install`
3. Run command `npm install`
4. Run command `npm run dev`
5. Run command `cp .env.example .env`
6. Run command `php artisan key:generate`
7. Run command `php artisan optimize`
8. Run command `php artisan serve`

Change Template Steps
1. Open config/blueprint.php
2. Change the template value to other value

For Example

"template" => "frest" To  "template" => "skote"

Reset Permission
1. Run command `php artisan permission:reset`

Before Deployment (Coming Soon)
 1. Run command `php artisan cleanup`

---

### Template
1. [Frest Template](https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/landing-page/) - frest
2. [Skote Template](https://themesbrand.com/skote/) - skote
3. [Metronic Template (Demo 1)](https://preview.keenthemes.com/metronic/demo1/index.html) - metronic1

___

### Create Blueprint yaml

Command:

`php artisan blueprint {folder\\model}`
`php artisan blueprint:controller {folder\\model}`

Example:

`php artisan blueprint Post`

`php artisan blueprint Admin\\Post`

`php artisan blueprint:controller Admin\\Post`

To generate files based on single.yaml or draft.yaml

`php artisan blueprint:build`

To erase  generated files

`php artisan blueprint:erase`
 
 ---
 
 ### Commonly used command
 1. php artisan optimize
 2. composer dump-autoload
 
---

### Packages

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
 
