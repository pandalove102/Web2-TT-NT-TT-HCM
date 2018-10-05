<style>
    
#page5-pic1{
    background-size: cover;
    align-items: center;
    max-width: 100%;
    position: relative;
    top: 110px;
    left: 100px;
    border-radius: 25px;
}


.heading{
    position: relative;
    top: 120px;
    left: 40px;
    font-size: 30px;
    max-width: 80%;

}

.text-justify-par5{
    position: relative;
    top: 120px;
    max-width: 80%;
    left: 40px;
    color: #7b8779;
    font-family: sans-serif;
    text-align: justify;
    min-height: 150vh;
    font-size: 17px;

}
#trang5{
    background-color: #f4e6cc;
}
@media (min-width: 1281px) {
    .text-justify-par5{
        min-height: 70vh;

    }
  
}
@media (min-width: 1025px) and (max-width: 1280px) {
  .text-justify-par5{
    min-height: 70vh;
        
    }
  
}

@media (min-width: 768px) and (max-width: 1024px) {
    .text-justify-par5{
        min-height: 70vh;
        
    }
}

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
    .text-justify-par5{
        min-height: 70vh;
        
    }
  
}
@media (min-width: 481px) and (max-width: 767px) {
    .text-justify-par5{
        min-height: 80vh;
        
    }
  
  
}

@media (min-width: 320px) and (max-width: 480px) {
    .text-justify-par5{
        min-height: 110vh;

        
    }
}
</style>
<section id="trang5" >
    <div class="container">
        <div style="min-height:35vh;">
                <div class="row" style="background-color:#f4e6cc;">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4" style="background-color:#f4e6cc;padding:0px;">
                        <div class="row" style="background-color:#f4e6cc;padding-bottom:0px;">
                            <div class="col-6 col-md-6">
                                <div class="card"><img id="page5-pic1" class="img-fluid card-img-top w-100 d-block" src="<?=$vv['page5_pic1']?>" id="page5-pic1"></div>
                            </div>
                        </div>
                        <div class="row" style="background-color:#f4e6cc;padding-bottom:0px;margin:0px;margin-bottom:30px;height:auto;">
                            <div class="col-12 col-md-12">
                                <h6 class="heading"><?=$vv['page5_tieude1']?><br></h6>
                                <p class="text-justify-par5"><?=$vv['page5_content1']?>&nbsp;<br></p>
                            </div>
                            <!-- <div class="col-6 col-md-6" style="padding:0;">
                                <h6 class="heading"><?=$vv['page5_tieude2']?><br></h6>
                                <p class="text-justify-par5"><?=$vv['page5_content2']?>&nbsp;<br></p>
                            </div> -->
                        </div>
                        <!-- <div class="row" style="background-color:#f4e6cc;">
                            <div class="col-12 col-md-12" style="padding:0px;">
                                <div class="card"><img class="img-fluid card-img-top w-100 d-block" src="assets/img/brochure-tradiontal-art-5.4.jpg" id="page5-pic2"></div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8" style="padding:0;background-color:#f4e6cc;"><img class="img-fluid" src="<?=$vv['page5_pic2']?>" id="page5-pic1"></div>
                </div>
            </div>

    </div>
        
    </section>