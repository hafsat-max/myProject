
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1">
    <title>The website</title>
    <!-- your embed code -->
    <!-- <script src="https://use.fontawesome.com/your-embed-code.js"></script> -->
    <!-- TODO: Place your Font Awesome embed code  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet " href="css/style.css">
    <link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

    <!----Start home section-->
    <div id="home">
        <!------Start Navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">
                <img  class="backround-img" src="img/IMG-20210627-WA0004.jpg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#course">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resources">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#clients">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-----End Navigaton-->

        <!---Start Landing page -->
        <div class="landing">
            <div class="home-wrap">
                <div class="home-inner">
                    <img src="img/IMG-20210627-WA0004.jpg" alt="" style="width:100%">
                </div>
            </div>
        </div>
        <div class="caption text-center">
            <h1> Welcome to Fizz Studios</h1>
            <h3> A Haven from home</h3>
            <a class="btn btn-outline-light btn-lg" href="#course">Get Started</a>
        </div>
        <!---End landing page-->
    </div>
    <!---End home section-->

   

    <!----Start Forms section-->
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
    </div>
    <!---End Forms section-->



    <!----Start contacts section-->
    <div id="contact" class="offset ">
        <footer>
            <div class="row justify-content-center">
                <div class="col-md-5 text-center">
                    <img src="img/IMG-20210627-WA0004.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque iste quos nobis sequi vitae.</p>
                    <strong>Contact Info</strong>
                    <p>+234-7014592427
                        <br>hafsahbusari69@gmail.com</p>
                    <a href="" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="" target="_blank"><i class="fab fa-twitter-square"></i></a>
                    <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <hr class="socket"> &copy;Fizz Studioz
            </div>
        </footer>
    </div>
    <!---End Contacts section-->


</body>

<!------Script source files-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>

</html>