<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [
        'name',
        'familyname',
        'resume',
    ];

    public function group()
    {
        return $this->belongsTo('\App\Group');
    }

    public function event()
    {
        return $this->belongsTo('\App\Event');
    }

    public function profilePicture()
    {
        return $this->hasOne('\App\Photo');
    }

    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    public static function formFields()
    {
        return[
            [
                'name' => 'name',
                'type' => 'text',
                'label' => 'naam',
                'value' => ''
            ],
            [
                'name' => 'familyname',
                'type' => 'text',
                'label' => 'familienaam',
                'value' => ''
            ],
            [
                'name' => 'resume',
                'type' => 'textarea',
                'label' => 'Over de leider',
                'value' => ''
            ],
            [
                'name' => 'group_id',
                'type' => 'select',
                'label' => 'Afdeling',
                'value' =>  array(1=>'ribbel', 2=>"speelclub", 3=> 'rakwi', 4 =>'tito', 5=> 'keasp')
            ],
        ];
    }
}
