<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactEmail;

use App\Contact;

use App\Http\Requests\ContactRequests;


class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pages.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ContactRequests  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequests $request)
    {
      $validated = $request->validated();

      Contact::create($validated);

      Mail::send(new ContactEmail($validated));

      return redirect()->route('contact.create')->with('message', 'Email sent');
    }

}
