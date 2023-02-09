<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $tabl = 'students';
    protected $primaryKey ='id';
    protected $fillable = [
        'name','phone','email','age','address'];

    //protected $guarded = [];
}
