<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Employee Registration Portal</title>
   <!-- <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">-->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://gist.github.com/hellt/bc4fc51d6f1b9584605517f5c8d6a5a0" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




  </head>

  <body>

    <div class="container">
      <h1>Login to your account</h1>

      <form action="" method="post"><br><br>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="user" type="email" class="form-control" name="user" placeholder="User Email">
    </div></br>

    <h4>Kindly take a snapshot to verify User</h4><br><br>
    <div id="camera"></div><br>
    <div class="text-left">
    <button id="take_snapshots" class="btn btn-success btn-sm">Take Snapshots</button>
            </div>

      <br>
      <input type="submit" name="login" class="btn btn-danger" value="Login"> &nbsp Or  &nbsp
      <input id="myButton" type="button" name="submit" class="btn btn-info" value="Sign up" onclick="location.href='index.php';">
      


    </form>
    </body>
</html>

<style>
#camera {
  width: 35%;
  height: 250px;
}

</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
<script>
    var options = {
      shutter_ogg_url: "jpeg_camera/shutter.ogg",
      shutter_mp3_url: "jpeg_camera/shutter.mp3",
      swf_url: "jpeg_camera/jpeg_camera.swf",
    };
    var camera = new JpegCamera("#camera", options);
  
  $('#take_snapshots').click(function(){
    var snapshot = camera.capture();
    snapshot.show();
    
    snapshot.upload({api_url: "action.php"}).done(function(response) {
$('#imagelist').prepend("<tr><td><img src='"+response+"' width='100px' height='100px'></td><td>"+response+"</td></tr>");
}).fail(function(response) {
  alert("Upload failed with status " + response);
});
})

function done(){
    $('#snapshots').html("uploaded");
}
</script>
