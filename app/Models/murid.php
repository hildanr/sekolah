<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    //
    protected  $table = 'murid';

    protected $primaryKey = 'id_murid';

    protected $fillable = [
        'nama',
        'umur',
        'hadir',
        'alamat',
        'kelas',
        'gender',
    ];
    protected $guarded = ['id_murid'];

}
