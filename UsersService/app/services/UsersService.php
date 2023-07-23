<?php
// app/Services/UsersService.php

namespace App\Services;

use App\Models\User;

class UsersService
{
    public function getUser($id)
    {
        $user = User::findOrFail($id);

        return $user;
    }

    // Define other service methods as needed
}
