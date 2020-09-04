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

                    $this->files->put($path, $this->populateStub($stub, $statement));

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

        if($guard === 'admin')
        {
            if (! $this->files->exists('public/admin-asset')) {
                $this->files->makeDirectory(dirname($path), 0755, true);
            }
        }

        if(!is_bool(config($type[$guard])))
            return $this->files->get('stubs/view/' . config($type[$guard]) . '/template/' . $method .'.stub');
        return $this->files->stub('view.stub');
    }

    protected function populateStub(string $stub, RenderStatement $renderStatement)
    {
        return str_replace('{{ view }}', $renderStatement->view(), $stub);
    }
}
