<?php

namespace App\Console\Commands\Blueprint;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

class ControllerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blueprint:controller {controller : Please specify controller name} {--api}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate controller blueprint';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $controller = $this->argument('controller');
        $item = explode('\\', $controller);
        if (count($item) > 1) {
            $guard = strtolower($item[0]) . '.';
            $con = $item[1];
            $lowerCon = strtolower($con);
        } else {
            $guard = '';
            $con = $item[0];
            $lowerCon = strtolower($con);
        }

        $data["controller"][$controller] = [
            'index' => [
                'query' => 'all:' . Str::of($con)->lower()->plural(),
                'render' => $guard . $lowerCon . '.index with:' . Str::of($con)->lower()->plural()
            ],
            'create' => [
                'render' => $guard . $lowerCon . '.create'
            ],
            'store' => [
                'validate' => $lowerCon,
                'save' => $lowerCon,
                'redirect' => $guard . $lowerCon . '.index'
            ],
            'show' => [
                'render' => $guard . $lowerCon . '.show with:' . $lowerCon
            ],
            'edit' => [
                'render' => $guard . $lowerCon . '.edit with:' . $lowerCon
            ],
            'update' => [
                'validate' => $lowerCon,
                'update' => $lowerCon,
                'redirect' => $guard . $lowerCon . '.index'
            ],
            'destroy' => [
                'delete' => $lowerCon,
                'redirect' => $guard . $lowerCon . '.index'
            ]
        ];
        if ($this->option('api'))
            $data["controller"]['API\\' . $con] = ['resource' => 'api'];
        $content = [
            'controllers' => $data['controller'],
        ];
        $yaml = Yaml::dump($content, 3);
        if (!File::exists("draft/single")) {
            File::makeDirectory("draft/single", 0755, true, true);
        }
        File::copy(base_path('single.yaml'), base_path('draft/single' . now()->format('Y_m_d_H_i_s') . 'single.yaml'));
        File::put(base_path('single.yaml'), $yaml);

        if (File::exists("single.yaml")) {
            Artisan::call("blueprint:build", [
                'draft' => 'single.yaml',
                '--skip' => 'tests'
            ]);
        }
    }
}
