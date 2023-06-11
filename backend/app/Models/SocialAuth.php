<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialAuth extends Model implements Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'google_id',
    ];

    // Implement the required methods from the Authenticatable interface

    public function getAuthIdentifierName()
    {
        return 'id'; // Replace with the actual identifier column name
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        // If you have a password column in the table, return it here
        // Otherwise, if there's no password for this model, you can return null or an empty string
    }

    public function getRememberToken()
    {
        return null; // If you don't use "remember me" functionality, return null
    }

    public function setRememberToken($value)
    {
        // If you don't use "remember me" functionality, you can leave this method empty
    }

    public function getRememberTokenName()
    {
        return null; // If you don't use "remember me" functionality, return null
    }

    // Other methods and relationships...
}
