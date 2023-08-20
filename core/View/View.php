<?php

namespace core\View;

use eftec\bladeone\BladeOne;
use Exception;

class View
{
    protected BladeOne $blade;

    public function __construct()
    {
        // Указываем путь к папке с проектом
        $projectPath = realpath(__DIR__ . '/../..');

        // Устанавливаем пути к директориям относительно папки с проектом
        $views = $projectPath . '/resource/views';
        $cache = $projectPath . '/storage/cache';

        $this->blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
    }

    /**
     * @throws Exception
     */
    public function render($template, $data = []): string
    {
        return $this->blade->run($template, $data);
    }
}