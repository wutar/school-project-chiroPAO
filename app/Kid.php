<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    protected $fillable = [
        'name',
        'familyname',
        'birthday'
    ];

    public static function formFields()
    {
        return[
            [
                'name' => 'name',
                'type' => 'text',
                'label' => 'voornaam',
                'value' => ''
            ],
            [
                'name' => 'familyname',
                'type' => 'text',
                'label' => 'familienaam',
                'value' => ''
            ],
            [
                'name' => 'birthday',
                'type' => 'date',
                'label' => 'geboortedag',
                'value' => ''
            ],

        ];
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'users_kids');
    }

    public function group()
    {
        return $this->belongsTo('\App\Group');
    }

    public function events()
    {
        return $this->belongsToMany('App\Event', 'events_kids');
    }
}
