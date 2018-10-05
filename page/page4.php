<style>
#page4-pic1{
    margin-top: 100px;
    background-size: cover;
    align-items: center;
    max-width: 100%;
}
.heading4{
    position: relative;
    left: 20px;
    top: 120px;
    font-size: 30px;
    max-width: 90%;

}
.text-justify-par4{
    position: relative;
    top: 120px;
    left: 20px;
    max-width: 90%;
    font-family: sans-serif;
    text-align: justify;

}

@media (min-width: 1281px) {
    .text-justify-par4{
        height:35vh;

}
  
}
@media (min-width: 1025px) and (max-width: 1280px) {
    .text-justify-par4{
        height:45vh;

}

}

@media (min-width: 768px) and (max-width: 1024px) {
    .text-justify-par4{
        height:55vh;

}
  
}

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
    .text-justify-par4{
        height:55vh;

}
  
}
@media (min-width: 481px) and (max-width: 767px) {
    .text-justify-par4{
        height:60vh;

}
  
}

@media (min-width: 320px) and (max-width: 480px) {
    .text-justify-par4{
        height:80vh;

}
}

</style>
<section id="trang4" style="    background-color: #f4e6cc;">
    <div class="container">
        <div class="row" style="background-color:#f4e6cc;">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4" style="background-color:#f4e6cc;">
                    <div class="row" style="background-color:#f4e6cc;padding-bottom:40px;">
                        <div class="col-12 col-md-12">
                            <h6 class="heading4"><?=$vv['page4_new_tieude1']?>&nbsp;<br></h6>
                            <p  class="text-justify-par4"><?=$vv['page4_new_content1']?>&nbsp;</p>
                        </div>
                      
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8" style="padding:0;background-color:#f4e6cc;"><img class="img-fluid" src="<?=$vv['page4_new_pic1']?>" id="page4-pic1"></div>
            </div>
    </div>
   
    </section>