<!-- map -->
  <section id="section-map" class="clearfix">
    <!-- <div id="google-map" data-latitude="40.713417" data-longitude="-74.0092125"></div> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d501726.4604547036!2d106.41503136618181!3d10.754666396644348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1537664403200" width="1920" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>

  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp"><?=$vv['page13_tieude']?></h2>
            <!-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="cform" id="contact-form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" class="contactForm">

              <div class="field your-name form-group">
                <input type="text" name="name" placeholder="<?=$vv['page13_tieude']?>" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
              </div>
              <div class="field your-email form-group">
                <input type="text" name="email" placeholder="<?=$vv['page13_placeholder_text_email']?>" class="cform-text" size="40" data-rule="email" data-msg="Please enter a valid email">
                <div class="validation"></div>
              </div>
              <div class="field subject form-group">
                <input type="text" name="subject" placeholder="<?=$vv['page13_placeholder_text_subject']?>" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validation"></div>
              </div>

              <div class="field message form-group">
                <textarea name="message" class="cform-textarea" cols="40" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validation"></div>
              </div>

              <div class="send-btn">
                <input type="submit" value="<?=$vv['page13_placeholder_text_sendmessage']?>" class="btn btn-theme">
              </div>

            </form>
          </div>
        </div>
        
      </div>

    </div>
  </section>