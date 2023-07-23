<?php
namespace App\Http\Controllers;
use App\Services\UsersService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $usersService;

    public function __construct(UsersService $usersService)
    {
        $this->usersService = $usersService;
    }

    public function getUser($id)
    {
        $user = $this->usersService->getUser($id);

        return response()->json($user);
    }

    // Define other controller methods as needed
}