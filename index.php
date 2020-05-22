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
      <h1>Employee Registration Portal</h1>

      <form action="success.php" method="post">
   <!-- <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname">
    </div>

    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname"> ///add some magiccccccccccc XD
    </div>

    <div class="form-group">
      <label for="phone">Phone_no. :</label>
      <input type="text" class="form-control" id="phone">
    </div></br>-->
    <div class="input-group">
    <span class="input-group-addon">First Name:</span>
    <input id="fname" type="text" class="form-control" name="fname" >
  </div></br>

    <div class="input-group">
      <span class="input-group-addon">Last Name:</span>
      <input id="lname" type="text" class="form-control" name="lname" >
    </div></br>

  <div class="input-group">
      <span class="input-group-addon">Phone no.:</span>
      <input id="phone" type="text" class="form-control" name="phone" >
    </div></br>

    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="email" class="form-control" name="email" placeholder="Email">
    </div></br>




    <div class="radio">
      <label><b>Gender:</b></label></br>
      <label><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male" checked>Male</label>
    </div>
    <div class="radio disabled">
      <label><input type="radio" name="gender" disabled>Trans</label>
    </div></br>

    <div class="radio">
      <label><b>Marital Status:</b></label></br>
      <label><input type="radio" name="status" <?php if (isset($status) && $status=="married") echo "checked";?> value="married" checked>Married</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="status" <?php if (isset($status) && $status=="unmarried") echo "checked";?> value="unmarried">Unmarried</label>
    </div></br>

    <div class="form-group">
  <label for="sel1">Job Profile:</label>
  <select class="form-control" id="sel1" name="job">
    <option value="Human Resource">Human Resource</option>
    <option value="Developer">Developer</option>
    <option value="Tester">Tester</option>
    <option value="Marketing">Marketing</option>
  </select>
</div></br></br>

  <div class="input-group">
    <span class="input-group-addon">Residential Address:</span>
    <input id="msg" type="text" class="form-control" name="address" placeholder="Block No.,Street,Landmark,City,State,PinCode...">
  </div></br></br>

  <div class="input-group">
    <span class="input-group-addon">Employee ID</span>
    <input id="eid" type="text" class="form-control" name="eid" value="<?php echo uniqid();?>" placeholder="like: 5ea16039f15da ">
  </div>
   </br></br></br></br>

   <input type="submit" name="submit" class="btn btn-info" value="Proceed Next">
   <input type="reset" name="reset" class="btn btn-danger" value="Reset">

    </form>
    </body>
</html>

