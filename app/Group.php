<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'description',
    ];

    public static function formFields()
    {
        return[
            [
                'name' => 'description',
                'type' => 'textarea',
                'label' => 'beschrijving',
                'value' => ''
            ],
        ];
    }


    public function leaders()
    {
        return $this->hasMany('\App\Leader');
    }

    public function activities()
    {
        return $this->hasMany('\App\Activity')->orderBy('created_at', 'DESC');
    }

    public function picture()
    {
        return $this->hasOne('\App\Photo');
    }

    public function kids()
    {
        return $this->hasMany('\App\Kid');
    }

    //returns the correct group for the age of the kid
    public static function getGroup( $kid )
    {
        $birthday = Carbon::createFromFormat('Y-m-d', $kid->birthday);
        $month = Carbon::now()->month;
        if($month>7)
        {
            $beginYear = now()->year;
        }
        else
        {
            $beginYear = now()->year - 1;
        }
        $lastDayOfBeginYear = Carbon::createFromFormat('Y-m-d',$beginYear.'-12-12');
        $ageAtEndOfBeginYear = $lastDayOfBeginYear->diffInYears($birthday);
        $groupId = 0;
        if( $ageAtEndOfBeginYear < 8 ) $groupId =  1;
        else if(8 <= $ageAtEndOfBeginYear && $ageAtEndOfBeginYear < 10) $groupId =  2;
        else if(10 <= $ageAtEndOfBeginYear && $ageAtEndOfBeginYear < 12) $groupId =  3;
        else if(12 <= $ageAtEndOfBeginYear && $ageAtEndOfBeginYear < 14) $groupId = 4;
        else if(14 <= $ageAtEndOfBeginYear && $ageAtEndOfBeginYear < 17) $groupId = 5;
        $group = \App\Group::FindOrFail($groupId);
        $kid->group_id = $group->id;
        $kid->save();
        return $kid->group;
    }

}
