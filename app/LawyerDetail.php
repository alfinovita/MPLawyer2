<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LawyerDetail extends Model
{
    protected $table = 'lawyer';
    protected $fillable = [
        'user_id', 'service', 'member_expired', 'kartu_peradi', 'berita_acara', 'probono', 'gelar', 'bahasa', 'kota', 'provinsi', 'bio'
    ];
    protected $hidden = [
        'updated_at', 'created_at'
     ];
}
