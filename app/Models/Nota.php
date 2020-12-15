<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Nota extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $tables = 'notas';
    protected $dates = ['deleted_at'];

}
