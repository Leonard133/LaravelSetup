<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = collect(Route::getRoutes()->getRoutes())->map(function ($item) {
            if (Str::is('admin.', $item->getAction()['as']) || Str::is('admin.index', $item->getAction()['as']) || Str::is('admin.generated*', $item->getAction()['as']) || 'admin.login' === $item->getAction()['as'] || 'admin.logout' === $item->getAction()['as'] || 'admin.register' === $item->getAction()['as'] || Str::is('admin.password*', $item->getAction()['as']) || Str::is('admin.verification*', $item->getAction()['as']))
                return null;
            if (Str::is('admin.*', $item->getAction()['as'])) {
                if (!Str::is('admin.*.store', $item->getAction()['as']) && !Str::is('admin.*.update', $item->getAction()['as']) && !Str::is('admin.*.show', $item->getAction()['as']))
                    return $item->getAction()['as'];
            }
        })->filter()->toArray();
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'admin']);
        }

        $permissions = collect(Route::getRoutes()->getRoutes())->map(function ($item) {
            if (Str::is('user.', $item->getAction()['as']) || Str::is('user.index', $item->getAction()['as']) || Str::is('user.generated*', $item->getAction()['as']) || 'user.login' === $item->getAction()['as'] || 'user.logout' === $item->getAction()['as'] || 'user.register' === $item->getAction()['as'] || Str::is('user.password*', $item->getAction()['as']) || Str::is('user.verification*', $item->getAction()['as']))
                return null;
            if (Str::is('user.*', $item->getAction()['as'])) {
                if (!Str::is('user.*.store', $item->getAction()['as']) && !Str::is('user.*.update', $item->getAction()['as']) && !Str::is('user.*.show', $item->getAction()['as']))
                    return $item->getAction()['as'];
            }
        })->filter()->toArray();
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'user']);
        }
    }
}
