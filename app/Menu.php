<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Menu extends Authenticatable
{
    use Notifiable;

    protected $table        = 'menu';
    protected $primaryKey   = 'id';
    protected $guard        = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'icon', 'parent-id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRememberToken()
    {
        return null; // not supported
    }

    public function setRememberToken($value)
    {
        // not supported
    }

    public function getRememberTokenName()
    {
        return null; // not supported
    }

    /**
     * Overrides the method to ignore the remember token.
     */
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute) {
            parent::setAttribute($key, $value);
        }
    }

    /**
     * Create new 1 record [user] into table [mst_user]
     *
     * @param string $userSei
     * @param string $userMei
     * @param string $email
     * @param string $provider
     * @param string $providerId
     *
     * @return Object
     */
//    public function create($userSei, $userMei, $email, $provider, $providerId)
//    {
//        $objUser = Menu::create([
//            'user_sei'      => $userSei,
//            'user_mei'      => $userMei,
//            'tel_no'        => config('barhop.tel_no_default'),
//            'login_mail'    => $email,
//            'provider'      => $provider,
//            'provider_id'   => $providerId,
//            'created_at'    => now()
//        ]);
//
//        return $objUser;
//    }

    /**
     * Get user info by [provider] and [provider_id]
     */
    public function getUserInfoByProvider($provider, $providerId)
    {
        return \App\Models\Menu::where(['provider' => $provider, 'provider_id' => $providerId])->first();
    }

}
