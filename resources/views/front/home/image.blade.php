<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Calendrier Lycée Pasteur Mont Roland</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{url('css/imagep.css')}}">
  <link href="{{url('css/main.css')}}" rel="stylesheet" />

</head>

<body>
  <!-- Navbar -->
  <nav class=" navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('')}} "role="button"><i class="fas fa-home"></i></a>
      </li>
    </ul>
  </nav>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <img src="http://calendrier_glpmr.test/img/{{$id}}.png" class="calendar">
    </div>
    <!-- /.container-fluid -->
  </div>


  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>



<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{url('js/adminlte.js')}}"></script>



</script>
</body>
</html>
