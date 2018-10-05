<style>
.heading12{
    font-size: 20px;
    position: relative;
    top: 110px;
    left: 40px;
    font-family: sans-serif;
}

.img-fluid{
    position: absolute;
    top: 200px;
    left: 30px;
    border-radius: 25px;
    max-width: 85%;

}

.text-justify-par12{
    position: relative;
    top: 120px;
    left: 40px;
    max-width: 90%;
    font-size: 15px;
    text-align: justify;

}
</style>
 <?php
    if(isset($_GET['id']) && $_GET['id'])
    {
        $id=$_GET['id'];
        $sql = "select * from posts where id=$id";
        $sth = $pdo->prepare( $sql );
        $sth->execute();
        $data = $sth->fetchAll( PDO::FETCH_OBJ );
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit();
        foreach ( $data as $k => $v )
        {

    }
   
?>
<section id="trang12">
        <div>
            <div class="row" style="background-color:#f4e6cc;min-height: 116vh;">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="background-color:#f4e6cc; ">
                    <h6 class="heading12"><?=$v->tieude?>&nbsp;<br></h6>
                    <p class="text-justify-par12"><?=$v->content?>&nbsp;</p>
                   
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding:0;background-color:#f4e6cc;">
                    <img class="img-fluid"  src="<?=$v->link?>" id="page4-pic1">
                </div>
            </div>
        </div>
    </section>

<?php
    }
?>