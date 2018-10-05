<?php
// echo "<pre>";
// print_r($_POST);
// // print_r($_FILES['content']);
// echo "</pre";
// // // exit();




if(isset($_POST['content1']) &&  $_POST['content1'] )
{

  $id=$_POST['id'];
  if(isset($_FILES['content']))
  {
     
      if(isset($_FILES['content']))
      {
        if($_FILES['content']['error']==0)
        {
         
            $sr = new FileManager($_FILES['content'],'assets/img/',20,'picture');
            $kq=$sr->myUpLoad();
            $content='assets/img/'.$kq; 
            $sql = "update noidung SET content='$content' WHERE id=$id";
            $sth = $pdo->prepare( $sql );
            $sth->execute();

        
        }

      }
  
  }else
  {
    $content=$_POST['content1'];
    $sql = "update noidung SET content='$content' WHERE id=$id";
    $sth = $pdo->prepare( $sql );
    $sth->execute();

  }
 
  
  }

if(isset($_GET['id']) && $_GET['id'])
{
  $id=$_GET['id'];
  $sql = "select * from noidung where id='$id'";
  $sth = $pdo->prepare( $sql );
  $sth->execute();
  $data = $sth->fetchAll( PDO::FETCH_OBJ );
}
// echo "<pre>";
// print_r($data[$i]);
// echo "</pre>";
// exit();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form method="post"  id="fupdate" class="form-horizontal" enctype="multipart/form-data" >
<div class="content">
  <div class="container-fluid">
    <?php
      
        foreach($data as $k=>$v)
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
                        <input type="text" name="id" value="<?=$v->id?>"    class="form-control">
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
                        <input type="text" name="tieude" value="<?=$v->name?>"    class="form-control">
                    </div>
                    </div>
                </div>
                </div>
                <?php
                  $link=$v->content;
                    if (file_exists($link))
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
                      <img src="<?=$v->content?>" alt="...">
                      <input type="hidden" name="content1" value="<?=$v->content?>">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-round btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" multiple="" name="content">
                      </span>
                      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                          <i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </td>

                <td class="td-name">
                  <a href="#"><?=$v->content?></a>
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
                        
                        <textarea class="form-control" name="content1" rows="5"><?=$v->content?></textarea>
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
                <a href="?page=config" class="btn btn-fill btn-rose" style="color:white">Back</a>
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