<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown ">
          @auth
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          {{Auth::user()->name}}
          </a>
          @endauth
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="" onclick="if(confirm('Are You Sure To Logout?')){event.preventDefault();document.getElementById('logout-form').submit();}">Logout</a></li>
            <form action="{{route('logout')}}" method="post" id="logout-form">
              @csrf
            </form>
           </ul>
        </li>
      </ul>
     </div>
  </div>
</nav>
  </div>
  <!-- Nav -->
  <div class="container my-3">
    <div class="row">
      <div class="col-md-6">
        <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
</div>
      </div>
    </div>
  </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>