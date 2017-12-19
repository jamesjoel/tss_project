<?php
include("header.php");
?>
<!-- Contact Section -->
<div id="about-section">
  <div class="container">
    
    <div class="section-title center">
      <h2>Contact Us</h2>
      <hr>
    </div>
    
    <div class="row">    
      <div class="col-sm-4">
        <h4>Contact info</h4>
        <div class="space"></div>
        <p><i class="fa fa-map-marker"></i>4321 California St,<br>
          San Francisco, CA 12345</p>
        <div class="space"></div>
        <p><i class="fa fa-envelope-o"></i>info@company.com</p>
        <div class="space"></div>
        <p><i class="fa fa-phone"></i>+1 123 456 1234</p>
      </div>
      <div class="col-sm-8">
        <h4>Leave us a message</h4>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default">Send Message</button>
        </form>
      </div>
    </div>

  </div>
</div>
<?php
include("footer.php");
?>