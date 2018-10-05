<style>
  
.img-circle{
  max-width: 35%;
}
.flexslider .slides img {
    width: auto;
    display: inline;
    max-width: 10%;
}
.slides{
  position:relative;
  top:50px;
  min-height:50vh;
}
.testimonial h5 {
    color: #fff;
    font-size: 24px;
    font-family: sans-serif;
    line-height: 1.5em;
}
#testimonials {
    background-image: url(assets/img/cover10.png);
}

.member-photo img {
    border-radius: 35px;
    height: 300px;
    padding: 10px;
}
section#section-about {
    background-color: rgb(137, 156, 134);
}
#parallax1 {
    background-image:none;
    background-color: rgba(0, 0, 0, .5);
}
.home-color-p{
  color: #222222;
}
.img-circle {
    border-radius: 5%;
}
.portfolio-items article img {
    border-radius: 15px;
    max-height: 200px;
    width: 100%;
}
#clients img {
    opacity: 0.7;
    max-width: 150px;
    max-height: 100px;
}
.portfolio-item {
    display: block;
    position: relative;
    /* max-width: 300px; */
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.portfolio-items article img {
    border-radius: 15px;
    max-height: 188px;
    width: 360px;
   
}
.isotopeWrapper article {
  margin-bottom: 30px;
}


@media (min-width: 1281px) {
  
  
}
@media (min-width: 1025px) and (max-width: 1280px) {
.portfolio-items article img {
    width: 200px;
    height: 150px;
}
.portfolio-item {
    width: 200px;
    height: 150px;
} 
  
}

@media (min-width: 768px) and (max-width: 1024px) {
  .portfolio-item {
    left: 55%;
   
}
.portfolio-items article img {
    width: 200px;
    height: 150px;
}
.portfolio-item {
    width: 200px;
    height: 150px;
}
  
  
}

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
.portfolio-item {
    left: 10%;
}
.portfolio-items article img {
    width: 200px;
    height: 150px;
}
.portfolio-item {
    width: 200px;
    height: 150px;
}
.portfolio-item:hover .folio-info {
    top: 5px;
}
.isotopeWrapper{
  
} 
#clients img {
    padding: 20px;
}

  
  
  
}
@media (min-width: 481px) and (max-width: 767px) {

.portfolio-item {
   left: 50%;
}



  
  
}

@media (min-width: 320px) and (max-width: 480px) {
  .portfolio-item {
    left: 8%;
}
  
}


.logo {
    width: 150px;
    height: 100px;
    padding: 10px;
}

</style>
<section id="header" class="appear"></section>

  <!-- spacer section:testimonial -->
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="flexslider testimonials-slider">
              <ul class="slides">

                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="assets/img/1.png" class="img-circle">
                    </div>
                    <!-- <i class="fa fa-quote-left fa-5x"></i> -->
                    <h5>
                    <?=$vv['home2_s1_tieude1']?><br>
                    <?=$vv['home2_s1_tieude2']?>
											</h5>
                    <br/>
                    <span class="author">&mdash; Website: <a href=""> <?=$vv['home2_s1_website']?> </a></span>


                  </div>
                  
                </li>

                 <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="assets/img/2.png" class="img-circle">
                    </div>
                    <!-- <i class="fa fa-quote-left fa-5x"></i> -->
                    <h5>
                    <?=$vv['home2_s2_tieude1']?><br>
                    <?=$vv['home2_s2_tieude2']?>
											</h5>
                    <br/>
                    <span class="author">&mdash; Website: <a href=""> <?=$vv['home2_s2_website']?> </a></span>
                  </div>
                </li>

                 <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="assets/img/3.png" class="img-circle">
                    </div>
                    <!-- <i class="fa fa-quote-left fa-5x"></i> -->
                    <h5>
                    <?=$vv['home2_s3_tieude1']?><br>
                    <?=$vv['home2_s3_tieude2']?>
											</h5>
                    <br/>
                    <span class="author">&mdash; Website: <a href=""> <?=$vv['home2_s3_website']?> </a></span>
                  </div>
                </li>
            
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="section-works" class="section appear clearfix" style="background-color: #f4e6cc;">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp"><?=$vv['home2_part1_tieude1']?></h2>
            <!-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p> -->
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn btn-small" data-filter="*"><?=$vv['home2_part1_tieude2']?></a></li>
            <li><a href="#" class="btn btn-small" data-filter=".tintuc"><?=$vv['home2_part1_tieude3']?></a></li>
            <li><a href="#" class="btn btn-small" data-filter=".sukien"><?=$vv['home2_part1_tieude4']?></a></li>
            <!-- <li><a href="#" class="btn btn-small" data-filter=".hoatdong">Print</a></li> -->
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">


              <?php
                 
                  $sql = "select * from posts where id_nhom=1 || id_nhom=2";
                  $sth = $pdo->prepare( $sql );
                  $sth->execute();
                  $data = $sth->fetchAll( PDO::FETCH_OBJ );
                  // echo "<pre>";
                  // print_r($data);
                  // echo "</pre>";
                  // exit();
                  foreach ( $data as $k => $v )
                  {
              ?>

              <article class="isotopeItem <?php if($v->id_nhom==1){echo 'tintuc';}else{echo 'sukien';} ?>">
                <div class="portfolio-item">
                  <img src="<?=$v->link?>" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="?page=page12&&id=<?=$v->id?>"><?=$v->tieude?></a></h5>
                      <a href="<?=$v->link?>" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <?php
                  }
              ?>

         

            
            </div>

          </div>


        </div>
      </div>

    </div>
  </section>


  <section id="section-about" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp"><?=$vv['home2_part2_tieudeu1']?></h2>
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
            <figure class="member-photo"><a href="?page=page12&&id=<?=$v->id?>"><img style="width: 240px;height: 180px;" src="<?=$v->link ?>" alt=""></a></figure>
            <div class="team-detail">
            <a href="?page=page12&&id=<?=$v->id?>"><h4><?=$v->tieude?></h4></a>
            <!-- <a  href="?page=page12"><span><?=$v->content ?></span></a> -->
            </div>
          </div>
        </div>
        
        <?php } ?>
     


    </div>
  </section>





<section id="section-services" class="section pad-bot30 bg-white" style="background-color: #7b8779;">
    <div class="container">
    <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
              <div class="section-header">
                <h2 class="section-heading animated" data-animation="bounceInUp">Sinh Hoạt Sự Kiện</h2>
                <!-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p> -->
              </div>
            </div>
          </div>
      <div class="row">

      <div class="row">

        <?php
                 
                 $sql = "select * from posts where  id_nhom=2 ORDER BY ngaytao ASC LIMIT 0,6";
                 $sth = $pdo->prepare( $sql );
                 $sth->execute();
                 $data = $sth->fetchAll( PDO::FETCH_OBJ );
                
                 foreach ( $data as $k => $v )
                 {
             ?>
      
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left">
              <!-- <a href="#" class="hi-icon hi-icon-screen">screen</a> -->
      <figure class="member-photo"> <a href="?page=page12&&id=<?=$v->id?>" > ><img style="width: 240px;height: 180px;" src="<?=$v->link?>" alt=""></a></figure>
            </div>
          </div>
          <a href="?page=page12&&id=<?=$v->id?>"><h4 ><?=$v->tieude?></h4></a>
          <a href="?page=page12&&id=<?=$v->id?>"><p style="display: block;width: 100px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;" class="home-color-p"><?=$v->content?></p></a>

          <div class="clear"></div>
        </div>

        <?php
          }
          ?>


       

      </div>
    </div>
  </section>


  <section id="section-services" class="section pad-bot30 bg-white" style="    background-color: #f4e6cc;">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
              <div class="section-header">
                <h2 class="section-heading animated" data-animation="bounceInUp">Chương trình Đào Tạo</h2>
                <!-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p> -->
              </div>
            </div>
          </div>
      <div class="row">

        <?php
                 
                 $sql = "select * from posts where id_nhom=4 ORDER BY ngaytao ASC LIMIT 0,6";
                 $sth = $pdo->prepare( $sql );
                 $sth->execute();
                 $data = $sth->fetchAll( PDO::FETCH_OBJ );
                
                 foreach ( $data as $k => $v )
                 {
             ?>
      
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left">
              <!-- <a href="#" class="hi-icon hi-icon-screen">screen</a> -->
              <figure class="member-photo"> <a href="?page=page12&&id=<?=$v->id?>"><img style="width: 240px;height: 180px;" src="<?=$v->link?>" alt=""></a></figure>
            </div>
          </div>
          <a href="?page=page12&&id=<?=$v->id?>"><h4 ><?=$v->tieude?></h4></a>
          <a href="?page=page12&&id=<?=$v->id?>"><p style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;" class="home-color-p"><?=$v->content?></p></a>

          <div class="clear"></div>
        </div>

        <?php
          }
          ?>


       

      </div>
    </div>
  </section>



   <section id="section-about" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Nghiên Cứu Nghệ Thuật</h2>
            <!-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p> -->
          </div>
        </div>
      </div>

        <?php
                 
                 $sql = "select * from posts where id_nhom=5 ORDER BY ngaytao ASC LIMIT 0,4";
                 $sth = $pdo->prepare( $sql );
                 $sth->execute();
                 $data = $sth->fetchAll( PDO::FETCH_OBJ );
                
                 foreach ( $data as $k => $v )
                 {
             ?>


      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><a href="?page=page12&&id=<?=$v->id?>"><img style="width: 240px;height: 180px;" src="<?=$v->link ?>" alt=""></a></figure>
            <div class="team-detail">
            <a href="?page=page12&&id=<?=$v->id?>"><h4><?=$v->tieude?></h4></a>
            <!-- <a href="?page=page12"><span><?=$v->content ?></span></a> -->
            </div>
          </div>
        </div>
        
        <?php } ?>
     


    </div>
  </section>





  


 <!-- section works -->
 <section id="section-works" class="section appear clearfix" style="background-image: linear-gradient(to right, #dfeadf , rgb(123,135,121));">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp"><?=$vv['home2_part4_tieude1']?></h2>
            <!-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p> -->
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn btn-small" data-filter="*" style="border-radius: 20px;"><?=$vv['home2_part4_tieude2']?></a></li>
            <li><a href="#" class="btn btn-small" data-filter=".tintuc" style="border-radius: 20px;"><?=$vv['home2_part4_tieude3']?></a></li>
            <li><a href="#" class="btn btn-small" data-filter=".sukien" style="border-radius: 20px;"><?=$vv['home2_part4_tieude4']?></a></li>
           
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row" >
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

                 <?php
                 
                 $sql = "select * from posts where 1";
                 $sth = $pdo->prepare( $sql );
                 $sth->execute();
                 $data = $sth->fetchAll( PDO::FETCH_OBJ );
                
                 foreach ( $data as $k => $v )
                 {
             ?>

                <article class="isotopeItem <?php if($v->id_nhom==1){echo "tintuc";} else{ echo "sukien";} ?>">
                  <div class="portfolio-item">
                    <img src="<?=$v->link?>" alt="">
                    <div class="portfolio-desc align-center">
                      <div class="folio-info">
                        <h5><a href="?page=page12&&id=<?=$v->id?>"><?=$v->tieude?></a></h5>
                        <a href="?page=page12&&id=<?=$v->id?>" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                      </div>
                    </div>
                  </div>
                </article>

                 <?php } ?>
              

              

              
            </div>

          </div>


        </div>
      </div>

    </div>
  </section>



  <section id="section-services" class="section pad-bot30 bg-white" style="    background-color: #f4e6cc;">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
              <div class="section-header">
                <h2 class="section-heading animated" data-animation="bounceInUp">Dịch vụ</h2>
                <!-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p> -->
              </div>
            </div>
          </div>
      <div class="row">

        <?php
                 
                 $sql = "select * from posts where id_nhom=6 ORDER BY ngaytao ASC LIMIT 0,6";
                 $sth = $pdo->prepare( $sql );
                 $sth->execute();
                 $data = $sth->fetchAll( PDO::FETCH_OBJ );
                
                 foreach ( $data as $k => $v )
                 {
             ?>
      
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left">
              <!-- <a href="#" class="hi-icon hi-icon-screen">screen</a> -->
              <figure class="member-photo"> <a href="?page=page12"><img style="width: 240px;height: 180px;" src="<?=$v->link?>" alt=""></a></figure>
            </div>
          </div>
          <a href="?page=page12&&id=<?=$v->id?>"><h4 ><?=$v->tieude?></h4></a>
          <a href="?page=page12&&id=<?=$v->id?>"><p style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;" class="home-color-p"><?=$v->content?></p></a>

          <div class="clear"></div>
        </div>

        <?php
          }
          ?>


       

      </div>
    </div>
  </section>


<section id="clients" class="section clearfix bg-white" style="background-image: linear-gradient(to right, #7a8ebb , rgb(76, 56, 73));">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-2 align-center">
            <a href=""><img alt="logo" src="<?=$vv['home2_part5_item1_link']?>" class="logo" ></a>
            </div>

            <div class="col-sm-2 align-center">
            <a href=""><img alt="logo" src="<?=$vv['home2_part5_item2_link']?>" class="logo" ></a>
            </div>

            <div class="col-sm-2 align-center">
            <a href=""><img alt="logo" src="<?=$vv['home2_part5_item3_link']?>" class="logo" ></a>
            </div>

           <div class="col-sm-2 align-center">
           <a href=""><img alt="logo" src="<?=$vv['home2_part5_item4_link']?>" class="logo" ></a>
            </div>

            <div class="col-sm-2 align-center">
            <a href=""><img alt="logo" src="<?=$vv['home2_part5_item5_link']?>" class="logo"></a>
            </div>

            <div class="col-sm-2 align-center">
            <a href=""><img alt="logo" src="<?=$vv['home2_part5_item6_link']?>" class="logo"></a>
          </div>
        </div>
      </div>
    </div>
  </section>


<section id="parallax1" class="section" data-stellar-background-ratio="0.5" style="background-position: 0% -107.5px;">
    <div class="container">
      <div class="row appear stats">
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <!-- <i class="fa fa-coffee fa-5x"></i> -->
              <!-- <i class="fas fa-street-view"></i> -->
            </div>
            <strong id="counter-coffee" class="number"><?=$vv['home2_part6_view']?></strong><br>
            <span class="text"><?=$vv['home2_part6_text_view']?></span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <!-- <i class="fa fa-music fa-5x"></i> -->
              <!-- <i class="fas fa-long-arrow-alt-down"></i> -->
            </div>
            <strong id="counter-music" class="number"><?=$vv['home2_part6_follow']?></strong><br>
            <span class="text"><?=$vv['home2_part6_text_follow']?></span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <!-- <i class="fa fa-clock-o fa-5x"></i> -->
              <!-- <i class="fas fa-share-alt-square"></i> -->
            </div>
            <strong id="counter-clock" class="number"><?=$vv['home2_part6_share']?></strong><br>
            <span class="text"><?=$vv['home2_part6_text_share']?></span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <!-- <i class="fa fa-heart fa-5x"></i> -->
              <!-- <i class="fas fa-linkedin"></i> -->
            </div>
            <strong id="counter-heart" class="number"><?=$vv['home2_part6_like']?></strong><br>
            <span class="text"><?=$vv['home2_part6_text_like']?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  











































   

  