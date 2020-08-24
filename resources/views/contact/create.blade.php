@extends('layouts.master')

@section('content')
  <div class="container min-vh-100 p-5">
    <div class="row justify-content-center">
      <div class="colm-sm-12 col-md-10 col-xl-8">

        <div class="contact-card card m-1 m-md-4">

          <div class="card-header">
            <h5 class="card-title">Contact Form</h5>
            <i class="card-icon fa fa-envelope fa-2x" aria-hidden="true"></i>
          </div>

          <div class="card-body">
            
            @if (session()->has('message'))
              <div class="alert alert-success" role="alert">
                {{ session()->get('message') }}
              </div>
            @endif

            <form class="" id="contactForm" action="{{ route('contact.store') }}" method="POST">
              @csrf
              <div class="row">
                <fieldset class="form-group col-6">
                  <label for="name"><b>Name</b></label>
                  <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="John Doe">
                    @error('name')
                      <div class="">{{ $message }}</div>
                    @enderror
                  </fieldset>
                  <fieldset class="form-group col-6">
                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="johndoe@email.com">
                      @error('email')
                        <div class="">{{ $message }}</div>
                      @enderror
                    </fieldset>
                    <fieldset class="form-group col-12">
                      <label for="subject"><b>Subject</b></label>
                      <input type="text" name="subject" class="form-control @error ('subject') is-invalid @enderror" value="{{ old('subject') }}" placeholder="Subject ...">
                        @error('subject')
                          <div class="">{{ $message }}</div>
                        @enderror
                      </fieldset>
                      <fieldset class="form-group col-12">
                        <label for="message"><b>Message</b></label>
                        <textarea name="message" class="form-control @error ('message') is-invalid @enderror" rows="5" value="{{ old('message') }}" placeholder="Your message ..."></textarea>
                          @error('message')
                            <div class="">{{ $message }}</div>
                          @enderror
                        </fieldset>
                      </div>
                      <button type="submit" class="btn btn-info">Submit</button>
                    </form>

                  </div>

                  <div class="card-footer">
                    <a href="https://www.samuel-thibault.fr/" class="text-white">Website: <b>samuel-thibault.fr</b>
                      <i class="fa fa-external-link" aria-hidden="true"></i>
                    </a>
                  </div>

                </div>

              </div>
            </div>
          </div>
        @endsection
