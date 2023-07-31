<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <style>
            
            .c-item{
                height:500px; 
            } 
            .c-img{
                height: 100%; 
                object-fit:cover; 
                filter:brightness(0.7);
            }  .input-group {
            padding: 10px;
        }

        .input-group {
            padding: 10px;
        }

        .btn {
            margin: 0px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .modal-footer {
            background-color: #f4f4f4;
            justify-content: center;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .flex-wrap {
            border-radius: 5px;
            border: 2px solid rgb(150, 25, 25);
        }
    </style>

</head>

<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">AK-innovations</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item me-md-2">
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Sign up
                              </button>
                        </li>
                        <li class="nav-item me-md-2">
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#login-modal">
                                Login
                              </button>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>  
    </div>
        <?php  
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['full_name'];  
    $phone=$_POST['phone']; 
    $email=$_POST['email']; 
    $pass=$_POST['pass'];   
    $gender=$_POST['gender']; 
    //connecting to the data base
    $servername="127.0.0.1"; 
   $username="root"; 
   $password=""; 
   $database="test";  
   //creating a connection
    $conn=mysqli_connect($servername,$username,$password,$database);  
if(!$conn)
{
   echo "Connection failed: ".mysqli_connect_eror(); 
} 
else{
    $sql="INSERT INTO `register` ( `name`, `number`, `email`, `pass`, `gender`) VALUES ('$name', '$phone', '$email', '$pass', '$gender')";
    $result=mysqli_query($conn,$sql); 
    if($result)
    {
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations!!!</strong>Regestration successfull 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    } 
    else{
       echo "the data not submitted: ".mysqli_error($conn); 
    }
} 
} 
?>  
        <!--know more Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">note!!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Please register to AK innovations to avail all our services-team AK
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
   <!-- call us Modal -->
   <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Reach us</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <i class="fa-solid fa-phone"></i> 
              +91
            </div> 
            <div class="modal-body">
              <i class="fa-brands fa-instagram "></i>
              instagram
            </div> 
            <div class="modal-body">
              <i class="fa-brands fa-twitter "></i> 
              twitter
            </div>
              <div class="modal-body">
                  <i class="fa-solid fa-location-dot"></i>
              Location
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
     <div id="carouselExample" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> 
        <div class="carousel-inner">
          <div class="carousel-item active c-item">
            <img src="https://images.businessnewsdaily.com/app/uploads/2022/04/04074130/teamwork_g-stockstudio_getty.jpg" class="d-block w-100 c-img" alt="..."> 
            <div class="carousel-caption top-0 mt-4 ">
           
              <p class="display-1 fw-bolder text-capitalize">"come,Let's be a part of ak innovations"</p> 
             <!-- Button trigger modal -->
<button type="button" class="btn btn-light px-4 py-2 fs-5 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Know more
</button>
            </div>
          </div>
          <div class="carousel-item c-item">
            <img src="https://purisconsulting.com/wp-content/uploads/2019/01/Company-Branding_team-work.png
" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption top-0 mt-4 ">
              <p class="display-1 fw-bolder text-capitalize">"contact us for more info"</p>  
            <!-- call us Button trigger modal -->
<button type="button" class="btn btn-light px-4 py-2 fs-5 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  Call us
</button>
            </div>
          </div>
          <div class="carousel-item c-item">
            <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_881484382_373818.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption top-0 mt-4 ">
              <p class="display-1 fw-bolder text-capitalize"></p>  
              <h1 class="mt-5 fs-3 text-uppercase"></h1>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>   
     <div class=" text-center border-bottom mt-4">
    <h1 class="display-4 fw-bold text-body-emphasis">What actually ak-innovations?</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Learn more</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="https://img.freepik.com/premium-vector/businesspeople-team-coworking-teamwork-cooperation-collective-work-partnership-concept-office-people-work-together-setting-up-huge-colorful-separated-puzzle-pieces-cartoon-vector-illustration_87771-20107.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="400" loading="lazy">
      </div>
    </div>
  </div>
   <!-- sign up Modal -->  
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Register to AK-innovations</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="signup-form" class="form" role="form" method="post" action="ak_invo.php">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="pass" placeholder="Password" minlength="6" required>
                </div>

               

                <div class="form-group">
                    <span>I'm a</span>
                    <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                    <label for="gender-male">
                    </label>
                    <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                    <label for="gender-female">
                        Female
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                </div>
            </form>
        </div> 
    </div>
        </div>
      </div>
    </div>
  </div>
 <!--feedback  Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-comment"></i>drop your feedback</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3">
  <div class="col-12">
    <label for="validationServer01" class="form-label">Email</label>
    <input type="text" class="form-control is-valid" id="validationServer01"  required placeholder="enter valid email">
  </div>
  <div class="col-12">
  <div class="col-12">
            <label for="message-text" class="col-form-label">your feedback:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary d-flex justify-content-center" type="submit">Submit your feedback</button>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
   <!-- login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="login-form" class="form" role="form">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
    <footer class="py-3 my-4 ">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted " data-bs-toggle="modal" data-bs-target="#exampleModal2">Contact us</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@mdo" >feedback</a></li>
        </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>


</body>

</html> 
