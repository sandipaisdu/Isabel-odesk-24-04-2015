<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!-->

<html class="no-js">

<!--<![endif]-->

<head>
   
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    
    
    
    
    
    <title>Your Title</title>
    
    <meta name="description" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/normalize.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="js/jquery.js"></script>
    
    
    
   
    
    <script>
        
        function myFunction() {
            var name = document.getElementById("name").value;

            var email = document.getElementById("email").value;

            var msg = document.getElementById("msg").value;

            // Check Email
            var emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;



            if (name == '' && email == '' && msg == '') {
                
                alert("All Fields Are Required!");
                
                return false;
                
            } 
            
            else if ($('#name').val().length < 3) {
                
                alert("Your first name should be of at least 3 charcters and without space.");
                
                $('#name').focus();
                
                return false;
                
            } 
            
            else if ($('#email').val().length < 3) {
                
                alert('The Email Address is Not Valid.');
                
                $('#email').focus();
                
                return false;
                
            } 
            
            else if (!email.match(emailReg)) {
                
                alert("Please Enter A Valid Email Address!");
                
                return false;
                
            } 
            
            else {
                
                alert("Congratulations!! Your information have been Submitted");
            }
        }
        
    </script>
    
</head>

<body>
   
   <!--Javascript JDK for Facebook-->
   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   <!--Javascript JDK for Facebook-->
   
   
   
   
    <!--[if lt IE 7]>
           
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            
        <![endif]-->


    <!--Header Area Starts-->
    
    <section class="header">
       
        <div class="container">
           
            <div class="row">
               
                <div class="col-md-12 top">
                   
                    <div class="col-md-7 left_top">
                    
                    <div class="logo">
                       
                        <h2>www.bolirrojo.com</h2>
                        
                    </div>
                    
                    <div class="img">
                       
                        <img src="img/pen.png" alt="Pen"> 
                                               
                        <h3>Correccion de textos</h3>
                        
                    </div>
                    
                </div>
                
                <div class="col-md-5 right_top">
                   
                    <div class="first_row">
                       
                        <h3 class="text">REVISION <br> EXHAUSTIVA</h3> <i class="fa fa-search"></i>
                        
                    </div>
                    
                    <div class="second_row">
                       
                        <h3 class="text_2">CORRECCIONES <br> DOCUMENTADAS</h3> <i class="fa fa-comment-o"></i>
                        
                    </div>
                    
                    <div class="third_row">
                       
                        <h3 class="text_3">PRESUPUESTOS <br> A MEDIDA</h3> <i class="fa fa-eur"></i>
                        
                    </div>
                    
                </div>
                
                </div>
                
            </div>
            
        </div>
        
    </section>
    
    
    
    
    
    
    
    <!--Header Area Ends-->
    
    

    <!--Footer Top Area Starts-->
    
    
    <section class="middle">
       
        <div class="container ">
           
            <div class="row footer_top">
               
                <div class="col-md-7 service_des">
                   
                    <div class="service">
                       
                        <h2>Servicios:</h2>
                        
                        <p>
                            correccion ortogrsfica.correccion de estilo
                            <br> Asesoramiento linguistico
                            <br> Revision y correccion de traducciones
                            <br> correccion ortotipografica. Unificacion. Compaginacion
                            <br> Llamadas, signos y senales tipificados (UNE 54051:1974)
                            <br> sistema propeo de Llamadas y anotaciones
                            <br> correccion de blogs y paginas web, html, xml
                            <br> correccion en varios formatos: texto, word, PDF, Adobe InDesign, etc.
                        </p>
                        
                    </div>




                </div>
                
                <div class="col-md-5 form">
                   
                    <h2>Para escribir mejor, escribenos</h2>
                    
                    <form id="contact" name="contact" method="post" onsubmit="myFunction()" action="index.php">
                       
                        <input type="text" name="name" id="name" placeholder="Name" >
                        
                        <br>
                        
                        <input type="email" name="email" id="email" placeholder="Email">
                        
                        <br>
                        
                        <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Message"></textarea>
                        
                        <br>
                        
                        <input type="reset" value="LIMPIAR" class="reset">
                        
                        <input class="submit" value="ENVIAR" name="submit" type="submit" id="submit">


                    </form>
                    
                </div>
                
            </div>
            
        </div>
        
    </section>
    
    <!--Footer Top Area Ends-->

    <section>
       
        <div class="container">
           
            <div class="row footer">

                <div class="col-md-6 social_profiles ">
                  <div class="fb-like col-md-6" data-href="https://www.facebook.com/webmaster.bangladesh" data-width="20" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
                   
                    <div class="col-md-6">
                        <a href="#"><i class="fa fa-facebook facebook"></i></a>
                    
                    <a href="#"><i class="fa fa-twitter twitter"></i></a>
                    
                    <a href="#"><i class="fa fa-pinterest pinterest"></i></a>
                    </div>
                    
                </div>
                
                <div class="col-md-6 copyright">
                   
                    <p>&copy;www.bolirrojo.com, 2015.</p>
                    
                </div>

            </div>
            
        </div>
        
    </section>

</body>

</html>
<?php include_once('contact.php');?>

    
   
  
 
























