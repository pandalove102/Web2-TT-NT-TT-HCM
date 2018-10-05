 <style>
.pic-page10{
   max-width: 90%;
    border-radius: 20px !important;
    margin: 5px;
    height: 160px;
}
#page10-tieude1{
  position: relative;
    top: 45px;
}
.page10-tieude{
   position: relative;
    top: 10px;
    line-height: 25px;
    max-width: 80%;
    font-size: 17px;
    text-transform: uppercase;

}
.team-member{
  text-align: justify;
}
.content{
  display: block;
  width: 100px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
</style>
 <!-- about -->
 <section id="section-about" class="section appear clearfix">
    <div class="container">
           
      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 id="page10-tieude1" class="section-heading animated" data-animation="bounceInUp"><?=$vv['page10_tieude']?></h2>
            <!-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p> -->
          </div>
        </div>
      </div>


        <?php
                 
            $sql = "select * from posts where id_nhom=1 || id_nhom=2 ORDER BY ngaytao ASC LIMIT 0,4";
            $sth = $pdo->prepare( $sql );
            $sth->execute();
            $data = $sth->fetchAll( PDO::FETCH_OBJ );
          
            foreach ( $data as $k => $v )
            {
        ?>


      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><a href="?page=page12&&id=<?=$v->id?>"><img class="pic-page10" src="<?=$v->link?>" alt=""></a></figure>
            <div class="team-detail">
              <h4><a  class="page10-tieude" href="?page=page12&&id=<?=$v->id?>"> <?=$v->tieude?></a></h4>
              <span class="content" > <?=$v->content?></span>
            </div>
          </div>
        </div>
            <?php } ?>
     
      
    </div>
  </section>
  <!-- /about -->
