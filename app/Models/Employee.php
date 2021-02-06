<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'EmpID';

    public $timestamps = false;
}
