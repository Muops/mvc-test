<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Company extends Model{
    protected $table = "companies";

    public $timestamps = false;

    protected $fillable = [

    'name',
    'address',
    'logo',
    'director_name'

    ];
}

?>