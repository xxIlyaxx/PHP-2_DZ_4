<?php

namespace App\Models;

class Article extends Model
{
    protected const TABLE = 'news';

    public $title;
    public $lead;
}
