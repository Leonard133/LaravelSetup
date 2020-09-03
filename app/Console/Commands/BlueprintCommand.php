<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

class BlueprintCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:blueprint {model* : Please specify at least one model} {--api} {--F | --force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make initial blueprint YAML file';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $model = collect($this->argument('model'))->map(function ($item) {
            return ucfirst($item);
        });
        foreach ($model as $m) {

            $item = explode('\\', $m);
            if (count($item) > 1) {
                $guard = strtolower($item[0]) . '.';
                $mod = $item[1];
                $lowerMod = strtolower($mod);
            } else {
                $guard = '';
                $mod = $item[0];
                $lowerMod = strtolower($mod);
            }

            $data["model"][$mod] = ['content' => 'string', 'deleted_at' => 'softDeletes'];
            $data["controller"][$m] = [
                'index' => [
                    'query' => 'all:' . Str::of($mod)->lower()->plural(),
                    'render' => $guard . $lowerMod . '.index with:' . Str::of($mod)->lower()->plural()
                ],
                'create' => [
                    'render' => $guard . $lowerMod . '.create'
                ],
                'store' => [
                    'validate' => $lowerMod,
                    'save' => $lowerMod,
                    'redirect' => $guard . $lowerMod . '.index'
                ],
                'show' => [
                    'render' => $guard . $lowerMod . '.show with:' . $lowerMod
                ],
                'edit' => [
                    'render' => $guard . $lowerMod . '.edit with:' . $lowerMod
                ],
                'update' => [
                    'validate' => $lowerMod,
                    'update' => $lowerMod,
                    'redirect' => $guard . $lowerMod . '.index'
                ],
                'destroy' => [
                    'delete' => $lowerMod,
                    'redirect' => $guard . $lowerMod . '.index'
                ]
            ];
            if ($this->option('api'))
                $data["controller"]['API\\' . $m] = ['resource' => 'api'];
        }
        $content = [
            'models' => $data['model'],
            'seeders' => implode(', ', $model->map(function ($item) {
                return explode("\\", $item)[1] ?? $item;
            })->unique()->toArray()),
            'controllers' => $data['controller'],
        ];
        $yaml = Yaml::dump($content, 3);
        if ($this->option('force')) {
            File::put(base_path('draft.yaml'), $yaml);
        } else {
            if (!File::exists(base_path('draft.yaml')))
                File::put(base_path('draft.yaml'), $yaml);
        }
    }
}
