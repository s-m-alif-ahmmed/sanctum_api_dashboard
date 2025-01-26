<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Web\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the dashboard page.
     *
     * @return View
     */

    public function index(): View
    {
        $user = Auth::user();

        if (Auth::check() && $user->role == 'admin') {

            $total_users = User::where('role', 'user')->count();

            return view('backend.layouts.dashboard.index',compact(
                'total_users',
            ));
        } elseif (Auth::check() && $user->role == 'user'){
            return redirect()->route('user.dashboard');
        } else{
            return redirect()->back();
        }
    }

}
