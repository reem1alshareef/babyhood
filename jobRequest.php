<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <title> jobRequest</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="events.js">
 
    </script>
</head>
<body class="background">

    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
          <b> <img src="../web-project/cloud.png" width="50" height="50">babyhood<b>
          
          <div class="w3-right w3-hide-small">
            <a href="../web-project/ParentHomePage.html" class="w3-bar-item w3-button">Home</a> 
            <a href="../web-project/veiwMyRequests.html" class="w3-bar-item w3-button">my request list</a>
            <a href="../web-project/viewOfferList.html" class="w3-bar-item w3-button">Offer list</a> 
            <a href="../web-project/bookingStatus.html" class="w3-bar-item w3-button">my bookings</a>
            
            <a href="../web-project/Pprofile.html" class="w3-bar-item w3-button"><img src="../web-project/user.png" width="50" height="50"></a>
            
        
          </div>
        </div>
      </div>
      <br><br><br><br>
    <div class="job-request-page">
   <h1 class="New-Job-Request">New Job Request </h1>
   <h4 class="New-Job-Request">Find your perfect babysitter right now! </h4>
   <form action="jobRequestDS.php" method="post">
       
        <p class="my-kids-in-jobRequest">
            <fieldset>
                <legend><strong> My kids:</strong></legend>
                
            <label>name/s: <br><span style="font-size:x-small;">-if you have more than one kid, separate them by a comma.- </span></label>
             <br>   
            <input name="names" type="text" size="50" required>
            <br>
                <label>age/s:<br><span style="font-size:x-small;">-If you have more than one kid, separate them by a comma and rank them respectively.- </span></label>
                <input name="ages" type="text" size="50" required>
              
            </p>
                
        </fieldset>
        
        </p>
        
        <p>
            <fieldset>
           <legend><strong> What do I expect of babysitter?:</strong></legend>

                <br>
            <label>
                <input name="service" type="checkbox" value="meals" checked>
                Preparing meals and snacks
            </label>
            <br>
            <label>
                <input name="service" type="checkbox" value="homework">
                Helping with homeworks
            </label>
            <br>
            <label>
                <input name="service" type="checkbox" value="diapers">
                Changing diapers
            </label>
            <br>
            <label>
                <input name="service" type="checkbox" value="boletts">
                Preparing and cleaning baby boletts
            </label>
            <br>
            <label>
                <input name="service" type="checkbox" value="Bathing">
                Bathing and dressing young children
            </label>
            <br>
            <label>
                <input name="service" type="checkbox" value="Bathing">
                Getting children to bed on time
            </label>
            <br>
            <label>
                <input name="service" type="checkbox" value="housework">
                Laundry and light housework
            </label>
            <br>
            <br>
            <label>other services:
                <input type="text" size="40" name="otherServices">
            </label>
            
            <br>
            <br>
            </p>
        </fieldset>
            <p>
                <fieldset>
                   <legend><strong> For how long: </strong></legend>
                
                
            </p>
            <p>
                
               
                <label>
                
                 <input type="date" size="6" name="date" required><br><br>
                 Start time:
                <input type="time" size="6" name="Stime" required>
                <br><br>
                End time:
                <input type="time" size="6" name="Etime" required>
               </label>
            </fieldset>
            </p>
            
            <p class="Send-and-Cancel-request-button">
                <input type="submit" value="send" class="Send-request-button"><a href="../web-project/parentHomePage.html"><input type="button" class="Cancel-request-button" value="Cancel"></a>
          
           

            </p>
            
    
           
            
    </form>


</div>

<footer class="footer"> 
    <br>
    <a href="https://www.facebook.com/" ><img src="../web-project/facebook.png" width="18" height="18"></a>
    <a href="https://twitter.com/"><img src="../web-project/twitter.png" width="18" height="18"></a>
    <a href="https://www.instagram.com/"><img src="../web-project/instagram.png"width="18" height="18"></a>
   
   <p> babyhood &copy; <a href="#" >www.babyhood.com</a></p>
  </footer>
  
</body>
</html>