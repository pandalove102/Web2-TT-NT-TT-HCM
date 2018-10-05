<style>
.pic-page11{
    border-radius: 25px !important;
    margin: 10px;
    height: 220px;
}
.team-detail {
    text-align: justify;
    max-width: 90%;
}
.page11-heading{
   text-align: justify;
    line-height: 25px;
}
.content{
  display: block;
  width: 100px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

</style>

<section id="section-services" class="section pad-bot30 bg-white">
    <div class="container" style="    margin-top: 40px;">

      <div class="row mar-bot40">
      <?php
          
          $sql = "select * from posts where id_nhom=1  ORDER BY ngaytao ASC LIMIT 0,4";
          $sth = $pdo->prepare( $sql );
          $sth->execute();
          $data = $sth->fetchAll( PDO::FETCH_OBJ );
        
          foreach ( $data as $k => $v )
          {
      ?>



        <div class="col-lg-3">
        
          <figure class="member-photo"><a href="?page=page12"><img style="width: 240px;height: 180px;" class="pic-page11" src="<?=$v->link?>" alt=""></a></figure>
          <div class="team-detail">
              <h4><a class="page11-heading " href="?page=page12"><?=$v->tieude?></a></h4>
              <span class="content"  ><?=$v->content?></span>
            </div>
          

          <div class="clear"></div>
        </div>

        <?php } ?>

       

      </div>

        <div class="row mar-bot40">

         <?php
          
          $sql = "select * from posts where id_nhom=2 ORDER BY ngaytao ASC LIMIT 0,4";
          $sth = $pdo->prepare( $sql );
          $sth->execute();
          $data = $sth->fetchAll( PDO::FETCH_OBJ );
        
          foreach ( $data as $k => $v )
          {
      ?>
        <div class="col-lg-3">
        
          <figure class="member-photo"><a  href="?page=page12"><img style="width: 240px;height: 180px;" class="pic-page11" src="<?=$v->link?>" alt=""></a></figure>
          <div class="team-detail">
              <h4><a class="page11-heading" href="?page=page12"><?=$v->tieude?></a></h4>
              <span class="content" > <?=$v->content?></span>
            </div>
          

          <div class="clear"></div>
        </div>
        <?php } ?>
       

       

      </div>
   

      </div>
    </div>
  </section>






