<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('ceramique_universall_admin')->withErrors([
            'email' => 'Vous avez été déconnecté']);;
    }
}
