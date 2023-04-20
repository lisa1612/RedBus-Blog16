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
  
</head>


<body>
  
    <header>
        <div>
            <ul style="display: flex;list-style-type: none ;margin-bottom: 0px;">

            <img src="brand.jpg" alt="eyx" class="" >
            <table>
           <tr> <td><li style="padding-top: 0px;"><input type="search" class="searching_box" placeholder="What do you want?" style="width:90% ; margin-left :280px;padding-left:20px ;" name="ssearch"></td>
           <td style="padding-top: 50px;">  <input type="submit" class="" style="margin-left:240px;width:100px;height:50px" value="search"></button></li></td>
             
            </tr>
            </table>
            </form>
            <a href="login.html" style="margin:0; padding:0;">
            <button type="button" onclick="href='login.html'" class="btn btn-primary btn-lg login_button" >LOGIN</button>
            </a>
            <a href="signup.html">
            <button type="button" onclick="href='signup.html'" class="btn btn-secondary btn-sm signup_button">NEW USER</button>
            </a>
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
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                  <li class="nav-item top">
                    <a class="nav-link " target="" href="INDEX.php">Home</a>
                  </li>
                  <li class="nav-item top">
                    <a class="nav-link" target=""href="cars.html">History</a>
                  </li>
                  <li class="nav-item top">
                    <a class="nav-link" target="" href="BIKE.html">Technology</a>
                  </li>
                  <li class="nav-item top">
                    <a class="nav-link" target="" href="homeaccessories.html">Sports</a>
                  </li>
                  <li class="nav-item top">
                    <a class="nav-link" target="" href="mobiles.html">Entertainment</a>
                  </li>
                  
                </ul>
            
              </div>
            </div>
          </nav>
        
    </header>
    <!-- <h2>WELCOME></h2> -->
    <h2 class="car_heading">Fresh Recommandations</h2> 
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
          <div class="col">
            <div class="card card_section" style="width: 18rem;">
              <img class="card-img-top" src="project image/car/car15.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">2,00,000 RS</h5>
                <details>
                  <ul>
                  <li>28L full tank capacity</li>
                  <li>200000 KM DRIVEN</li>
                  <li>2010 MODEL mahindra BOLERO</li>
                  </ul>
                </details>
                <a href="login.html" class="btn btn-primary">BUY</a>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="card card_section" style="width: 18rem;">
              <img class="card-img-top" src="project image/bike/bike10.jpeg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">45000 RS</h5>
                <p class="card-text"></p>
                <DETAILS>
                  <ul>
                  <li>APACHE RTR 200</li><br>
                  <li>197.5 CC</li><br>
                  <li>30000KM DRIVEN</li><br>
                  </ul>

              
                </DETAILS>
                <a href="login.html" class="btn btn-primary">BUY</a>
              </div>
            </div>
          </div>
            <div class="col">
              <div class="card card_section" style="width: 18rem;">
                <img class="card-img-top" src="project image/bedroom.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-t">20000RS</h5>
                  <p class="card-text"></p>
                  <DETAILS>
                    <Ul>
                    <li>2 BEDS</li><br>
                    <li>2 MONTHS USED</li><br>
                    <li>SLEEPY COMPANY</li><br>
                    </Ul>
                  </DETAILS>
                  
                  <a href="login.html" class="btn btn-primary">BUY</a>
                </div>
              </div>

            </div>
            <div class="col">
              <div class="card card_section" style="width: 18rem;">
                <img class="card-img-top" src="project image/elctronic/e4.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">10000RS</h5>
                  <p class="card-text"></p>
                  <DETAILS>
                    <ul>
                    <li>AIR CONDITIONER</li><br>
                    <li>10 MONTHS USED</li><br>
                    <li>LG COMPANY</li><br>
                    </ul>
                    </details>
                  <a href="login.html" class="btn btn-primary">BUY</a>
                </div>
              </div>

            </div>
            <div class="col">
              <div class="card card_section" style="width: 18rem;">
                <img class="card-img-top" src="project image/elctronic/mobile2.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">50000RS</h5>
                  <p class="card-text"></p>
                  <DETAILS>
                    <ul>
                    <li>I PHONE PLUS CHARGER </li><br>
                    <li>5 MONTHS USED</li><br>
                    <li>IPHONE COMPANY</li><br>
                    </ul>
                    </details>
                  <a href="login.html" class="btn btn-primary">BUY</a>
                </div>
              </div>

            </div>
            <div class="col">
              <div class="card card_section" style="width: 18rem;">
                <img class="card-img-top" src="project image/furniture/furniture6.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">30000RS</h5>
                  <p class="card-text"></p>
                  <DETAILS>
                    <ul>
                    <li>SOFA</li><br>
                    <li>4 MONTHS USED</li> <br>
                    <li>SOFA COMPANY</li><br>
                    
                    </ul>
                    </details>
                  <a href="login.html" class="btn btn-primary">BUY</a>
                </div>
              </div>

            </div>
        </div>
      </div>
      
      
     
    </div>
   </div>
    
   <i class="fa-brands fa-twitter"></i>
    
    <footer class="footer">
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
        <p> <a href="" style="text-decoration: none;  color: black;">Contact No</a></p>
        <p><a href="" style="text-decoration: none;  color: black; ">EYX People</a></p>
      </div>
      <div>
        <h4>Follow us on</h4>
        <p><a href="" class="fa-brands fa-twitter" style="text-decoration: none; color: black;">  </a> </p>
        <p> <a href=""><i class="fa-brands fa-instagram" style="color: purple;"> </i></a></p>
        <p> <a href=""><i class="fa-brands fa-facebook">   </i></a></p>
      </div>
    </footer>
    
</body>
</html>