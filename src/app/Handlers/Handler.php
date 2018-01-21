<?php

namespace LaravelEnso\DocumentsManager\app\Handlers;

use LaravelEnso\FileManager\app\Classes\FileManager;

abstract class Handler
{
    protected $fileManager;

    public function __construct()
    {
        $this->fileManager = new FileManager(config('enso.config.paths.files'));
    }
}
