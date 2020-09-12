<!---footer.php--->
</div><!-- /.row -->
</main><!-- /.container -->
<footer class="footer mt-5">
  <div class="container">
    <center>
      &copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?>
      <!-- Scroll to top -->
      <!-- <a href="#" class="float-right">Back to top &#8657;</a> -->
      <a value="Scroll Top" class="btnScrollTop" onclick="scrolltotop()"><span class="glyphicon glyphicon-upload"
          aria-hidden="true"></span></a>
    </center>
  </div>
</footer>
<!---end -footer.php--->


<script type="text/javascript">
(function() {
  var options = {
    whatsapp: "+628119991779", // WhatsApp number
    line: "//line.me/ti/p/~masrianto", // Line QR code URL
    facebook: "//www.facebook.com/lakippusat", // Facebook URL
    email: "info@lakipcenter.com", // Email
    sms: "+6285315448868", // Sms phone number
    call: "+6285315448868", // Call phone number
    company_logo_url: "//wp-content/themes/lakipthemes2020/assets/brand/bootstrap-solid.svg", // URL of company logo (png, jpg, gif)
    greeting_message: "Hai, apa yang bisa Saya bantu untuk Kamu? Kirimkan pertanyaan Anda dan Kami akan segera membalasnya.", // Text of greeting message
    call_to_action: "WA/Line/SMS/Telp", // Call to action
    button_color: "#00E676", // Color of button
    position: "left", // Position may be 'right' or 'left'
    order: "whatsapp,line,facebook,sms,call,email", // Order of buttons
    ga: true, // Google Analytics enabled
    branding: false, // Show branding string
    mobile: true, // Mobile version enabled
    desktop: true, // Desktop version enabled
    greeting: true, // Greeting message enabled
    shift_vertical: 0, // Vertical position, px
    shift_horizontal: 0, // Horizontal position, px
    domain: "dumetschool.com", // site domain
    key: "1QRo1ZQ7TrWm8hWd-AenTw", // pro-widget key
  };
  var proto = document.location.protocol,
    host = "whatshelp.io",
    url = proto + "//static." + host;
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = url + '/widget-send-button/js/init.js';
  s.onload = function() {
    WhWidgetSendButton.init(host, proto, options);
  };
  var x = document.getElementsByTagName('script')[0];
  x.parentNode.insertBefore(s, x);
})();
</script>
<?php wp_footer(); ?>
<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> -->
<script src="<?php bloginfo('template_url'); ?>/bootstrap-5.0.0-alpha1/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>

</body>

</html>