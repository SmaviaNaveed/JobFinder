<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Jobcategory extends Model
{
      use SoftDeletes;

    protected $fillable=[
            'title',
            'type',
    ];
}
