<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;     // 追加
class Student extends Model
{
    use Sortable;
    public $sortable = [
        'id' ,
        'name' ,
        'email',
        'tel',
        'updated_at',
    ];
}
