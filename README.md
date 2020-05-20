>> This is an employee registration portal with integrated webcam image capturing

>> Use webcam in PHP using HTML5, Jquery and Save the Image to Database

>>This repository will help you to integrate and save the captured image to the database or local folder.

>> webcamClass.php
Here are some code structure to understand the important parts of this class.
````
$imageFolder="your folder"; - This is your folder where you would like to save the file
````
````
showImage() - This function will get the image and return the name including the path
````
If you want to save the image to database than you can use this function.
````
changeImagetoBase64() - This function will change the image to base64 
````
````
saveImageToDatabase() -  It will help you to save the image to database
````

Documentation:

index.php:- here employee will signup and submit the form then it'll redirect to success.php

success.php:- form data submitted u'll get a link onclick you will be redirected to snapshot.php

snapshot.php:- here employee will take atleast 10 snapshots which will automatically saved to database and in a local folder named webcamimage

connectionclass.php:- there is a separate database table named snapshot which will store images so this is connection class for that table

action.php:- to show image at the same page we are taking snapshots

webcamclass.php:- it contains the logic for saving images to local folder and database

