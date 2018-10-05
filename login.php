<?php 
ob_start();
// if(!isset($_SESSION['login']))
// {
//     $flag=false;
// }
try {
	$opt = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );
	$pdo = new PDO( 'mysql:host=localhost;dbname=database1', 'root', '', $opt );
	$pdo->query( 'set names utf8' );
} catch ( PDOException $e )
{
	exit( 'server error' );
}
$thongbao="";
if(isset($_POST['user']) && isset($_POST['pass']))
        {
            if(trim($_POST['user'])!='' && trim($_POST['pass'])!='')
            {

                

                    $sql="select * from noidung where name like 'user' or name like 'pass' ";
                    
                    $sth = $pdo->prepare( $sql );
                    $sth->execute();
                    $data = $sth->fetchAll( PDO::FETCH_OBJ );
                    $a = array();
                    foreach ( $data as $k => $v )
                    {
                        $tam = array( $v->name => $v->content );
                        array_push( $a, $tam );
                    }
                    $c = array();
                    $vv = array();
                    foreach ( $a as $k => $v )
                    {
                        $vv = array_merge( $vv, $v );
                    }
                     $user=$vv['user'];
                //    echo "<br>";
                     $pass=$vv['pass'];
                //     echo "<pre>";
                //     print_r($_POST);
                //     echo "</pre>";
                //     exit();
                  
                
                    if($user==$_POST['user'] && $pass==$_POST['pass'])
                    { 
                        $flag=true;
                       
                        $thongbao="<div class='alert alert-success'> Đăng nhập thành công !! </div>";
                        session_start();
                        $time=time() + 86400;
                        setcookie('login',true,$time);
                        $_SESSION['login']=true;
                         $_SESSION['user']=$user;
                        $_SESSION['pass']=$pass;
                       header('location:http://localhost/web2/admin2.php');    
                        
                    } else
                    {
                        $thongbao="<div class='alert alert-danger'> Đăng nhập sai user hoặc pass đăng nhập </div>";
                        
                    }   


                    
           
              
                
                
                
                 
                
            }
            
        }




 ?>

 <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="layout3/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="layout3/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin NT-TT HCM</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="layout3/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="layout3/assets/css/material-dashboard.css?v=1.2.1" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="layout3/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="off-canvas-sidebar">
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">TRUNG TÂM NGHỆ THUẬT TRUYỀN THỐNG TP.HCM</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=" active ">
                        <a href="#">
                            <i class="material-icons">fingerprint</i> Login
                        </a>
                    </li>
                    <li class="#">
                        <a href="lock.html">
                            <i class="material-icons">lock_open</i> Lock
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black" data-image="layout3/assets/img/login.jpeg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form method="post" action="#">
                                <div class="card card-login card-hidden">
                                    <div class="card-header text-center" data-background-color="rose">
                                        <h4 class="card-title">Login</h4>
                                        <?php echo @$thongbao ?>
                                    </div>
                                   
                                    <div class="card-content">
                                      
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">User</label>
                                                <input type="text" name="user" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password</label>
                                                <input type="password" name="pass" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <p class="copyright pull-right">
                        TRUNG TÂM NGHỆ THUẬT TRUYỀN THỐNG TP.HCM
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="layout3/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="layout3/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="layout3/assets/js/material.min.js" type="text/javascript"></script>
<script src="layout3/assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="layout3/assets/js/arrive.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="layout3/assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="layout3/assets/js/moment.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="layout3/assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="layout3/assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="layout3/assets/js/bootstrap-notify.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="layout3/assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="layout3/assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="layout3/assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="layout3/assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="layout3/assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="layout3/assets/js/sweetalert2.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="layout3/assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="layout3/assets/js/fullcalendar.min.js"></script>
<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="layout3/assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="layout3/assets/js/material-dashboard.js?v=1.2.1"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="layout3/assets/js/demo.js"></script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>
<?php 
ob_end_flush(); 
 ?>