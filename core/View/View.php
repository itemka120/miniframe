<?php

namespace core\View;

class View
{
    protected array $data = array(); // Данные для отображения
    private mixed $template;

    public function __construct($template) {
        $this->template = $template;
    }

    public function assign($key, $value): void
    {
        $this->data[$key] = $value;
    }

    public function render(): bool|string
    {
        extract($this->data); // Преобразование массива данных в переменные
        ob_start(); // Начало буферизации вывода
        include $this->template; // Подключение шаблона
        return ob_get_clean();
    }

}