<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>contact</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>
                Kp. Cibitung Rawa Citra RT.003 RW.03,<br>Kel. Telaga Asih, Kec. Cikarang Barat,<br>Kab. Bekasi, Jawa Barat, Indonesia 17530
              </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><br>+62 21 89521220</p>
              <p>+62 21 22137694</p>
              <p>+62 21 22137450</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p>pt.kimusuksesabadi@yahoo.co.id</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="<?=base_url("main/notify")?>" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" data-rule="minlen:4" data-msg="Minimal 4 karakter" required />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Email tidak valid" required />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Minimal 8 karakter subjek" required />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Pesan belum terisi" placeholder="Message" required ></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">SUBMIT</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->