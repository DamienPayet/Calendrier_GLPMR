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
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
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
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div id="x" class="col-md-12">
            @section('contenu')
            @show
          </div>
        </div>
      </div>
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="#Link" target="_blank">TEXT</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </footer>
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
  <!--Script affichage img -->
  <script src="{{url('js/fonction.js')}}"></script>
  <script>
  function val() {
    f = document.getElementById("formation").value;
    d = document.getElementById("date").value;
    imgdd = f + d;
    var img = document.createElement("img");
    img.src = "http://edt.glpmr.info/diplomes/" + imgdd + ".png";
    var div = document.getElementById("x");
    document.getElementById('x').innerHTML="";
    div.appendChild(img);
  }

  document.addEventListener('DOMContentLoaded', function() {
    started();
    val();
  });

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
  function test(liste){
    var nums = liste.num;
    var ladate=new Date()
    var sdate1 = liste.debut;
    var date1 = new Date();
    date1.setFullYear(sdate1.substr(6,4));
    var m = parseInt(sdate1.substr(3,2)) - 1;
    m = '0'+ m.toString();
    date1.setMonth(m);
    date1.setDate(sdate1.substr(0,2));
    var sdate2 = liste.fin;
    var date2 = new Date();
    date2.setFullYear(sdate2.substr(6,4));
    var m = parseInt(sdate1.substr(3,2)) - 1;
    m = '0'+ m.toString();
    date2.setMonth(m);
    date2.setDate(sdate2.substr(0,2));
    if(date1<= ladate){
      if(date2 >= ladate){
        return true;
      }
    }
    return false;
  }
  function swipe_right(){
    var dir = 1;
    swipe(dir);
  }
  function swipe_left(){
    var dir = -1;
    swipe(dir);
  }
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
        f = document.getElementById("formation").value;
        d = document.getElementById("date").value;
        imgdd = f + d;
        var img = document.createElement("img");
        img.src = "http://edt.glpmr.info/diplomes/" + imgdd + ".png";
        var div = document.getElementById("x");
        document.getElementById('x').innerHTML="";
        div.appendChild(img);
      }
    });
  }
  </script>
</body>

</html>
