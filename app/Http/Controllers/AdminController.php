<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;

class AdminController extends Controller
{
    public function dashboard() { return Inertia::render('Admin/Dashboard'); }
    public function classSchedule() { 
        $classes = \App\Models\PilatesClass::all();
        return Inertia::render('Admin/Schedule', ['classes' => $classes]); 
    }
    public function memberDatabase() { 
        $members = \App\Models\User::with('memberships')->get();
        return Inertia::render('Admin/Members', ['members' => $members]); 
    }
    public function studioSettings() { return Inertia::render('Admin/Settings'); }

    public function bookingManagement() { return Inertia::render('Admin/Bookings'); }
    public function financeReport() { 
        $transactions = \App\Models\Transaction::with('user')->orderBy('created_at', 'desc')->get();
        return Inertia::render('Admin/Finance', ['transactions' => $transactions]); 
    }
    public function branchManagement() { return Inertia::render('Admin/Branches'); }
    public function instructorPortal() { return Inertia::render('Admin/Instructor'); }
}
