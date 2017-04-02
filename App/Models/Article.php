<?php

namespace App\Models;

/**
 * Class Article
 * Модель статьи
 *
 * @package App\Models
 *
 * @property Author $author
 */
class Article extends Model
{
    protected const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

    public function __get($name)
    {
        if ('author' === $name && null !== $this->author_id) {
            return Author::findById($this->author_id);
        }
    }

}
