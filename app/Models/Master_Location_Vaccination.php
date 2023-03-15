<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Location_Vaccination extends Model
{
    use HasFactory;

    protected $table = 'master__location__vaccinations';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function data_vaccination() {
        return $this->hasMany(Data_Vaccination::class);
    }
}
