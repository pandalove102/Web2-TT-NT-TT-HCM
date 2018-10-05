<?php
//   echo "<pre>";
//   print_r($_POST);
//   echo "</pre>";
//   exit();

if(isset($_POST['submit']) && $_POST['submit'])
{
    foreach($_POST['content'] as $k=>$v)
    {
        $sql = "update noidung SET content='$v' WHERE id=$k";
        $sth = $pdo->prepare( $sql );
        $sth->execute();
    }
}

?>
 <form id="" class="form-horizontal" method="post">
<div class="content">
    <div class="container-fluid">
        <div class="row">
                 
            <div class="col-md-12">
                <div class="card">
                   
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title">List Menu</h4>
                        </div>

                           <?php 
                         
                            $sql = "select * from noidung where id_nhom='footer'";
                            $sth = $pdo->prepare( $sql );
                            $sth->execute();
                            $data = $sth->fetchAll( PDO::FETCH_OBJ );
                                for ($i=1;$i<count($data);$i++ )
                                {
                                    // echo "<pre>";
                                    // print_r($data);
                                    // echo "</pre>";
                                    // exit();
                                ?>


                                <div class="card-content">
                                    <div class="row">
                                        <label class="col-sm-2 label-on-left">Footer <?=$i?> </label>
                                        <div class="col-sm-10">
                                            <div class="form-group label-floating">
                                                <label class="control-label"></label>
                                                <input class="form-control" name="content[<?=$data[$i]->id?>]" type="text" value="<?=$data[$i]->content?>" name="min_length" minLength="5" />
                                            </div>
                                        </div>
                                    
                                    </div>
                                
                                </div>

                               <?php
                                    }
                                ?>

                        <div class="card-footer text-center">
                            <button type="submit" name="submit" value="1" class="btn btn-rose btn-fill">Update</button>
                        </div>
                   
                </div>
            </div>
         
        </div>
    </div>
</div>

 </form>