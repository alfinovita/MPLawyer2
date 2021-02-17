<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'rating';
    
    protected $fillable = [
        'review', 'rating', 'type', 'reference_id', 'client_id', 'lawyer_id'
    ];
    protected $hidden = [
       'updated_at', 'created_at'
    ];
}
