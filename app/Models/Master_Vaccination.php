<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Vaccination extends Model
{
    use HasFactory;

    protected $table = 'master__vaccinations';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function data_vaccination() {
        return $this->hasMany(Data_vaccination::class);
    }
}
