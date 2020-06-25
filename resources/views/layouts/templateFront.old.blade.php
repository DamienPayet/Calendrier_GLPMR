<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{url('img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Calendrier Lycée Pasteur Mont Roland
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://bootswatch.com/bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- CSS Files -->
  <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{url('css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <link href="{{url('css/main.css')}}" rel="stylesheet" />
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="http://pasteurmontroland.com/" class="simple-text logo-normal">
          <div class="logo-image-big">
            <img src="{{url('img/logo.svg')}}">
          </div>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item btn-rotate dropdown">
            <div class="form-group">
              <a>
                <i class="nc-icon nc-bank"></i>
                <p>Formation :</p>
              </a>
              <select class="form-control" onchange="val()" id="formation">
                @foreach ($lesformations as $formation)
                  <option value="{{$formation->idform}}" >{{$formation->nom}}</option>
                @endforeach
              </select>
            </div>
          </li>
          <li>
            <div class="form-group">
              <a>
                <i class="nc-icon nc-calendar-60"></i>
                <p>Semaine :</p>
              </a>
              <select class="form-control" onchange="val()" id="date">
              </select>
            </div>
          </li>
          <br>
          <li>
            <div class="form-group">
              <a onclick="swipe_left()">
                <i class="nc-icon nc-minimal-left"></i>
                <p><!-- text --></p>
              </a>
              <a onclick="swipe_right()" style="float : right;">
                <i class="nc-icon nc-minimal-right"></i>
                <p><!-- text --></p>
              </a>
              <!--ici-->
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Pasteur Mont Roland</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div id="x" class="col-md-12">
          @section('contenu')
          @show
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{url('js/core/jquery.min.js')}}"></script>
  <script src="{{url('js/core/popper.min.js')}}"></script>
  <script src="{{url('js/core/bootstrap.min.js')}}"></script>
  <script src="{{url('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{url('js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{url('js/fonction.js')}}"></script>
  <!--Script affichage img -->
  
</body>

</html>
