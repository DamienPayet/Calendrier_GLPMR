
(function val() {
  f = document.getElementById("formation").value;
  d = document.getElementById("date").value;
  imgdd = f + d;
  var img = document.createElement("img");
  img.src = "http://edt.glpmr.info/diplomes/" + imgdd + ".png";
  img.className = "calendar";
  var div = document.getElementById("x");
  document.getElementById('x').innerHTML="";
  div.appendChild(img);
  var a = document.getElementById('linkimg');
  a.href = "http://edt.glpmr.info/diplomes/" + imgdd + ".png";
}

document.addEventListener('DOMContentLoaded', function() {
  lecturecookie();
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
      img.className = "calendar";
      var div = document.getElementById("x");
      document.getElementById('x').innerHTML="";
      div.appendChild(img);
      var a = document.getElementById('linkimg');
      a.href = "http://edt.glpmr.info/diplomes/" + imgdd + ".png";
    }
  });
}
// SAuvegarde dans les cookie la formation regarder pour ne pas avoir a la saisir !
function creationcookie(){
  var  fv = document.getElementById("formation").value;
  var selectElmt = document.getElementById("formation");
  var ft = selectElmt.options[selectElmt.selectedIndex].text;
  let date = new Date(Date.now() + 86400000); //86400000ms = 1 jour
  date = date.toUTCString();
  document.cookie = 'formationv='+ fv +'; expires=' + date;
  document.cookie = 'formationt='+ft+'; expires=' + date;
}

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
    var x = document.getElementById("formation");
    var option = document.createElement("option");
    option.text = t;
    option.value =  v;
    option.selected = true ;
    x.remove(option);
    x.add(option);
  }
});
