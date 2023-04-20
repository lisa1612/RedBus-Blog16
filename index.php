<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED-BLOGGERS </title>
    <link rel="icon" href="favicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="index.css">
  
</head>


<body>
  
    <header>
        <div style=" padding:10px">
            <ul style="display: flex;list-style-type: none ;margin-bottom: 0px;justify-content: space-between; align-items:center">

            <img src="logo.png" alt="eyxz" class="" style="height:60px;width:60px;border-radius:100%" >
            
            <div style="display:flex;align-items:center">
            <a href="image.php" style="margin-right:10px; padding:0; ">
            <button type="button" onclick="href='image.php'" class="btn" >Create New Blog</button>
            </a>
            <a href="image.php" style="margin-right:10px; padding:0; ">
            <button type="button" onclick="href='image.php'" class="btn" >Create New Blog</button>
            </a>
            
            </div>
            </ul>
        </div>
        
<!-- // if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
//   $loggedin= true;
// }
// else{
//   $loggedin = false;
// } -->

        <nav style="background-color: #FFECEF;" class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#">Navbar</a> -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="" id="navbarNav">
                <ul class=" " style="display:flex;">
                  <li class="">
                    <a class="nav-link " target="" href="INDEX.php" style="color:navy">Home</a>
                  </li>
                  <li class="">
                    <a class="nav-link" target=""href="cars.html" style="color:navy">History</a>
                  </li>
                  <li class="">
                    <a class="nav-link" target="" href="BIKE.html" style="color:navy">Technology</a>
                  </li>
                  <li class="">
                    <a class="nav-link" target="" href="homeaccessories.html" style="color:navy">Sports</a>
                  </li>
                  <li class="">
                    <a class="nav-link" target="" href="mobiles.html" style="color:navy">Entertainment</a>
                  </li>
                  
                </ul>
            
              </div>
            </div>
          </nav>
        
    </header>
    <!-- <h2>WELCOME></h2> -->
    <div class="" style="margin:50px 80px">
    <h2 class="car_heading" style="margin-left:12px;margin-bottom:20px">Fresh Recommandations</h2> 
   <div class="parent_main_div">
    <!-- <div class="vertical" >
        <span>Filters</span>
        <p><b>BRAND</b></p>
       
        <form action="">
          <style>
            .size{
              width:25px;
              height:25px;

            }
          </style>
          <input type="checkbox" class="size"> &nbsp; Yamaha <br>
          <input type="checkbox"class="size" >  &nbsp; honda<br>
          <input type="checkbox"class="size">&nbsp; pulsers<br>
          <input type="checkbox"class="size">&nbsp; splender<br>
          <input type="checkbox"class="size">&nbsp; royal enfield  <br>   
        </form>
        <hr>

     
        <p><b>KM DRIVEN</b></p>
        <form action="">
        
          <input type="checkbox"class="size">&nbsp; 10000<br>
          <input type="checkbox"class="size">&nbsp; 20000<br>
          <input type="checkbox"class="size">&nbsp; 30000<br>
          <input type="checkbox"class="size">&nbsp; 40000<br>
          <input type="checkbox"class="size">&nbsp; 50000<br>   
        </form>

      </div> -->
              
      
     
      
    <div class="middle_section">
      <div class="container">
        <div class="row  row-cols-lg-3">
        <div class="col card-b-pad">
            <div class="card card_section" style="width: 18rem; display:flex;flex-direction:column;justify-content:center;align-items:center">
              <img class="card-img-top card-img" src="download-modified.png" alt="Card image cap" style="margin-top:30px">
              <div class="card-body" style="display:flex;justify-content:center;align-items:center;flex-direction:column">
                <h5 class="card-title">Aman Kumar</h5>
                <p class="card-text"></p>
                <form action="sports.php" method="post">
                  <button type="submit" class="btn btn-navy" style="background-color: navy;padding: 10px 60px;border: none;color: white;" name="sport" value="1">Read More</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card_section" style="width: 18rem; display:flex;flex-direction:column;justify-content:center;align-items:center">
              <img class="card-img-top card-img" src="images (1)-modified.png" alt="Card image cap" style="margin-top:30px">
              <div class="card-body" style="display:flex;justify-content:center;align-items:center;flex-direction:column">
                <h5 class="card-title">elleana disouza</h5>
                <p class="card-text"></p>
                <form action="tech.php" method="post">
                  <button type="submit" class="btn btn-navy" style="background-color: navy;padding: 10px 60px;border: none;color: white;" name="tech" value="1">Read More</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card_section" style="width: 18rem; display:flex;flex-direction:column;justify-content:center;align-items:center">
              <img class="card-img-top card-img" src="images (2)-modified.png" alt="Card image cap" style="margin-top:30px">
              <div class="card-body" style="display:flex;justify-content:center;align-items:center;flex-direction:column">
                <h5 class="card-title">suhana kumari</h5>
                <p class="card-text"></p>
                <form action="hist.php" method="post">
                  <button type="submit" class="btn btn-navy" style="background-color: navy;padding: 10px 60px;border: none;color: white;" name="hist" value="1">Read More</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card_section" style="width: 18rem; display:flex;flex-direction:column;justify-content:center;align-items:center">
              <img class="card-img-top card-img" src="images (4)-modified.png" alt="Card image cap" style="margin-top:30px">
              <div class="card-body" style="display:flex;justify-content:center;align-items:center;flex-direction:column">
                <h5 class="card-title">katy smith</h5>
                <p class="card-text"></p>
                <form action="sports.php" method="post">
                  <button type="submit" class="btn btn-navy" style="background-color: navy;padding: 10px 60px;border: none;color: white;" name="sport" value="1">Read More</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card_section" style="width: 18rem; display:flex;flex-direction:column;justify-content:center;align-items:center">
              <img class="card-img-top card-img" src="images-modified.png" alt="Card image cap" style="margin-top:30px">
              <div class="card-body" style="display:flex;justify-content:center;align-items:center;flex-direction:column">
                <h5 class="card-title">katy perry</h5>
                <p class="card-text"></p>
                <form action="tech.php" method="post">
                  <button type="submit" class="btn btn-navy" style="background-color: navy;padding: 10px 60px;border: none;color: white;" name="tech" value="2">Read More</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card_section" style="width: 18rem; display:flex;flex-direction:column;justify-content:center;align-items:center">
              <img class="card-img-top card-img" src="profile1-modified.png" alt="Card image cap" style="margin-top:30px">
              <div class="card-body" style="display:flex;justify-content:center;align-items:center;flex-direction:column">
                <h5 class="card-title">Ardiana </h5>
                <p class="card-text"></p>
                <form action="hist.php" method="post">
                  <button type="submit" class="btn btn-navy" style="background-color: navy;padding: 10px 60px;border: none;color: white;" name="hist" value="1">Read More</button>
                </form>
              </div>
            </div>
          </div>

            </div>
        </div>
      </div>
      
      
     
    </div>
   </div>
    </div>
    
    
    <div class="" style="display:flex;justify-content:space-around;background-color:#454545;color:white;padding:50px">
      <div>
        <h4>Trending locations</h4>
        <p>kolkata</p>
        <p>Punjab</p>
        <p>Karnataka</p>
        <p>Delhi</p>
      </div>
      <div>
        <h4>Popular locations</h4>
        <p>Karnataka</p>
        <p>Punjab</p>
        <p>Gujrat</p>
        <p>Mumbai</p>
      </div>
      <div>
        <h4>About Us</h4>
        <p> <a href="" style="text-decoration: none;">Contact No</a></p>
        <p><a href="" style="text-decoration: none; ">EYX People</a></p>
      </div>
      <div>
        <h4>Follow us on</h4>
        <p><a href="" class="fa-brands fa-twitter" style="text-decoration: none; color: white;">  </a> </p>
        <p> <a href=""><i class="fa-brands fa-instagram" style="color: white;"> </i></a></p>
        <p> <a href=""><i class="fa-brands fa-facebook">   </i></a></p>
      </div>
    </div>
    
</body>
</html>