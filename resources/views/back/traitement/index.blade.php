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
    <div>
      <input type="file" id="file" name="file">
    </div>
    <div>
      <input type="submit" value="Lancer le traitement">
    </div>
  </div>
</form>
@if (isset($ok))
  <a href="/download" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Seeder.txt </a>
@endif
@if (isset($error))
  <h1 style="color : red;">{{$error}}</h1>
@endif
