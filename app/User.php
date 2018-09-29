<?php

namespace App;

use App\UserRole;
use Laravel\Cashier\Billable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'province',
        'city',
        'street',
        'postal',
        'cellphone',
        'facebook',
        'instagram',
        'stripe_id',
        'card_brand',
        'card_last_four',
        'trial_ends_at',
        'account_type',
        'verified_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isVerified()
    {
      return $this->is_verified;
    }

    public function isBreeder()
    {
      $role = UserRole::where('role', '=', 'breeder')->where('user_id', '=', $this->id)->first();
      if(!($role === null)){
        return true;
      }else{
        return false;
      }
    }

    public function isBuyer()
    {
      $role = UserRole::where('role', '=', 'buyer')->where('user_id', '=', $this->id)->first();
      if(!($role === null)){
        return true;
      }else{
        return false;
      }
    }

    public function isTrial()
    {
      if($this->account_type == 'trial')
      {
        return true;
      }
      else{
        return false;
      }
    }

    public function isSubscriber()
    {
      if($this->account_type == 'subscriber')
      {
        return true;
      }
      else{
        return false;
      }
    }

    public function isOfficial()
    {
      if($this->account_type == 'verified')
      {
        return true;
      }
      else{
        return false;
      }
    }

    public function accountType()
    {
      return $this->account_type;
    }

    public function avatar()
    {
      return $this->filepath ?: 'img/default_avatar.png';
    }

    public function kennel()
    {
      return $this->hasOne('App\Kennel');
    }
}
