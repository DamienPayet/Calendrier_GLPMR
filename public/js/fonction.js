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
