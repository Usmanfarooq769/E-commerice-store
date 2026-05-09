<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Validator;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('user.contact-us');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required|string|max:255',
            'email'         => 'nullable|email|max:255',
            'phone_number'  => 'required|string|max:20',
            'description'   => 'required|string',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);

        }

        ContactUs::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'phone_number'  => $request->phone_number,
            'description'   => $request->description,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Your message has been submitted successfully.'
        ]);
    }
}