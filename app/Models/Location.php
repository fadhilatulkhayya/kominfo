<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'latitude', 'longitude', 'expalanation'];

    public function category()
    {
        if ($this->category == 1) {
            return 'CCTV';
        } elseif ($this->category == 2) {
            return 'Wifi Publik';
        } elseif ($this->category == 3) {
            return 'Wifi OPD';
        } elseif ($this->category == 4) {
            return 'Videotron';
        } elseif ($this->category == 5) {
            return 'Jaringan Intra';
        } elseif ($this->category == 6) {
            return 'Tower';
        } else {
            return 'Tidak Ada';
        }
    }
}
