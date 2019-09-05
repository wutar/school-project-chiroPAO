<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'date',
        'price'
    ];

    public function organisers()
    {
        return $this->hasMany('\App\Leader');
    }
    
    public function kids()
    {
        return $this->belongsToMany('\App\Kid', 'events_kids');
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
            [
                'name' => 'date',
                'type' => 'date',
                'label' => 'datum',
                'value' => ''
            ],
            [
                'name' => 'price',
                'type' => 'number',
                'label' => 'prijs',
                'value' => ''
            ],
            
        ];
    }

}
