<style type="text/css">
#page6-pic1{
    max-width: 85%;
    position: relative;
    top: 120px;
    left: 25%;
    border-radius: 25px;
}
#page6-pic2{
    max-width: 80%;
}
.trang6-heading{
    font-size: 25px;
    max-width: 92%;
    text-align: left;
    position: relative;
    top: 100px;
    left: 5%;
}
.text-justify-par6{
    text-align: justify;
    padding-left: 60px;
    max-width: 85%;
    font-size: 15px;
    font-family: sans-serif;
    color: #020202;
    position: relative;
    top: 100px;
    min-height: 150vh;
}
#trang6 {
    background-color: #f4e6cc;
}
@media (min-width: 1281px) {
.text-justify-par6{
    min-height: 40vh;
}
  
}
@media (min-width: 1025px) and (max-width: 1280px) {
    .text-justify-par6{
    min-height: 40vh;
}
  
}

@media (min-width: 768px) and (max-width: 1024px) {
    .text-justify-par6{
    min-height: 40vh;
}
#page6-pic1 {
    left: 8%;
}
}

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
    .text-justify-par6{
    min-height: 40vh;
}
#page6-pic1 {
    left: 13%;
}
  
}
@media (min-width: 481px) and (max-width: 767px) {
    .text-justify-par6{
        min-height: 66vh;
}
#page6-pic1 {
    left: 6%;
}
}

@media (min-width: 320px) and (max-width: 480px) {
    .text-justify-par6{
    min-height: 70vh;
}
#page6-pic1 {
    left: 6%;
}
}
</style>
<section id="trang6">
    <div class="container">
        <div class="row" style="background-color:#f4e6cc;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4" style="background-color:#f4e6cc;padding:0px;">
                <div class="row" style="background-color:#f4e6cc;padding-bottom:40px;">
                    <div class="col-6 col-md-6">
                        <div class="card"><img class="card-img-top w-100 d-block" src="<?=$vv['page6_pic1']?>" id="page6-pic1" ></div>
                    </div>
                </div>
                <div class="row" style="background-color:#f4e6cc;padding-bottom:0px;min-height:65vh;">
                    <div class="col-12 col-md-12">
                        <h6 class="trang6-heading"><?=$vv['page6_new_tieude1']?>&nbsp;<br></h6>
                        <p class="text-justify-par6"><?=$vv['page6_new_content1']?>&nbsp;<br></p>
                    </div>
                    <!-- <div class="col-6 col-md-6" style="padding:0;">
                        <h6 class="trang6-heading"><?=$vv['page7_tieude2']?><br></h6>
                        <p class="text-justify-par6">T<?=$vv['page7_content2']?>&nbsp;<br></p>
                    </div> -->
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8" style="padding:0;background-color:#f4e6cc;"><img src="<?=$vv['page6_pic2']?>" style="max-width:100%" id="page6-pic2"></div>
        </div>
    </div>
       
    </section>