<?php

namespace App;

/**
 * Class Controller
 * Базовый класс контроллера
 *
 * @package App
 */
abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * Метод - валидатор
     *
     * @param string $action
     * @return bool
     */
    protected function access(string $action)
    {
        return method_exists($this, $action);
    }

    /**
     * Получает имя экшена, проверяет на валидацию
     * и выполняет его
     *
     * @param string $name
     */
    public function action(string $name)
    {
        $name = 'action' . $name;
        if (false === $this->access($name)) {
            header('HTTP/1.1 403 Forbidden', 403);
            $this->view->display(__DIR__ . '/../templates/forbidden.php');
            exit();
        }
        $this->$name();
    }
}