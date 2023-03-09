<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Mail;
use App\Mail\Checkout\Paid;
class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        // return $checkout;
        
        $checkout->is_paid = true;
        $checkout->save();
        
        // send email to user
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('success', "Checkout with ID {$checkout->id} has been updated!");
        return redirect(route('admin.dashboard'));
    }
}
