<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Mail\BuyerFormSubmitted;
use App\Mail\SellerFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SalesController extends Controller
{
    public function buyerIndex() {
        // Get properties from database (replacing ProjectService)
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        return view('forms.buyer-form', compact('projects'));
    }

    public function sellerIndex() {
        // Get properties from database (replacing ProjectService)
        $projects = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        return view('forms.seller-form', compact('projects'));
    }

    public function buyerSend(Request $request)
    {
        $data = $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'nullable|email|max:255',
            'gender'      => 'required|string|in:male,female',
            'phone'       => 'required|string|max:20',
            'interest'    => 'required|string|in:land,house',
            'city'        => 'required|string|max:255',
            'country'     => 'required|string|max:255',
            'description' => 'required|string',
            'budget'      => 'required|string',
        ]);

        $recipient = config('mail.from.address');

        Mail::to($recipient)->send(new BuyerFormSubmitted($data));

        return redirect()->route('buyer.index')->with('success', 'Your buyer form has been submitted successfully!');
    }

    public function sellerSend(Request $request)
    {
        $data = $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'gender'      => 'required|string|in:male,female,other',
            'phone'       => 'required|string|max:20',
            'item'        => 'required|string|in:land,building,other',
            'documents'   => 'required|string|in:title_deed,land_certificate,survey_plan,other',
            'description' => 'required|string',
            'condition'   => 'required|string|max:255',
            'price'       => 'required|int',
        ]);

        $recipient = config('mail.from.address');

        Mail::to($recipient)->send(new SellerFormSubmitted($data));

        return redirect()->route('seller.index')->with('success', 'Your seller proposal has been submitted successfully!');
    }
}
