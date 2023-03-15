<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga_Masyarakat extends Model
{
    use HasFactory;

    protected $table = 'warga__masyarakats';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function data_vaccination() {
        return $this->hasMany(Data_vaccination::class);
    }
}
