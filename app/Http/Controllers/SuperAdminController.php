<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SystemLog;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        $totalAdmins = User::role(['admin', 'super_admin'])->count();
        $activeSessions = 0; // TODO: Implement active sessions tracking
        $systemLogs = SystemLog::latest()->take(10)->get();

        return view('super.dashboard', compact('totalAdmins', 'activeSessions', 'systemLogs'));
    }
}
