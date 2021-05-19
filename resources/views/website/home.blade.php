@extends('website.template.master')
@section('content')
<div class="shorten">
  <h2>Shorten your <span>link</span></h2><br>
  <form>
      <input class="border" type="text" name="" required="" placeholder="Url"><br><br>
      <a class="surl" href="#"></a><br><br>
      <button id="short-button"class="btn btn-primary" type="submit">Short</button>
      </form>
</div>
@endsection()
