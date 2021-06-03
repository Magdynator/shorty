<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ asset('website/css/ShortenStyle.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Shorty</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
  </div>
</nav>
@yield('content')

<hr>
<div class="wrapper">
</div>

<footer>
<script>
$(document).ready(function(){
  var _originalSize = $(window).width() + $(window).height()
  $(window).resize(function(){
    if($(window).width() + $(window).height() != _originalSize){
      console.log("keyboard show up");
      $(".copyright_link").css("position","relative");  
    }else{
      console.log("keyboard closed");
      $(".copyright_link").css("position","fixed");  
    }
  });
});
</script>


  <p>made by: Magdy Edwar</p>
</footer>

</body>
</html>
