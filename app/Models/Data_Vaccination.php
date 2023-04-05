<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Vaccination extends Model
{
    use HasFactory;

    protected $table = 'data__vaccinations';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function warga_masyarakat() {
        return $this->belongsTo(Warga_Masyarakat::class);
    }

    public function master_vaccination() {
        return $this->belongsTo(Master_Vaccination::class);
    }

    public function master_location_vaccination() {
        return $this->belongsTo(Master_Location_Vaccination::class);
    }
}
