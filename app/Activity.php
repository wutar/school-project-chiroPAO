<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $fillable = [
        'description',
        'title'
    ];
    public function photos()
    {
        return $this->hasMany('\App\Photo');
    }
    
    public function group()
    {
        return $this->belongsTo('\App\Group');
    }

    public static function formFields()
    {
        return[
            [
                'name' => 'title',
                'type' => 'text',
                'label' => 'titel',
                'value' => ''
            ],
            [
                'name' => 'description',
                'type' => 'textarea',
                'label' => 'beschrijving',
                'value' => ''
            ],            
        ];
    }
}
