<!DOCTYPE html>
<html>
<head>
    <title>Allebone.Me - Project Two - E-15:Dynamic Websites</title>
</head>

<body>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="./images/favicon.ico" rel="icon"><!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/jumbotron-narrow.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css">
    <link href=
    "http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
    rel="stylesheet" type="text/css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script> 
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <div class="container">
        <div class="header">
            <ul class="nav nav-pills pull-right">
                <li class="active">
                    <a href="#">Home</a>
                </li>


                <li>
                    <a href="#about">About</a>
                </li>


                <li>
                    <a href="#generator">Generator</a>
                </li>


                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>


            <h3 class="text-muted">P2: XKCD Password Generator</h3>
        </div>


        <div class="row marketing">
            <div class="col-lg-6" id="about">
                <h4>About</h4>


                <p>Donec id elit non mi porta gravida at eget metus. Maecenas
                faucibus mollis interdum.</p>


                <h4>Demo</h4>


                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at
                eros. Cras mattis consectetur purus sit amet fermentum.</p>
            </div>
        </div>

        <div class="jumbotron" id="generator">
            <h4>XKCD Password Generator</h4>

            <p>

            <div class="bs-example">
                <form>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control input-lg" placeholder="Click Generate to Create Password" type="text" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">                    
                                <h5>Number of Words: </h5><input class="form-control input-lg" placeholder="5">
                            </div>   
                            
                            <div class="col-md-6"> 
                             <h5>Special Character:</h5><select  class="form-control input-lg">
                             <option>None</option>
                             <option>!</option>
                             <option>@</option>
                             <option>#</option>
                             <option>$</option>
                             <option>%</option>
                             <option>^</option>
                             <option>&</option>
                             <option>*</option>
                             <option>+</option>
                             </select>    
                            </div>
                        </div>    

                        <div class="row">
                            <div class="col-md-6">
                                <h5>Case:</h5><select  class="form-control input-lg">
                                <option>lower</option>
                                <option>UPPER</option>
                                <option>CamelCase</option>                            
                                </select>
                            </div>

                            <div class="col-md-6">                            
                                <h5>Number?</h5><select  class="form-control input-lg">
                                <option>Yes</option>
                                <option>No</option>
                                </select>
                            </div> 
                        </div>               
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-lg btn-success" href="./logic.php">Generate</a>       
                            </div>
                        </div>    
                </form>
            </div>            
            <br>
            <p>
            </p>
        </div>

        <div class="container" id="contact">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4>Contact</h4>
                    <br>


                    <ul class="list-unstyled" id="contact">
                        <li><i class="fa fa-phone fa-fw"></i>(719)
                        235-8180</li>


                        <li>Omaha, Nebraska 68154</li>


                        <li>
                            <i class="fa fa-envelope-o fa-fw"></i><a href=
                            "mailto:bryanallebone@g.harvard.edu">bryanallebone@g.harvard.edu</a>
                        </li>
                    </ul>
                    <br>
	
                    <ul class="list-inline">
                        <li>
                            <a class="fa fa-facebook fa-fw fa-3x" href=
                            "https://www.facebook.com/allebone"></a>
                        </li>


                        <li>
                            <a class="fa fa-linkedin fa-fw fa-3x" href=
                            "http://www.linkedin.com/in/ballebone"></a>
                        </li>


                        <li>
                            <a class="fa fa-google-plus fa-fw fa-3x" href=
                            "https://plus.google.com/u/0/107028875158218439746/posts">
                            </a>
                        </li>


                        <li>
                            <a class="fa fa-pied-piper fa-fw fa-3x" href=
                            "http://www.piedpiper.com/#hello"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="footer" align="center">
            <p>&copy; BRYAN E. ALLEBONE 2014</p>
        </div>
        <!-- /container -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="./js/ie10-viewport-bug-workaround.js"></script> 
    </div>
</body>
</html>
