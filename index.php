<?php
 $NameError=" ";
 $EmailError=" ";

if(isset($_POST['submit'])){
    if(empty($_POST["Name"])){
        $NameError= "Name is required";
        $newError= "A";
    }
    else{
        $Name= Test_User_Input($POST["Name"]);
    }

    if(empty($_POST["Email"])){
        $EmailError= "Email is required";
    }
    else{
        $Email= Test_User_Input($POST["Email"]);

    }
    if(!empty($_POST["Name"]) && !empty($_POST["Email"])){
        
    } 
   
}
function Test_User_Input($Data){
    return $Data;
}
?>


  
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
                    <img   src="img/IMG-20210627-WA0004.jpg" alt="" style="width:100%">
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

    <!----Start course section-->
    <div id="course" class="offset">
        <div class="col-12 narrow text-center">
                <h1>Take a course on Graphics Design</h1>
                <p class="lead">Learn Graphic Design by creating a proffesional and creative logo.</p>
                <a class="btn btn-secondary btn-md" href="#" target="_blank">Logo Design</a>
            </div>  
   
    </div>
    <!---End course section-->

    <!----Start Features section-->
    <div id="features" class="offset">

        <!-- Start jumbotron -->
        <div class="jumbotron ">
            <div class="narrow text-center ">
                <div class="col-12">
                    <h3 class="heading">Features</h3>
                    <div class="heading-underline"></div>
                </div>

                <!-- start row -->
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="feature">
                            <!-- <i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-3 up-5"></i> -->
                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                            <h3>Lorem, ipsum.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, iste?</p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="fas fa-sliders-h fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
                            <h3>Lorem, ipsum.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, iste?</p>
                        </div>


                    </div>
                    <div class="col-md-4">
                        <div class="feature">
                            <i class="fas fa-wpforms fa-4x" data-fa-transform="shrink-4. up-5"></i>
                            <h3>Lorem, ipsum.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, iste?</p>
                        </div>

                    </div>
                </div>
                <!-- end row -->

            </div>
        </div>
        <!-- End jumbotron -->

    </div>
    <!---End Features section-->

    <!----Start Resources section-->
    <div id="resources" class="offset">
        <!-- Begin fixed background -->
        <div class="fixed-background">
            <div class="row dark  text-center">
                <div class="col-12">
                    <h3 class="heading">Build with care</h3>
                    <div class="heading-underline"></div>
                    <button >sign up</button>
                </div>

                <div class="col-md-4">
                    <h3>Logo Designs</h3>
                    <div class="feature">
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-4">
                    <h3>Logo Designs</h3>
                    <div class="feature">
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-4">
                    <h3>Logo Designs</h3>
                    <div class="feature">
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>

            </div>
            <!-- End dark row -->

            <div class="fixed-wrap">
                <div class="fixed-inner">
                </div>
            </div>
        </div>
        <!-- End fixed background -->

    </div>
    <!---End Resources section-->

    <!----Start Clients section-->
    <div id="clients" class="offset">
        <!-- Start  jumbotron -->
        <div class="jumbotron">
            <div class="col-12">
                <h3 class="heading">clients</h3>
                <div class="heading-underline"></div>
            </div>
            <div class="row">
                <div class="col-md-6 clients">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/client1.png" alt="">
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <i class="fas fa-quote-left"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias nobis nisi mollitia aliquam repellat aut, commodi dolor inventore hic
                                <hr class="clients-hr">
                                <cite>$#8212; Lorem, ipsum.</cite>
                            </blockquote>
                        </div>
                    </div>                                                
                </div>
                <div class="col-md-6 clients">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/client2.png" alt="">
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <i class="fas fa-quote-left"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias nobis nisi mollitia aliquam repellat aut, commodi dolor inventore hic
                                <hr class="clients-hr">
                                <cite>$#8212; Lorem, ipsum.</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end jumbotron -->
            <div class="col-12 narrow text-center">
                <p class="lead">Lorem ipsum dolor sit amet consectetur.
                </p>
                <a class="btn btn-secondary btn-md"  data-toggle="collapse" href="#collapseExample"role="button" aria-expanded="false" aria-controls="collapseExample">Sign Up</a>
                <div class="collapse" id="collapseExample">


                    <!-- Begining of sign up form -->
                <form action="index.php" method="post"> 
                <div class="form-group">
                    Name:<br> <input type="name " name="Name" class="form-control inputField" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name">
                    <?php echo $NameError ?>
                    </div>
                    <div class="form-group">
                    Email: <br> <input type="email" class="form-control inputField" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><?php echo $EmailError; ?>
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                    Password: <br>
                        <input type="password" class="form-control inputField" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" onclick="signUpScroll()">Submit</button>
                   
                </form> 
                <!-- End of sign up form   windows.scroll-->
                </div>
            </div>
    </div>
    <!---End Clients section-->

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

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<script>
function signUpScroll() {
  window.scroll(0, 2000 );
}
window.onload= signUpScroll;

</script>

</html>