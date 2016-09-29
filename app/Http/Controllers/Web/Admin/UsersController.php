<?php
/**
 * Author: hitman
 * Date: 21/9/2016
 * Time: 5:21 PM
 */

namespace App\Http\Controllers\Web\Admin;

use Illuminate\Http\Request;
use User;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users   = User::paginate();

        return view('admin.user.index', compact('users'));
    }
}
