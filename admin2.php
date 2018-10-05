
<?php
ob_start();
session_start();
include_once( 'config.php' );
include_once( 'uploadfiles.php' );

if($_SESSION['login']==FALSE)
{
    header('location:http://localhost/web2/login.php');
}
try {
	$opt = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );
	$pdo = new PDO( 'mysql:host=localhost;dbname=database1', 'root', '', $opt );
	$pdo->query( 'set names utf8' );
} catch ( PDOException $e )
{
	exit( 'server error' );
}
$sql = "select * from noidung where 1";
$sth = $pdo->prepare( $sql );
$sth->execute();
$data = $sth->fetchAll( PDO::FETCH_OBJ );
// echo "<pre>";
// print_r($data);
// echo "</pre>";
$a = array();
foreach ( $data as $k => $v )
{
	$tam = array( $v->name => $v->content );
	array_push( $a, $tam );
}
// echo "<pre>";
// print_r($a);
// echo "</pre>";
$c = array();
$vv = array();
foreach ( $a as $k => $v )
{
	$vv = array_merge( $vv, $v );
}
// echo "<pre>";
// print_r($vv);
// echo "</pre>";
// echo "<pre>";
// print_r($v);
// echo "</pre>";
// echo $v['page1_tieude1'];
// exit();
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

<body>
    <div class="">
        <div class="sidebar" data-active-color="purple" data-background-color="black" data-image="layout3/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
    <div class="logo">
        <a href="?page=home_admim" class="simple-text logo-mini">
            AD
        </a>
        <a href="?page=home_admim" class="simple-text logo-normal">
            Admin
        </a>
    </div>
    <div class="sidebar-wrapper">
     
        <ul class="nav">
            <li>
                <a href="?page=config">
                    <i class="material-icons">CO</i>
                    <p> Config </p>
                </a>
            </li>
            <li>
                <li>
                    <a href="?page=gioithieu">
                        <i class="material-icons">GT</i>
                        <p> QL Giới Thiệu </p>
                    </a>
                </li>
                <li>
                    <li>
                        <a href="?page=tintucsukien">
                            <i class="material-icons">TS</i>
                            <p>  QL Tin Tức & Sự Kiện </p>
                        </a>
                    </li>
                    <li>
                        <li>
                            <a href="?page=nghiencuu">
                                <i class="material-icons">NC</i>
                                <p>  QL Nghiên cứu  </p>
                            </a>
                        </li>
                        <li>
                            <li>
                                <a href="?page=daotao">
                                    <i class="material-icons">DT</i>
                                    <p>  QL Đào Tạo  </p>
                                </a>
                            </li>
                            <li>
                                <li>
                                    <a href="?page=dichvu">
                                        <i class="material-icons">DV</i>
                                        <p>  QL Dịch Vụ  </p>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="#pagesExamples">
                                        <i class="material-icons">grid_on</i>
                                        <p> Pages
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                    <div class="collapse" id="pagesExamples">
                                        <ul class="nav">
                                            <li>
                                                <a href="?page=pageall">
                                                    <span class="sidebar-mini"> P </span>
                                                    <span class="sidebar-normal"> Page </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="?page=pagemenu">
                                                    <span class="sidebar-mini"> M </span>
                                                    <span class="sidebar-normal"> Menu </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="?page=pageheader">
                                                    <span class="sidebar-mini"> H </span>
                                                    <span class="sidebar-normal"> Header </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="?page=pagefooter">
                                                    <span class="sidebar-mini"> F </span>
                                                    <span class="sidebar-normal"> Footer </span>
                                                </a>
                                            </li>
                                            <!-- <li>
                                                <a href="?page=pagelogin">
                                                    <span class="sidebar-mini"> Lg </span>
                                                    <span class="sidebar-normal"> Login </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="?page=pagelock">
                                                    <span class="sidebar-mini"> Lo  </span>
                                                    <span class="sidebar-normal"> Lock </span>
                                                </a>
                                            </li> -->
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="?page=logout">
                                        <i class="material-icons">L</i>
                                        <p>  Logout  </p>
                                    </a>
                                </li>

                     <!-- <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="material-icons">content_paste</i>
                            <p> Posts
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="?page=groupposts">
                                        <span class="sidebar-mini"> GP </span>
                                        <span class="sidebar-normal"> Group Posts </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?page=posts">
                                        <span class="sidebar-mini"> P </span>
                                        <span class="sidebar-normal"> Posts </span>
                                    </a>
                                </li>
                              
                               
                            </ul>
                        </div>
                    </li> -->
                    
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Regular Forms </a>
                    </div>
                    
                </div>
            </nav>
            <?php 
            if ( isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] )
            {
                $page = $_GET[ 'page' ];
                $link = 'page/' . $page . '.php';
                if ( file_exists( $link ) )
                {
                    include_once( $link );
                } else
                {
                    include_once( 'page/page404_admin.php' );
                }
            } else
            {
                include_once( 'page/home_admin.php' );
            }
            ?>
            <footer class="footer">
                <div class="container-fluid">
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table_config').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#table_config').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            // alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            document.getElementById(".content").innerHTML = "Paragraph changed!";
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });


    
</script>
<script>
//   $('.edit').click(function(){
//   $(this).hide();
//   $('.box').addClass('editable');
//   $('.text').attr('contenteditable', 'true');  
//   $('.save').show();
// });

// $('.save').click(function(){
//   $(this).hide();
//   $('.box').removeClass('editable');
//   $('.text').removeAttr('contenteditable');
//   $('.edit').show();
// });

</script>
</html>
<?php 
ob_end_flush(); 

 ?>