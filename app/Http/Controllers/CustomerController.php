<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;

class CustomerController extends Controller
{
    public function home() { return Inertia::render('Customer/Home'); }
    public function classSchedule() { 
        $classes = \App\Models\PilatesClass::all();
        return Inertia::render('Customer/Schedule', ['classes' => $classes]); 
    }
    
    public function bookClass(Request $request, $id) {
        $class = \App\Models\PilatesClass::findOrFail($id);
        
        if ($class->enrolled >= $class->capacity) {
            return redirect()->back()->with('error', 'Class is full.');
        }

        // Hardcoding user_id for now as auth is simple/mocked
        \App\Models\Booking::create([
            'user_id' => 1,
            'class_id' => $class->id,
            'status' => 'confirmed'
        ]);

        $class->increment('enrolled');

        return redirect()->back()->with('success', 'Booked successfully.');
    }

    public function membership() { 
        $memberships = \App\Models\Membership::where('user_id', 1)->get();
        return Inertia::render('Customer/Membership', ['memberships' => $memberships]); 
    }
    public function classDetail() { return Inertia::render('Customer/ClassDetail'); }
    public function checkout() { return Inertia::render('Customer/Checkout'); }
    
    public function processCheckout(Request $request) {
        // Mocking payment success and membership creation
        \App\Models\Membership::create([
            'user_id' => 1,
            'plan_name' => '10-Class Pack',
            'start_date' => now(),
            'end_date' => now()->addMonths(6),
            'status' => 'active'
        ]);

        \App\Models\Transaction::create([
            'user_id' => 1,
            'transaction_id' => 'TRX-' . strtoupper(uniqid()),
            'amount' => 315.00,
            'method' => 'Credit Card',
            'status' => 'Paid'
        ]);

        return redirect('/customer/payment-success');
    }

    public function paymentSuccess() { return Inertia::render('Customer/PaymentSuccess'); }
    public function managePayment() { return Inertia::render('Customer/ManagePayment'); }
    public function addNewCard() { return Inertia::render('Customer/AddNewCard'); }

    // Obsolete routes (not part of the 4 core menu, redirect to home)
    public function cardAddedSuccess() { return redirect('/customer/home'); }
    public function confirmRemoveCard() { return redirect('/customer/home'); }
    public function profile() { return Inertia::render('Customer/Profile'); }
}
