<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rating and Review</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="Rating.css">
  </head>
  <body class="background" >
  
  
<img class="user-photo" src = "../web-project/usericon.png"  width = "200" height="150" alt = "Babysitter profile picture">
  <h3 class="babysitter-name"> Sara Ibrahim </h3> 
  <h1 class="your-experince"> How was your experince ?</h1>
  
  <form method="post" action="RatingDB.php">
    <div class="center">
      <div class="stars">
        <input type="radio" id="five" name="rate" value="5">
        <label for="five"></label>
        <input type="radio" id="four" name="rate" value="4">
        <label for="four"></label>
        <input type="radio" id="three" name="rate" value="3">
        <label for="three"></label>
        <input type="radio" id="two" name="rate" value="2">
        <label for="two"></label>
        <input type="radio" id="one" name="rate" value="1">
        <label for="one"></label>
        <span class="result"></span>
      </div>
   </div>
   <h1 class="review-label"> Review:</h1>
   <div>
   <p class="review-box"> <label ><br>
   <textarea name="Review" rows = "7" cols= "67"> "Enter your Review here!." </textarea> </label> </p>
</form>
  

<a href="Thank.html">
  <input type="button" value="submit" class="details-button">
</a>


   </div>
  </body>
  


</html>