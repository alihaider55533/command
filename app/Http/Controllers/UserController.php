<?php

namespace App\Http\Controllers;
use App\Services\UserService;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    const USERS_LISTING_PAGE = 'listing';
    private $_userService;

    public function __construct()
    {
        $this->_userService = new UserService();
    }
    public function users()
    {
        $users = App::make(UserService::class)->users();
//        dd($users);
        return view(self::USERS_LISTING_PAGE, compact('users'));
    }
}
