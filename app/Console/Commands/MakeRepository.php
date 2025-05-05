<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeRepository extends Command
{
    protected $signature = 'make:repository {name}';
    protected $description = 'Create a new repository class';
    protected Filesystem $files;

    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    public function handle()
    {
        $name = $this->argument('name');

        // Zamiana ukośników na systemowe separatory
        $path = app_path("Repositories/" . str_replace('\\', '/', $name) . ".php");

        // Automatyczne tworzenie brakujących katalogów
        $directory = dirname($path);
        if (!$this->files->isDirectory($directory)) {
            $this->files->makeDirectory($directory, 0755, true);
            $this->info("Directory '{$directory}' created.");
        }

        // Sprawdzanie, czy plik już istnieje
        if ($this->files->exists($path)) {
            $this->error("Repository '{$name}' already exists!");
            return Command::FAILURE;
        }

        // Generowanie pliku na podstawie szablonu
        $stub = $this->getStub();
        $className = class_basename($name);
        $namespace = str_replace('/', '\\', dirname("App\\Repositories\\{$name}"));
        $stub = str_replace(['{{ namespace }}', '{{ className }}'], [$namespace, $className], $stub);

        $this->files->put($path, $stub);

        $this->info("Repository '{$name}' created successfully at {$path}");
        return Command::SUCCESS;
    }


    protected function getStub()
    {
        return <<<EOT
<?php

namespace App\Repositories;

class {{ repositoryName }}
{
    // Repository methods go here
}

EOT;
    }
}
