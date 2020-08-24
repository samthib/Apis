<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactEmail;

use App\Contact;

use App\Http\Requests\ContactRules;


class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRules $request)
    {
      $validated = $request->validated();

      Contact::create($validated);

      Mail::send(new ContactEmail($validated));

      return redirect()->route('contact.create')->with('message', 'Email sent');
    }

}
