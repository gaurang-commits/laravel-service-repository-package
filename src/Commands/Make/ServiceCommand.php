<?php

namespace Gaurang\LaravelServiceRepository\Commands\Make;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Facades\Artisan;

class ServiceCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:service';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Laravel Service class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';

    public function handle()
    {
        if (! class_exists(config('service-repository.NAMESPACE.REPOSITORIES').'\\'.$this->argument('name').'Repository')) {
            $this->error('Repository '.$this->argument('name').'Repository does not exist');
            if ($this->confirm('Do you want to create '.$this->argument('name').'Repository ?')) {
                if (! class_exists(config('service-repository.NAMESPACE.MODELS').'\\'.$this->argument('name'))) {
                    $this->error('Model '.$this->argument('name').' does not exist');

                    return false;
                }
                Artisan::call("make:repository", ['name' => $this->argument('name')]);
                $this->info($this->argument('name').'Repository created successfully');
            } else {
                $this->error('Create '.$this->argument('name').'Repository before making service.');
                $this->newLine();
                $this->line('You can use the following command:');
                $this->info('php artisan make:repository '.$this->argument('name'));
                $this->newLine();

                return false;
            }
        }
        parent::handle();
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/../Stubs/MakeService.stub';
    }

    /**
     * Get the destination class path.
     *
     * @param string $name
     *
     * @return string
     */
    protected function getPath($name)
    {
        $name = str_replace($this->laravel->getNamespace(), '', $name);

        return $this->laravel['path'].'/'.str_replace('\\', '/', $name).'Service.php';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return config('service-repository.NAMESPACE.SERVICES');
    }

    /**
     * Build the class with the given name.
     *
     * @param string $name
     * @return string
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub, $name)->replaceClass($stub, $name);
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [

        ];
    }
}
