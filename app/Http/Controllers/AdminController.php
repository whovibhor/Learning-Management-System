<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Activity;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::count();
        $activeCourses = Course::where('status', 'active')->count();
        $pendingApprovals = Course::where('status', 'pending')->count();
        $recentActivities = Activity::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'activeCourses',
            'pendingApprovals',
            'recentActivities'
        ));
    }
}
