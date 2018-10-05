<?php
//   echo "<pre>";
//   print_r($_POST);
//   echo "</pre>";
//   exit();

// if(isset($_POST['content']) && $_POST['content'])
// {
//   $content=$_POST['content'];
//   $id=$_GET['id'];
//   $sql = "update noidung SET content='$content' WHERE id=$id";
//   $sth = $pdo->prepare( $sql );
//   $sth->execute(array($content,$id));
// }

// if(isset($_GET['posts']) && $_GET['posts'])
// {
//   $posts=$_GET['posts'];
// }else
// {
//   header('?page=404_admin.php');
// }

if(isset($_POST['content']) && $_POST['content'])
{
    foreach($_POST['content'] as $k=>$v)
    {
        $sql = "update noidung SET content='$v' WHERE id=$k";
        $sth = $pdo->prepare( $sql );
        $sth->execute();
    }
}

$sql = "select * from noidung where id_nhom='slideshow'";
$sth = $pdo->prepare( $sql );
$sth->execute();
$data = $sth->fetchAll( PDO::FETCH_OBJ );


// echo "<pre>";
// print_r($data[$i]);
// echo "</pre>";
// exit();
?>
<form method="post"  id="fupdate" class="form-horizontal">
<div class="content">
  <div class="container-fluid">
    <?php
        for($i=0;$i<count($data);$i++)
        {
    ?>  


              <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-text" data-background-color="rose">
                    <h4 class="card-title">Edit</h4>
                </div>
                <div class="card-content">
                <div class="row">
                    <label class="col-sm-2 label-on-left">ID</label>
                    <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" name="id['<?=$i?>']" value="<?=$data[$i]->id?>"    class="form-control">
                    </div>
                    </div>
                </div>
                </div>
                <div class="card-content">
                <div class="row">
                    <label class="col-sm-2 label-on-left">Group</label>
                    <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" name="id_nhom['<?=$i?>']" value="<?=$data[$i]->id_nhom?>"    class="form-control">
                    </div>
                    </div>
                </div>
                </div>
                <div class="card-content">
                <div class="row">
                    <label class="col-sm-2 label-on-left">Name</label>
                    <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" name="name['<?=$i?>']" value="<?=$data[$i]->name?>"    class="form-control">
                    </div>
                    </div>
                </div>
                </div>
            
                <?php
                    $link=$data[$i]->content;
                    // echo $link;
                    // exit();
                    if ( file_exists( $link ) )
                    {
                ?>

                <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-icon" data-background-color="rose">
        Picture
      </div>
      
      <div class="card-content">
        <div class="table-responsive">
          <table class="table table-shopping">
            <thead>
              <tr>
                <th class="text-center"></th>
                <th>Link</th>
                <th class="text-right">Action</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      <img src="<?=$link?>" alt="...">
                      <input type="hidden" name="content['<?=$i?>']" value="<?=$link?>">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-round btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" multiple="" name="content['<?=$i?>']" value="<?=$link?>">
                      </span>
                      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                          <i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </td>

                <td class="td-name">
                  <a href="#"><?=$link?></a>
                                <!-- <br>
                                  <small>by Admin 1</small> -->
                                </td>
                                <td class="td-actions">
                                  <button type="button" rel="tooltip" data-placement="left" title="" class="btn btn-simple" data-original-title="Remove item">
                                    <i class="material-icons">close</i>
                                  </button>
                                  
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php
                
                    }else
                    {
                
                ?>
                <div class="card-content">
                    <div class="row">
                    <label class="col-sm-2 label-on-left">Content</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" class="form-control" name="content['<?=$data[$i]->id?>']" value="<?=$data[$i]->content?>">
                        <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
                        </div>
                    </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            </div>
    <?php
  }
  ?>


        <div class="col-md-12">
        <div class="card">
            <div class="card-content text-center">
            <div class="form-group form-button">
                <!-- <button type="submit" value="" class="btn btn-fill btn-rose"> -->
                <a href="?page=pageheader" class="btn btn-fill btn-rose" style="color:white">Back</a>
                <!-- </button> -->
                <!-- <button type="submit"   name="update" value="1" class="btn btn-fill btn-rose">Update</button> -->
                <a class="btn btn-fill btn-rose" onclick="fsubmit()" id="update" style="color:white">Update</a>
                <!-- href="?controller=sanpham&act=update_sanpham&id=1"  -->
                </div>
            </div>
            </div>
        </div>

        </div>
    </div>
    </div>


</form>
<script>
    function fsubmit() {
      document.getElementById("fupdate").submit()
  }
</script>