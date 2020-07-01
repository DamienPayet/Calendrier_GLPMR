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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="{{url('css/main.css')}}" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Administration -->
        <li class="nav-item">
          <a class="nav-link" role="button" href="{{route('backtraitement')}}"  ><i class="fa fa-plus" aria-hidden="true"></i></a>
        </li>
        <!-- Prof
        <li class="nav-item">
        <a class="nav-link"  role="button"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" id="linkimg"  role="button"><i class="far fa-images"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="http://pasteurmontroland.com/" class="brand-link">
      <img src="{{url('img/pmr.svg')}}" alt="AdminLTE Logo" class="brand-image elevation-3"
      style="opacity: .8">
      <span class="brand-text font-weight-light">Emploie du temps</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-itm-form nav-item has-treeview menu-open">
            <div class="form-group">
              <a class="navba-left">
                <i class="fa fa-graduation-cap "></i>
                <p>   Formation :</p>
              </a>
              <select class="form-control" onchange="val(); creationcookie();" id="formation">
                @foreach ($lesformations as $formation)
                  <option value="{{$formation->idform}}" >{{$formation->nom}}</option>
                @endforeach
              </select>
            </div>
          </li>
          <li class="nav-itm-form nav-item has-treeview menu-open">
            <div class="form-group">
              <a class="navba-left">
                <i class="fa fa-calendar"></i>
                <p>   Semaine :</p>
              </a>
              <select class="form-control" onchange="val()" id="date">
              </select>
            </div>
          </li>
          <br>
          <li class="nav-itm-form nav-item has-treeview menu-open">
            <div class="form-group">
              <a onclick="swipe_left()">
                <i class="fas fa-chevron-left"></i>

              </a>
              <a onclick="swipe_right()" style="float : right;">
                <i class="fas fa-chevron-right"></i>

              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div id="x" class="col-md-12">
          @section('contenu')
          @show
        </div>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</div>


<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{url('js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{url('plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{url('js/demo.js')}}"></script>
<script src="{{url('js/pages/dashboard3.js')}}"></script>
<script type="text/javascript" src="{{url('js/fonction.js')}}"></script>
<script>

//Fonction recuperation de l'image
function val() {
  f = document.getElementById("formation").value;
  d = document.getElementById("date").value;
  imgdd = f + d;
  var img = document.createElement("img");
  img.src = "{{url('')}}/img/" + imgdd + ".png";
  img.className = "calendar";
  var div = document.getElementById("x");
  document.getElementById('x').innerHTML="";
  div.appendChild(img);
  var a = document.getElementById('linkimg');
  var url = '{{ route("viewimg", ":id") }}';
  url = url.replace(':id', imgdd);
  a.href = url;
}
//Listener , lancement des fonction au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
  lecturecookie();
  started();
  val();
});
//Fonction chargement des semaines
function started(){
  var liste = <?php echo json_encode($lessemaines) ; ?>;
  liste.forEach((item, i) => {
    var val = liste[i].debut + " au " + liste[i].fin;
    var x = document.getElementById("date");
    var option = document.createElement("option");
    option.text = val;
    option.value =  liste[i].num;
    if(test(liste[i])==true){
      option.selected = true ;
    }
    x.add(option);
  });
}
// Fonction chargement de l'ep de la semaine en cour .
function test(liste){
  var sdate1 = liste.debut;
  var sdate2 = liste.fin;
  var date1 = new Date(sdate1.substr(6,4), sdate1.substr(3,2) -1 , sdate1.substr(0,2));
  var date2 = new Date(sdate2.substr(6,4), sdate2.substr(3,2) -1 , sdate2.substr(0,2));
  var today = new Date;
  if(date1 < today){
    if (today < date2){
      return true;
    }
  }
  return false;
}
//Fonction bouton semaine suivante
function swipe_right(){
  var dir = 1;
  swipe(dir);
}
//Fonction bouton semaine precedente
function swipe_left(){
  var dir = -1;
  swipe(dir);
}
//fonction switche vers la semaine suivante ou precedente
function swipe(dir){
  var selected = document.getElementById("date").value;
  var liste = <?php echo json_encode($lessemaines) ; ?>;
  liste.forEach((item, i) => {
    if(liste[i].num == selected){
      var val = liste[i + dir].debut + " au " + liste[i + dir].fin;
      var x = document.getElementById("date");
      var option = document.createElement("option");
      option.text = val;
      option.value =  liste[i + dir].num;
      option.selected = true ;
      x.add(option);

    }
  });
  val();
}
// SAuvegarde dans les cookie la formation regarder pour ne pas avoir a la saisir !
//Fonction creation du cookie
function creationcookie(){
  var  fv = document.getElementById("formation").value;
  var selectElmt = document.getElementById("formation");
  var ft = selectElmt.options[selectElmt.selectedIndex].text;
  let date = new Date(Date.now() + 86400000); //86400000ms = 1 jour
  date = date.toUTCString();
  document.cookie = 'formationv='+ fv +'; expires=' + date;
  document.cookie = 'formationt='+ft+'; expires=' + date;
}
//Fonction lecturecookie
function lecturecookie(){
  if (document.cookie.length > 0){
    var tablecookie = document.cookie.split(';');
    var text = "formationt=";
    var value = "formationv=";
    var v = "";
    var t = "";
    for (i=0;i<tablecookie.length;i++){
      if(tablecookie[i].indexOf(text) != -1){
        t = tablecookie[i].substring(text.length + tablecookie[i].indexOf(text), tablecookie[i].length);
      }
      if(tablecookie[i].indexOf(value) != -1){
        v = tablecookie[i].substring(value.length + tablecookie[i].indexOf(value), tablecookie[i].length);
      }
    }
    if(v != ""){
      var x = document.getElementById("formation");
      var option = document.createElement("option");
      option.text = t;
      option.value =  v;
      option.selected = true ;
      x.add(option);
    }
  }
}


</script>
</body>
</html>
