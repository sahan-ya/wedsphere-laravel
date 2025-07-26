<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- Make sure this is here
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// Do NOT add Spatie's HasRoles yet! We will add it AFTER migrations.

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable; // <-- Make sure HasFactory is here

    // ... rest of your User model
}