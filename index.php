<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      
      <title>Privacy Policy Generator</title>
   </head>
   <body>
   <?php 
      // This is Navbar.
    ?>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
         <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">Privacy Policy Generator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Contact Us</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container py-5">
         <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              
       <?php
      
       // Checking the the values submitted or not
               
       if(isset($_POST['submit'])){
          // getting the values and securing the values
       $siteName = strip_tags(htmlspecialchars($_POST['sitename']));
       $siteEmail = strip_tags(htmlspecialchars($_POST['emailaddress']));
       $siteurl = strip_tags(htmlspecialchars($_POST['siteurl']));
       $fullname = strip_tags(htmlspecialchars($_POST['fullname']));
       //when data is get then include policy.php and showing the privacy policy in textarea
          include 'policy.php';
       }else{
          //if submit is not isset then asking to submit the form
       ?>
               <form action="/" method="post" accept-charset="utf-8">
                  <div class="form-group">
                     <label for="sitename" class="h3" >Site Name</label>
                     <input type="text" name="sitename" value="" class="form-control" id="sitename" required/>
                  </div>
                  <div class="form-group">
                     <label for="siteurl" class="h3" >Site Url</label>
                     <input type="website" name="siteurl" value="" class="form-control" id="siteurl" required/>
                  </div>
                  <div class="form-group">
                     <label for="fullname" class="h3" >Name</label>
                     <input type="text" name="fullname" value="" class="form-control" id="fullname" required/>
                  </div>
                  <div class="form-group">
                     <label for="emailaddress" class="h3" >Email Address</label>
                     <input type="email" name="emailaddress" value="" class="form-control" id="emailaddress" required/>
                  </div>
               <input type="submit" name="submit" value="Generate Privacy Policy" class="btn btn-primary my-3" required/>
               </form>
               
               <?php } ?>
             
            </div>
         </div>
      </div>
      
      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
         -->
         
         <script>
            // javascript code to copy privacy page
function copy() {
  var copyText = document.getElementById("copy");
 var sho = document.getElementById("sho");
  copyText.select();
 document.execCommand("copy");
   //alert to tell copied the data
  alert("Copied your Privacy Policy");
}
</script>
         
   </body>
</html>

