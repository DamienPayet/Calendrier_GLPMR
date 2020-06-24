<form method="post" action="{{route('traitementstart')}}">
  @csrf
  <div class="form-example">
    <input type="submit" value="Lancer le traitement">
  </div>
</form>
