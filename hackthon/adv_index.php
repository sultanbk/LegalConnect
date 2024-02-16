<!DOCTYPE html>
<html>
    <>
        <title>Employee Website</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
        <!-- other tags -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
        <style>
            body::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                height: 150%;
                width: 100%;
                background-image: url('./images/login_bg.jpg');
                background-size: cover;
                opacity: 0.3;
                z-index: -1;

                h2{
                    color: rgb(0, 0, 0);
                
                }
            }
           
            
        </style>
    
    </head>
    <body>
        
        <div class="container-fluid main">
            <header>
                <nav class="navbar navbar-expand-lg custom-navbar fixed-top">
                    
                        <a class="navbar-brand logo" href="index.html">
                            <img src="images/logo.png" alt="Logo">
                        </a>
                        <!-- rest of the navbar content -->
                  
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.html">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.html">USER LOGIN</a></li>
                            <li class="nav-item"><a class="nav-link" href="aboutus.html">ABOUT</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <br>
            <br>
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/bg_img_1.jpg" class="d-block w-100 carousel-image zoom-out" alt="image1" style="height: 500px; width: 800px;">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/bg_img_2.jpg" class="d-block w-100 carousel-image zoom-out" alt="image2" style="height: 500px; width: 800px;">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/bg_img_3.jpg" class="d-block w-100 carousel-image zoom-out" alt="image3" style="height: 500px; width: 800px;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div><br><br><br><br><br><br>
            <div class="container py-5 rounded d-flex justify-content-center">
                <div class="col-md-6 text-center">
                    <i class="fas fa-route fa-3x mb-3"></i>
                    <h2>Available Case</h2>
                    <p>New available case.</p>
                    <a href="clients_cards.html" class="btn btn-secondary m-3 custom-btn2">AVAILABLE CASE</a>
                </div>
            </div>
                </div>
            </div>
        
        </body>
    </html>