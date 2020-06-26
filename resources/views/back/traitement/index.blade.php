<h1>Lancer traitement images</h1>
<form method="post" action="{{route('traitementstart')}}">
  @csrf
  <div class="form-example">
    <input type="submit" value="Lancer le traitement">
  </div>
</form>
<h1>Générer seeder BDD</h1>
<form method="post" action="{{route('traitementseeder')}}"  enctype="multipart/form-data" >
  @csrf
  <div class="form-example">
    <input type="file" id="file" name="file">
    <input type="text" id="txt" name="txt">
    <input type="submit" value="Lancer le traitement">
  </div>
</form>
