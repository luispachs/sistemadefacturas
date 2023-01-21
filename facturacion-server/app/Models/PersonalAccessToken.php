<?php
namespace App\Models;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;
 
class PersonalAccessToken extends SanctumPersonalAccessToken
{
    protected $table="access_token";
    protected $fillable=["user_id","token","expired_at","update_at"];
    public $timestamps=false;

}