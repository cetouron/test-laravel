<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Stars extends Model
{
    use HasFactory;
//La table
    public $table = 'stars';
//Les champs
    protected $fillable = ['nom', 'prenom', 'description', "photo_url"];


}
