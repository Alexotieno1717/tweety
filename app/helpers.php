<?php


use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

function current_user(): User|Authenticatable|null
{
    return auth()->user();
}
