<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
  <body>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-primary py-2">
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="bi bi-person-fill"></i> User

                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">
                        <div class="media">
                            <img class="align-self-center mr-3" src="https://logos-download.com/wp-content/uploads/2016/03/McDonalds_some_countries_Logo_2003.png" alt="Generic placeholder image" width="50" height="70">
                            <div class="media-body">
                              <h5 class="mt-3">{{Auth::user()->name ?? ''}}</h5>
                              <small><i class="bi bi-emoji-smile-fill">Hello</i>
                              </small>
                            </div>
                          </div>
                      </a>
                      <a class="dropdown-item border-top" href=><i class="bi bi-gear-fill"></i>
                        Setting</a>
                      <a class="dropdown-item border-top" href="logout"><i class="bi bi-power"></i>
                        Logout</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row vh-100" >
            <div class="col-md-2 border">
                @include('layouts.navigasi')
            </div>
            <div class="col-md-10">
                      @yield('content')
            </div>
        </div>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>