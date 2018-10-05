<?php

// kết nối database 

try{

    

    $opt= array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);

     $pdo =new PDO('mysql:host=localhost;dbname=database1','root','',$opt);

    $pdo->query('set names utf8');

}catch(PDOException $e)

{

    exit('server error');

}



if(isset($_POST['update']) &&  $_POST['update'])

{

    // echo "<pre>";

    // print_r($_POST);

    // echo "</pre>";



    $id=$_GET['id'];

    $content=$_POST['content'];

    $name=$_POST['name'];

    $sql="UPDATE noidung

    SET `content`=?,`name`=?

    WHERE `id`=? ";

     $sth = $pdo->prepare($sql);

     $sth->execute(array($content,$name,$id));

     



}



if(isset($_POST['insert']) &&  $_POST['insert'])

{

    // echo "<pre>";

    // print_r($_POST);

    // echo "</pre>";



    $name=$_POST['name'];

    $content=$_POST['content'];

    $sql="insert INTO `noidung`(`id`,`name`,`content`) VALUES (Null,?,?)";

     $sth = $pdo->prepare($sql);

     $sth->execute(array($name,$content));



}



if(isset($_GET['dell']) &&  $_GET['dell'] && isset($_GET['id']) &&  $_GET['id'])

{

    // echo "<pre>";

    // print_r($_GET);

    // echo "</pre>";

    $id=$_GET['id'];

    $sql="DELETE FROM noidung WHERE id=$id";

     $sth = $pdo->prepare($sql);

     $sth->execute(array($id));





}





$sql="select * from noidung where 1";

$sth = $pdo->prepare($sql);

$sth->execute();

$data = $sth->fetchAll(PDO::FETCH_OBJ);



// load data 





// echo "<pre>";

// print_r($data);

// echo "</pre>";





?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8" />

    <link rel="apple-touch-icon" sizes="76x76" href="layout/assets/img/apple-icon.png">

    <link rel="icon" type="image/png" href="layout/assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->

    <link href="layout/assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="layout/assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->

    <link href="layout/assets/css/demo.css" rel="stylesheet" />

</head>



<body>

    <div class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6">

                    <form id="form-id" class="form-horizontal" action="" method="POST" novalidate="novalidate">

                    <div class="card data-tables">

                        <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">

                            <div class="toolbar">

                                <!--        Here you can write extra buttons/actions for the toolbar              -->

                            </div>

                            <div class="fresh-datatables">

                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                    <thead>

                                        <tr>

                                            <th>ID</th>

                                            <th>Name</th>

                                            <th>Content</th>

                                            <th class="disabled-sorting text-right">Actions</th>

                                        </tr>

                                    </thead>

                                   

                                    <tbody>

                                            <?php

                                            foreach($data as $k=>$v)

                                            {

                                        ?>

                                        <tr>

                                            <td><?=$v->id?></td>

                                            <td><?=$v->name?></td>

                                            <td><?=$v->content?></td>

                                            <td class="text-right">

                                                <!-- <a href="#" class="btn btn-link btn-info like"><i class="fa fa-heart"></i></a> -->

                                                <a onclick="document.getElementById('form-id').submit();" href="?update=1&id=<?=$v->id?>" class="btn btn-link btn-warning"><i class="fa fa-edit"></i></a>

                                                <a onclick="return confirm_click();" href="?dell=1&id=<?=$v->id?>" class="btn btn-link btn-danger "><i class="fa fa-times"></i></a>

                                            </td>

                                        </tr>

                                        <?php

                                        }

                                        ?>

                                        

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

                </form>                       



               <div class="col-md-6">

                  

                      

                      <?php



                      if(isset($_GET['id']) && $_GET['id'] && isset($_GET['update']) && $_GET['update'])

                      {

                        $id=$_GET['id'];

                        $sql="select * from noidung where `id`=$id";

                        $sth = $pdo->prepare($sql);

                        $sth->execute();

                        $data2 = $sth->fetch(PDO::FETCH_OBJ);

                        // echo "<pre>";

                        // print_r($data2);

                        // echo "</pre>";

                    ?>

                         <form id="TypeValidation" class="form-horizontal" action="" method="POST" novalidate="novalidate">

                       

                        <div class="card ">

                            <div class="card-header ">

                                <h4 class="card-title">Update Content</h4>

                            </div>

                            <div class="card-body ">

                                <div class="row">

                                    <label class="col-sm-2 col-form-label">ID</label>

                                    <div class="col-sm-7">

                                        <div class="form-group">

                                            <input disabled="" class="form-control" type="text" name="id" value="<?=$data2->id?>" required="true">

                                        </div>

                                    </div>

                                    <!-- <label class="col-sm-3 label-on-right">

                                        <code>required</code>

                                    </label> -->

                                </div>

                                <div class="row">

                                    <label class="col-sm-2 col-form-label">Name</label>

                                    <div class="col-sm-7">

                                        <div class="form-group">

                                            <input class="form-control" type="text" name="name" value="<?=$data2->name?>" email="true">

                                        </div>

                                    </div>

                                    <!-- <label class="col-sm-3 label-on-right">

                                        <code>email="true"</code>

                                    </label> -->

                                </div>

                                <div class="row">

                                    <label class="col-sm-2 col-form-label">Content</label>

                                    <div class="col-sm-7">

                                        <div class="form-group">

                                            <input class="form-control" type="text" name="content" value="<?=$data2->content?>" number="true">

                                        </div>

                                    </div>

                                    <!-- <label class="col-sm-3 label-on-right">

                                        <code>number="true"</code>

                                    </label> -->

                                </div>

                               

                              

                            <div class="card-footer text-center">

                                <button type="submit" name="update" value="1" class="btn btn-info">Update</button>

                            </div>

                        </div>

                    </form>



                    <?php

                      }

                      else

                      {

                    ?>

                            <form id="TypeValidation" class="form-horizontal" action="" method="POST" novalidate="novalidate">

                       

                       <div class="card ">

                           <div class="card-header ">

                               <h4 class="card-title">Update Content</h4>

                           </div>

                           <div class="card-body ">

                               <div class="row">

                                   <label class="col-sm-2 col-form-label">ID</label>

                                   <div class="col-sm-7">

                                       <div class="form-group">

                                           <input disabled="" class="form-control" type="text" name="id" value="" required="true">

                                       </div>

                                   </div>

                                   <!-- <label class="col-sm-3 label-on-right">

                                       <code>required</code>

                                   </label> -->

                               </div>

                               <div class="row">

                                   <label class="col-sm-2 col-form-label">Name</label>

                                   <div class="col-sm-7">

                                       <div class="form-group">

                                           <input class="form-control" type="text" name="name" value="" email="true">

                                       </div>

                                   </div>

                                   <!-- <label class="col-sm-3 label-on-right">

                                       <code>email="true"</code>

                                   </label> -->

                               </div>

                               <div class="row">

                                   <label class="col-sm-2 col-form-label">Content</label>

                                   <div class="col-sm-7">

                                       <div class="form-group">

                                           <input class="form-control" type="text" name="content" value="" number="true">

                                       </div>

                                   </div>

                                   <!-- <label class="col-sm-3 label-on-right">

                                       <code>number="true"</code>

                                   </label> -->

                               </div>

                              

                             

                           <div class="card-footer text-center">

                               <button type="submit" name="update" value="1" class="btn btn-info">Update</button>

                           </div>

                       </div>

                   </form>

                    <?php



                      }

                    ?>

                        <form id="TypeValidation" class="form-horizontal" action="" method="POST" novalidate="novalidate">

                       

                       <div class="card ">

                           <div class="card-header ">

                               <h4 class="card-title">Add Content</h4>

                           </div>

                           <div class="card-body ">

                               <div class="row">

                                   <label class="col-sm-2 col-form-label">ID</label>

                                   <div class="col-sm-7">

                                       <div class="form-group">

                                           <input disabled="" class="form-control" type="text" name="id" value="" required="true">

                                       </div>

                                   </div>

                                   <!-- <label class="col-sm-3 label-on-right">

                                       <code>required</code>

                                   </label> -->

                               </div>

                               <div class="row">

                                   <label class="col-sm-2 col-form-label">Name</label>

                                   <div class="col-sm-7">

                                       <div class="form-group">

                                           <input class="form-control" type="text" name="name" value="" email="true">

                                       </div>

                                   </div>

                                   <!-- <label class="col-sm-3 label-on-right">

                                       <code>email="true"</code>

                                   </label> -->

                               </div>

                               <div class="row">

                                   <label class="col-sm-2 col-form-label">Content</label>

                                   <div class="col-sm-7">

                                       <div class="form-group">

                                           <input class="form-control" type="text" name="content" value="" number="true">

                                       </div>

                                   </div>

                                   <!-- <label class="col-sm-3 label-on-right">

                                       <code>number="true"</code>

                                   </label> -->

                               </div>

                              

                             

                           <div class="card-footer text-center">

                               <button type="submit" name="insert" value="1" class="btn btn-info">Insert</button>

                           </div>

                       </div>

                   </form>



                </div>

            </div>

        </div>

    </div>

          

        </div>

    </div>

   

</body>

<!--   Core JS Files   -->

<script src="layout/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>

<script src="layout/assets/js/core/popper.min.js" type="text/javascript"></script>

<script src="layout/assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->

<script src="layout/assets/js/plugins/bootstrap-switch.js"></script>

<!--  Google Maps Plugin    -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?YOUR_KEY_HERE"></script>

<!--  Chartist Plugin  -->

<script src="layout/assets/js/plugins/chartist.min.js"></script>

<!--  Notifications Plugin    -->

<script src="layout/assets/js/plugins/bootstrap-notify.js"></script>

<!--  jVector Map  -->

<script src="layout/assets/js/plugins/jquery-jvectormap.js" type="text/javascript"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->

<script src="layout/assets/js/plugins/moment.min.js"></script>

<!--  DatetimePicker   -->

<script src="layout/assets/js/plugins/bootstrap-datetimepicker.js"></script>

<!--  Sweet Alert  -->

<script src="layout/assets/js/plugins/sweetalert2.min.js" type="text/javascript"></script>

<!--  Tags Input  -->

<script src="layout/assets/js/plugins/bootstrap-tagsinput.js" type="text/javascript"></script>

<!--  Sliders  -->

<script src="layout/assets/js/plugins/nouislider.js" type="text/javascript"></script>

<!--  Bootstrap Select  -->

<script src="layout/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>

<!--  jQueryValidate  -->

<script src="layout/assets/js/plugins/jquery.validate.min.js" type="text/javascript"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->

<script src="layout/assets/js/plugins/jquery.bootstrap-wizard.js"></script>

<!--  Bootstrap Table Plugin -->

<script src="layout/assets/js/plugins/bootstrap-table.js"></script>

<!--  DataTable Plugin -->

<script src="layout/assets/js/plugins/jquery.dataTables.min.js"></script>

<!--  Full Calendar   -->

<script src="layout/assets/js/plugins/fullcalendar.min.js"></script>

<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->

<script src="layout/assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>

<!-- Light Dashboard DEMO methods, don't include it in your project! -->

<script src="layout/assets/js/demo.js"></script>

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



            if ($tr.hasClass('child')) {

                $tr = $tr.prev('.parent');

            }



            var data = table.row($tr).data();

            alert('You press on Row: ID= ' + data[0] + ' Name: ' + data[1] + ' Content: ' + data[2] + '');

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

    });

</script>



<script>

function myFunction() {

    var x = document.getElementById("mySelect").value;

    document.getElementById("demo").innerHTML = "You selected: " + x;

}

</script>

<script type="text/javascript">

function confirm_click()

{

return confirm("Bạn có chắc chắn xoá ?");

}



</script>



</html>