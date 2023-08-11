<?php

namespace core\Blade;

use eftec\bladeone\BladeOne;

class Blade {
    private string $viewsFolder;

    private string $cacheFolder;

    public function __construct()
    {
        // Указываем путь к папке с проектом
        $projectPath = realpath(__DIR__ . '/../..');

        // Устанавливаем пути к директориям относительно папки с проектом
        $this->viewsFolder = $projectPath . '/resources/views';
        $this->cacheFolder = $projectPath . '/storage/cache';
    }

    public function render($view, $data = []): string
    {
        try {

            $blade = new BladeOne($this->viewsFolder, $this->cacheFolder, BladeOne::MODE_DEBUG);
            return $blade->run($view, $data);

        } catch (\Exception $e) {

            return "Error rendering Blade template: " . $e->getMessage();

        }
    }
}
