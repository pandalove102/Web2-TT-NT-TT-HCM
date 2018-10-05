<?php
  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  // exit();

if(isset($_POST['content']) && $_POST['content'])
{
  $content=$_POST['content'];
  $tieude=$_POST['tieude'];
  $id=$_GET['id'];
  $linknew=$_POST['link1'];
  $id_nhom=$_POST['id_nhom'];
  $date=date("Y-m-d");

  // xử lý ảnh 
  if(isset($_FILES['link']))
  {
  
    
        if($_FILES['link']['error']==0)
        {
            $fdpath =(isset($_GET['fd']) && $_GET['fd']) ? $_GET['fd'] : 'assets/img/' ;
            $sr = new FileManager($_FILES['link'], $fdpath,20,'picture');
            $kq=$sr->myUpLoad();
            $linknew='assets/img/'.$kq;      
        }
  
  }
  



  $sql = "update posts SET content='$content',tieude='$tieude',link='$linknew',id_nhom='$id_nhom',ngaytao='$date' WHERE id=$id";
  $sth = $pdo->prepare( $sql );
  $sth->execute(array($content,$id));
}

if(isset($_GET['id']) && $_GET['id'])
{
  $id=$_GET['id'];
  $sql = "select * from posts where id='$id'";
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
                    <label class="col-sm-2 label-on-left">Group</label>
                    <div class="col-sm-10">
                    <select name="id_nhom" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7" data-toggle="dropdown">
                        <option disabled selected>Choose</option>
                        <option value="1" <?php if($v->id_nhom==1) echo 'selected' ?> >Tin Tức </option>
                        <option value="2" <?php if($v->id_nhom==2) echo 'selected' ?> >Sự Kiện</option>
                        <option value="4" <?php if($v->id_nhom==4) echo 'selected' ?> >Đào Tạo</option>
                        <option value="5" <?php if($v->id_nhom==5) echo 'selected' ?> >Nghiên Cứu</option>
                        <option value="6" <?php if($v->id_nhom==6) echo 'selected' ?> >Dịch Vụ</option>
                    </select>
                    </div>
                </div>
                </div>

                <div class="card-content">
                <div class="row">
                    <label class="col-sm-2 label-on-left">Name</label>
                    <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" name="tieude" value="<?=$v->tieude?>"    class="form-control">
                    </div>
                    </div>
                </div>
                </div>

                <!-- <div class="card-content">
                <div class="row">
                    <label class="col-sm-2 label-on-left">Content</label>
                    <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input type="text" name="" value="<?=$v->content?>"    class="form-control">
                    </div>
                    </div>
                </div>
                </div> -->

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Content</label>
                        <div class="form-group label-floating is-empty">
                            <!-- <label class="control-label"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label> -->
                            <textarea class="form-control" name="content" rows="5"><?=$v->content?></textarea>
                        <span class="material-input"></span></div>
                    </div>
                </div>
            
              

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
                      <img src="<?=$v->link?>" alt="...">
                      <input type="hidden" name="link1" value="<?=$v->link?>">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-round btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="link"/>
                      </span>
                      <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                          <i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </td>

                <td class="td-name">
                  <a href="#"><?=$v->link?></a>
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

          


        <div class="col-md-12">
        <div class="card">
            <div class="card-content text-center">
            <div class="form-group form-button">
                <!-- <button type="submit" value="" class="btn btn-fill btn-rose"> -->
                <a href="?page=tintucsukien" class="btn btn-fill btn-rose" style="color:white">Back</a>
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
<?php
        }
      ?>
<script>
    function fsubmit() {
      document.getElementById("fupdate").submit()
  }
</script>