<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="/">
    <img src="{{ asset('storage/img/apis-white.svg') }}" width="40" height="40" class="d-inline-block align-top" alt="">
    <span class="h3 px-3">API's App</span>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">

    <ul class="navbar-nav mr-auto" id="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('cards') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('features') }}">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
      </li>
    </ul>

    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" disabled>
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit" disabled>Search</button>
    </form>

  </div>

</nav>
