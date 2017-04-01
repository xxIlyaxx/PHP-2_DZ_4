<?php

namespace App\Models;

class Article extends Model
{
    protected const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

    public function __get($name)
    {
        if ('author' === $name) {
            return Author::findById($this->author_id);
        }
    }

}
