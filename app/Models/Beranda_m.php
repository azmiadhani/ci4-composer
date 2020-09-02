<?php

namespace App\Models;

use CodeIgniter\Model;

class Beranda_m extends Model
{
    protected $table = 'news';

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return array($this->asArray()
            ->where(['slug' => $slug])
            ->first());
    }
}
