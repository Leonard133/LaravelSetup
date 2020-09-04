<?php

namespace App\Generator;

use Blueprint\Contracts\Generator;
use Blueprint\Models\Statements\RenderStatement;
use Blueprint\Tree;

class ViewGenerator implements Generator
{
    /**
     * @var \Illuminate\Contracts\Filesystem\Filesystem
     */
    private $files;

    public function __construct($files)
    {
        $this->files = $files;
    }

    public function output(Tree $tree): array
    {
        $output = [];

        /** @var \Blueprint\Models\Controller $controller */
        foreach ($tree->controllers() as $controller) {
            $guard = strtolower($controller->namespace());
            foreach ($controller->methods() as $method => $statements) {
                foreach ($statements as $statement) {
                    if (! $statement instanceof RenderStatement) {
                        continue;
                    }
                    $stub = $this->getStub($guard, $method);

                    $path = $this->getPath($statement->view());

                    if ($this->files->exists($path)) {
                        // TODO: mark skipped...
                        continue;
                    }

                    if (! $this->files->exists(dirname($path))) {
                        $this->files->makeDirectory(dirname($path), 0755, true);
                    }

                    if($method === 'index')
                    {
                        $stub = str_replace(':stype:', strtolower($controller->name()), $stub);
                        $stub = str_replace(':type:', $controller->name(), $stub);
                        if(count($statement->data()) !== 0)
                            $stub = str_replace(':data:', $statement->data()[0], $stub);
                        $stub = str_replace(':guard:', strtolower($controller->namespace()), $stub);
                    }

                    $this->files->put($path, $stub);

                    $output['created'][] = $path;
                }
            }
        }

        return $output;
    }

    public function types(): array
    {
        return ['controllers', 'views'];
    }

    protected function getPath(string $view)
    {
        return 'resources/views/'.str_replace('.', '/', $view).'.blade.php';
    }

    protected function getStub(string $guard, string $method)
    {
        $type = [
            'admin' => 'blueprint.admin_template',
            'user' => 'blueprint.user_template',
            "" => 'blueprint.landing_template'
        ];

        if(!is_bool(config($type[$guard])))
        {
            if($guard === 'admin')
            {
                if (!$this->files->exists('public/admin-asset')) {
                    $this->files->makeDirectory('public/admin-asset', 0755, true);
                }
                if (!$this->files->exists('public/admin-asset/asset')) {
                    $this->files->copyDirectory('stubs/view/'.config($type[$guard]).'/asset', 'public/admin-asset/template');
                }
                if (!$this->files->exists('resources/views/components')) {
                    $this->files->copyDirectory('stubs/view/'.config($type[$guard]).'/components', 'resources/views/components');
                }
                if (!$this->files->exists('resources/views/admin/auth')) {
                    $this->files->copyDirectory('stubs/view/'.config($type[$guard]).'/auth', 'resources/views/admin/auth');
                }
                if (!$this->files->exists('resources/views/admin/layouts')) {
                    $this->files->copyDirectory('stubs/view/'.config($type[$guard]).'/layouts', 'resources/views/admin/layouts');
                }
                if (!$this->files->exists('app/View/Components')) {
                    $this->files->copyDirectory('stubs/view/'.config($type[$guard]).'/View/Components', 'app/View/Components');
                }
            }

            return $this->files->get('stubs/view/' . config($type[$guard]) . '/template/' . $method .'.stub');
        }
        return $this->files->stub('view.stub');
    }
}
