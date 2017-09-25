

<!DOCTYPE html><!--$sql ??????????require when if to chat_sql.sql-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>iControlMYactivitieS</title><!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"><!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet"><!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--fa-fa-facebook-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="brand" id="top-page">
        <!--span><a class="brand" href="?" target="_blank"><img src="img/logo.png" alt="alt" /></a></span--><span><a href="#bottom-page" title="Contact Form">Mailing</a></span>
    </div><!--hr style="margin-top: 0px;"-->
    <h3 style="text-align: center; font-weight: bold; color: #fff; margin-top: 5px;"><strong>o</strong><a href="https://www.facebook.com/ID4W-309131922831787/"><i class="fa" style="font-size:24px; background: #fff;">&#xf082;</i></a></h3>
    <hr>
    <!--hr style="margin-top: -30px;"-->
   

    <!-- /.container -->
    <footer id="bottom-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="row">
                        <hr>
                        <h2 class="intro-text text-center">Mailer <strong>form</strong><a href="https://www.facebook.com/ID4W-309131922831787/"><i class="fa" style="font-size:24px">&#xf082;</i></a></h2>
                        <hr>
                        <p>Feel free to email to many people,  just say hello!</p>

                        <form role="form" method="post" action="chat_sent.php?action=<?=$_POST['submit']?>&id=<?=$_POST['id']?>">
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="subject">Subject</label> <input class="form-control"  id="subject" name="subject" type="text"   required />
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="emails">Email Addresses with ","</label> <input class="form-control" id="emails" name="emails" type="text"   required />
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-lg-12">

                                    <label for="message">Message</label> 
                                    <textarea class="form-control" rows="6" id="message" name="message" type="text"  required ></textarea>
                                </div>


                                    <input name="save" type="hidden" value="contact"> <button class="btn btn-default" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="brand">
                        <span><a href="#top-page" title="Top page">Let'sent with us</a></span>
                    </div>
<div class="container text-center" style="margin-top: -30px;" >
                    <p style="margin-top: 0px;">Copyright &copy; <a href="?">icontrolmy.tk</a> 2017</p>
</div>
                </div>
            </div>
        </div>
    </footer><!-- jQuery -->
    <script src="js/jquery.js">
    </script> <!-- Bootstrap Core JavaScript -->
     
    <script src="js/bootstrap.min.js">
    </script> <!-- Script to Activate the Carousel -->
     
  
</body>
</html>