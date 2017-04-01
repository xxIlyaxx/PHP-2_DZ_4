<?php

namespace App;

class View implements \Countable, \Iterator
{
    use GetSet;

    public function render(string $template)
    {
        ob_start();
        include $template;
        return ob_get_clean();
    }

    public function display(string $template)
    {
        echo $this->render($template);
    }

    public function count()
    {
        return count($this->data);
    }

    public function rewind()
    {
        reset($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function current()
    {
        return current($this->data);
    }

    public function next()
    {
        next($this->data);
    }

    public function valid()
    {
        return key($this->data) !== null;
    }
}