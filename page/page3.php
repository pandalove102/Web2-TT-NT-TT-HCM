<style>
/* #page3-pic1{
    border-radius: 0px;
    position: relative;
    top: 500px;
    left: 85%;
    max-width: 100%;
} */
#section-page3{
  /* background-image: linear-gradient(to right, #dfeadf , rgb(123,135,121)); */
  background-color: #dfebdf;
}
.page3-para{
  text-align: justify;
}
.page3-pic1{
  position: relative;
    top: 60px;
    left: 45%;
}
.page3-pic2{
  position: relative;
    left: 47%;
    bottom: 0px;
    max-width: 100px;

}
#page3-pic3{
    position: relative;
    top: 0px;
    left: 0%;
    margin-top: 30px;

}
@media (min-width: 1281px) {
  #page3-pic3{
    top: 50px;
    left: 25%;
   

}
  
}
@media (min-width: 1025px) and (max-width: 1280px) {
  #page3-pic3{
    top: 50px;
    left: 25%;
    margin-top: 30px;

}
  
}

@media (min-width: 768px) and (max-width: 1024px) {
  #page3-pic3{
    top: 0px;
    left: 25%;
    max-width: 60%;
    margin-top: 30px;

}
  
}

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  #page3-pic3{
    top: 0px;
    left: 25%;
    max-width: 60%;

}
  
  
}
@media (min-width: 481px) and (max-width: 767px) {
  #page3-pic3{
    top: 0px;
    left: 15%;
    max-width: 70%;
    margin-top: 30px;

}
.page3-pic2 {
    left: 35%;
}
  
  
}

@media (min-width: 320px) and (max-width: 480px) {
  #page3-pic3{
    top: 0px;
    left: 25%;
    max-width: 85%;
    margin-top: 30px;
}

}
</style>
<section id="section-page3" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="col-lg-6">
            <div class="page3-pic1">
                <img id="page3-pic1" alt="" src="<?=$vv['page3_pic1']?>" class="img-circle">
            </div>
            <div class="row" style="margin-top: 100px;">
              <div class="col-lg-12">
                <h3 class="text-bold"><?=$vv['page3_tieude1']?></h3>
                <p class="page3-para"><?=$vv['page3_content1']?></p>
                <div class="clear"></div>
              </div>

              <!-- <div class="col-lg-6">
                <h3 class="text-bold">BOUT US </h3>
                <p class="page3-para">The Traditional Arts Center (under the HCMC Center for Literature and Arts) was established with the aim of preserving and promoting the traditional arts, contributing to the Vietnamese advanced boldly culture and national identity. With that mission, the center organizes various activities such as researching - preservation, training and nurture the talents as well as popularizing the elite artistic values to communities and international friends..</p>
                <div class="clear"></div>
              </div> -->
            </div>
            <div class="row" style="margin-top: 100px;">
                <div class="col-lg-12">
                <h3 class="text-bold"><?=$vv['page3_tieude2']?> <br><?=$vv['page3_tieude3']?></h3>
                <p class="page3-para"><?=$vv['page3_content2']?></p>
                <div class="clear"></div>
              </div>

              <!-- <div class="col-lg-6"> -->
                <!-- <h3 class="text-bold">DIRECTION AND AIM</h3> -->
                <!-- <p class="page3-para">Organizing traditional art programs - events in which contain valuable and aesthetic content to evoke the love of Vietnamese homeland and people.
      Along with previous generations of artist, contributing to training and inspiring the young generation for their understanding and appreciation the heritage value of Vietnamese traditional arts.
      Step by step forming the center for traditional art activities for Ho Chi Minh City and Southern region.</p> -->
                <!-- <div class="clear"></div> -->
              <!-- </div> -->
              <div class="page3-pic2">
                <img  alt="" src="<?=$vv['page3_pic2']?>">
              </div>
             
            </div>
      </div> 
      <div class="col-lg-6">
        <div class="col-lg-6">
              <div >
                    <img id="page3-pic3" alt="" src="<?=$vv['page3_pic3']?>" class="img-circle">
              </div>
            <div class="clear"></div>
          </div>
      </div>   
    </div>
  </section>