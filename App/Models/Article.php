<?php

namespace App\Models;

use App\GetSet;

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
    use GetSet;

    protected const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

    public function __get($name)
    {
        if ('author' === $name && null !== $this->author_id) {
            if (false === isset($this->author)) {
                $this->author = Author::findById($this->author_id);
            }
            return $this->data['author'];
        }
    }

}
