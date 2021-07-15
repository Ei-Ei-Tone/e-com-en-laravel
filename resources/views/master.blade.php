<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Website 1</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<!-- <script>
    $(document).ready(function() {
        $("button").click(function() {
            alert("All Set")
        })
    })
</script> -->
<style>
  .cutom-login {
    height: 500px;
    padding-top: 100px;
  }

  .img.slider-img {
      height: 400px !important
  }

  .custom-product {
      height: 600px;
  }
  
  .carousel-caption {
    background-color: #35443585 !important;
  }

  .trending-image {
      height:100px;
  }

  .trending-item {
      float:left;
      width: 20%;
  }

  .trending-wrapper {
      margin:30px;
  }

  .detail-img {
      height:200px;
  }
</style>
</html>