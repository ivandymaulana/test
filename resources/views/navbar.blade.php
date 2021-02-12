<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">
    <title>FLOWELTO</title>
  </head>
  <body>
    @if(Auth::user()->role == 'Manager')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand ml-2" href="#">Flowelto Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ml-auto" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               {{-- code bagian ini untuk memunculkan isi category pada dropdown navbar category
               dan juga mengambil hrefnya untuk pindah ke view category tersebut --}}
                @php($categorynavbar = App\Category::all())
                @foreach($categorynavbar as $categorynavbars)
                <a class="dropdown-item" href="/viewflowers/{{$categorynavbars->id}}">{{$categorynavbars->name}}</a>
                @endforeach
              </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ml-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              MANAGER
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/addflower">Add Flower</a>
              <a class="dropdown-item" href="#">Manage Categories</a>
              <a class="dropdown-item" href="/changepass">Change Password</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ml-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- untuk mengeluarkan nama dari user --}}
              {{Auth::User()->username}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li> --}}
          <li class="nav-item">
            {{-- memunculkan date format sesuai soal --}}
            <a class="nav-link" href="#">{{ date('D, d F Y') }}</a>
          </li>
        </ul>
      </div>
    </nav>
    @elseif(Auth::user()->role == 'user')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand ml-2" href="#">Flowelto Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ml-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @php($categorynavbar = App\Category::all())
                @foreach($categorynavbar as $categorynavbars)
                <a class="dropdown-item" href="/viewflowers/{{$categorynavbars->id}}">{{$categorynavbars->name}}</a>
                @endforeach
              </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ml-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              USER
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/viewcart">My Cart</a>
              <a class="dropdown-item" href="/thistory">Transaction History</a>
              <a class="dropdown-item" href="/changepass">Change Password</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ml-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Auth::User()->username}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
            <a class="nav-link" href="#">{{ date('D, d F Y') }}</a>
          </li>
        </ul>
      </div>
    </nav>
    @endif
    @yield('container')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>