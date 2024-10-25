<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';

    // CRUD 
    // Error Mass Assignment -> Deklarasi field untuk di insert ke db
    // ada 2 cara

    // cara 1
    // protected $fillable=['nim', 'nama', 'email', 'no_hp', 'jurusan', 'alamat'];
    
    // cara 2
    protected $guarded=[];
}
