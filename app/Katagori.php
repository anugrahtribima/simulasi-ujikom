<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Katagori extends Model
{
    use AutoNumberTrait;

    protected $table = 'katagoris';

    protected $guarded = [];

    public function getAutoNumberOption()
    {
        return [
            'code' => [
                'format' => function () {
                    return 'KTG/' . date('YYYY.mm.dd') . '/?';
                },
                'length' => 3,
            ]
        ];
    }
}
