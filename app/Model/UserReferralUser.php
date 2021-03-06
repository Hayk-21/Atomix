<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserReferralUser extends Model
{
    protected $table = 'user_referral_users';

    protected $fillable = [
        'user_id',
        'referral_user_id',
        'referral_id',
    ];

    public function refelarid(){

    }
}
