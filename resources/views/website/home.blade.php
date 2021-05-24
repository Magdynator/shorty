@extends('website.template.master')
@section('content')
<div class="shorten">
  <h2>Shorten your <span>link</span></h2><br>
  <form action="surl" method="Post">
      @csrf
      <input class="border" type="text" name="url" required="" placeholder="Url"><br><br>
      <a class="surl" href="{{ $url ?? '' }}">{{ $url ?? '' }}</a><br><br>
      <button id="short-button"class="btn btn-primary" type="submit">Short</button>
      </form>
</div>
@endsection()
