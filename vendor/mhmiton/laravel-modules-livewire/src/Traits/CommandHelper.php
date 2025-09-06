<?php

namespace Mhmiton\LaravelModulesLivewire\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

trait CommandHelper
{
    protected function isCustomModule()
    {
        $moduleName = $this->argument('module');

        $module = $this->laravel['modules']->find($moduleName);

        $modulePath = $module ? $module->getPath() : null;

        // If module path not found, then check custom module path
        if (! \File::isDirectory($modulePath)) {
            return $this->getCustomModule() ? true : false;
        }

        return false;
    }

    protected function isForce()
    {
        return $this->option('force') === true;
    }

    protected function isInline()
    {
        return $this->option('inline') === true;
    }

    protected function ensureDirectoryExists($path)
    {
        $dir = File::extension($path) ? dirname($path) : $path;

        if (! File::isDirectory($dir)) {
            File::makeDirectory($dir, 0777, $recursive = true, $force = true);
        }
    }

    protected function getModule()
    {
        $moduleName = $this->argument('module');

        if ($this->isCustomModule()) {
            $module = $this->getCustomModule();

            $path = $module['path'] ?? '';

            if (! $module || ! File::isDirectory($path)) {
                $this->line("<options=bold,reverse;fg=red> WHOOPS! </> 😳 \n");

                $path && $this->line("<fg=red;options=bold>The custom {$moduleName} module not found in this path - {$path}.</>");

                ! $path && $this->line("<fg=red;options=bold>The custom {$moduleName} module not found.</>");

                return null;
            }

            return $moduleName;
        }

        if (! $module = $this->laravel['modules']->find($moduleName)) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS! </> 😳 \n");
            $this->line("<fg=red;options=bold>The {$moduleName} module not found.</>");

            return null;
        }

        return $module;
    }

    protected function getCustomModule()
    {
        $moduleName = $this->argument('module');

        $module = config('modules-livewire.custom_modules.'.$moduleName, null)
            ? config('modules-livewire.custom_modules.'.$moduleName)
            : collect(config('modules-livewire.custom_modules', []))
                ->where('name_lower', $moduleName)
                ->first();

        return $module;
    }

    protected function getModuleName()
    {
        return $this->isCustomModule()
            ? $this->module
            : $this->module->getName();
    }

    protected function getModuleLowerName()
    {
        return $this->isCustomModule()
            ? config("modules-livewire.custom_modules.{$this->module}.name_lower", strtolower($this->module))
            : $this->module->getLowerName();
    }

    protected function getModulePath($withApp = false)
    {
        $path = $this->isCustomModule()
            ? config("modules-livewire.custom_modules.{$this->module}.path")
            : ($withApp ? $this->module->getAppPath() : $this->module->getPath());

        return strtr($path, ['\\' => '/']);
    }

    protected function getModuleNamespace()
    {
        return $this->isCustomModule()
            ? config("modules-livewire.custom_modules.{$this->module}.module_namespace", $this->module)
            : config('modules.namespace', 'Modules');
    }

    protected function getModuleLivewireNamespace()
    {
        $moduleLivewireNamespace = config('modules-livewire.namespace', 'Http\\Livewire');

        if ($this->isCustomModule()) {
            return config("modules-livewire.custom_modules.{$this->module}.namespace", $moduleLivewireNamespace);
        }

        return $moduleLivewireNamespace;
    }

    protected function getNamespace($classPath)
    {
        $classPath = Str::contains($classPath, '/') ? '/'.$classPath : '';

        $prefix = $this->isCustomModule()
            ? $this->getModuleNamespace().'\\'.$this->getModuleLivewireNamespace()
            : $this->getModuleNamespace().'\\'.$this->module->getName().'\\'.$this->getModuleLivewireNamespace();

        return (string) Str::of($classPath)
            ->beforeLast('/')
            ->prepend($prefix)
            ->replace(['/'], ['\\']);
    }

    protected function getModuleLivewireViewDir()
    {
        $moduleLivewireViewDir = config('modules-livewire.view', 'resources/views/livewire');

        if ($this->isCustomModule()) {
            $moduleLivewireViewDir = config("modules-livewire.custom_modules.{$this->module}.view", $moduleLivewireViewDir);
        }

        return $this->getModulePath().'/'.$moduleLivewireViewDir;
    }

    protected function getModuleResourceViewDir()
    {
        $moduleResourceViewDir = config('modules.paths.generator.views.path', 'resources/views');

        if ($this->isCustomModule()) {
            $moduleResourceViewDir = config("modules-livewire.custom_modules.{$this->module}.views_path", $moduleResourceViewDir);
        }

        return $this->getModulePath().'/'.$moduleResourceViewDir;
    }

    protected function checkClassNameValid()
    {
        if (! $this->isClassNameValid($name = $this->component->class->name)) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS! </> 😳 \n");
            $this->line("<fg=red;options=bold>Class is invalid:</> {$name}");

            return false;
        }

        return true;
    }

    protected function checkReservedClassName()
    {
        if ($this->isReservedClassName($name = $this->component->class->name)) {
            $this->line("<options=bold,reverse;fg=red> WHOOPS! </> 😳 \n");
            $this->line("<fg=red;options=bold>Class is reserved:</> {$name}");

            return false;
        }

        return true;
    }

    protected function isClassNameValid($name)
    {
        return (new \Livewire\Features\SupportConsoleCommands\Commands\MakeCommand())->isClassNameValid($name);
    }

    protected function isReservedClassName($name)
    {
        return (new \Livewire\Features\SupportConsoleCommands\Commands\MakeCommand())->isReservedClassName($name);
    }
}
