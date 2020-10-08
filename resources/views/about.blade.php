@extends('layouts.master')

@section('content')

  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="display-3">Hello, world!</h1>
          <p>I'm <a class="text-info" href="http://samuel-thibault.fr" target="_blank"><b>Samuel Thibault, Web Developer</b></a>. I made this website to show you what you can do whith APIs datas.</p>
          <p>If you have an idea on exploiting datas I can either make a solution to consume third-party datas or build your own API to deliver your datas to the world or selected users. Look at this simple <a class="text-info" href="http://messenger-api.samuel-thibault.fr" target="_blank"><b>example</b></a>.
            <p>Don't hesitate to <a class="text-info" href="{{ route('contact.create') }}"><b>contact me</b></a>, we will discuss how I can help you.<br>
              If you need online presence with a website for you or your business, I can assist you too.
              You can take a look at my <a class="text-info" href="http://samuel-thibault.fr" target="_blank"><b>website</b></a> to see my others works.</p>
              <p><a class="btn btn-info btn-lg" href="{{ route('contact.create') }}" role="button">Contact me</a></p>
            </div>
            <div class="col-md-4">
              <img src="{{ asset('storage/img/database-setting.svg') }}" alt="" class="img-rounded center-block w-100">
            </div>
          </div>
        </div>
      </div>

      <div class="container p-5">
        <!-- row -->
        <div class="row">
          <div class="col-md-4">
            <img src="{{ asset('storage/img/apis-white.svg') }}" alt="" class="img-rounded center-block w-100">
          </div>
          <div class="col-md-8 text-light">
            <h2>What is an API ?</h2>
            <blockquote cite="https://en.wikipedia.org/wiki/API">
              <p>An <b>application programming interface (API)</b> is a computing interface which defines interactions between multiple software intermediaries. It defines the kinds of calls or requests that can be made, how to make them, the data formats that should be used, the conventions to follow, etc. An API can be entirely custom, specific to a component, or it can be designed based on an industry-standard to ensure interoperability. Through information hiding, APIs enable modular programming, which allows users to use the interface independently of the implementation.</p>
              <p>In building applications, an <b>API</b> simplifies programming by abstracting the underlying implementation and only exposing objects or actions the developer needs.</p>
              <cite>Wikipedia</cite>
            </blockquote>

            <p><a class="btn btn-info btn-lg" href="https://en.wikipedia.org/wiki/API" role="button" target="_blank">Learn more &raquo;</a></p>
          </div>
        </div><!-- row -->

        <div class="row mt-5">
          <div class="col-md-12 text-light">
            <h2>Web APIs</h2>
            <p>Web APIs are the defined interfaces through which interactions happen between an enterprise and applications that use its assets, which also is a Service Level Agreement (SLA) to specify the functional provider and expose the service path or URL for its API users. An API approach is an architectural approach that revolves around providing a program interface to a set of services to different applications serving different types of consumers.</p>
            <p>When used in the context of web development, an API is typically defined as a set of specifications, such as <b>Hypertext Transfer Protocol (HTTP)</b> request messages, along with a definition of the structure of response messages, usually in an <b>Extensible Markup Language (XML)</b> or <b>JavaScript Object Notation (JSON)</b> format.</p>
            <p>An example might be a shipping company API that can be added to an eCommerce-focused website to facilitate ordering shipping services and automatically include current shipping rates, without the site developer having to enter the shipper's rate table into a web database. In the social media space, web APIs have allowed web communities to facilitate sharing content and data between communities and applications. In this way, content that is created in one place dynamically can be posted and updated to multiple locations on the web.</p>

            <p><a class="btn btn-light" href="{{ route('fetch.index') }}" role="button">Back to main page &laquo;</a></p>
          </div>
        </div><!-- row -->

      </div> <!-- /container -->



    @endsection
