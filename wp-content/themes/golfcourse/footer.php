<footer class="footer" role="contentinfo">
  <div class="th-upper-footer">
    <div class="container">
      <div class="footer-widgets row th-widget-area">
        <div class="footer-area-1 col-md-3 col-sm-6">
          <section class="widget text-6 widget_text">
            <div class="widget-inner">
              <h3 class="widget-title">About us</h3>
              <div class="textwidget">
                <p>Loem&nbsp;ipsum&nbsp;Loem&nbsp;ipsum</p>
                <p>Loem&nbsp;ipsum&nbsp;Loem&nbsp;ipsum</p>
                <p>Loem&nbsp;ipsum&nbsp;Loem&nbsp;ipsumLoem</p>
                <p>&nbsp;</p>
              </div>
            </div>
          </section>
        </div>
        <div class="footer-area-2 col-md-3 col-sm-6">
          <section class="widget text-5 widget_text">
            <div class="widget-inner">
              <h3 class="widget-title">Contact us</h3>
              <div class="textwidget">
                <p>Mail : admin@gmail.com</p>
                <p>Phone no: 1234567890</p>
              </div>
            </div>
          </section>
        </div>
        <div class="footer-area-3 col-md-3 col-sm-6">
          <section class="widget text-4 widget_text">
            <div class="widget-inner">
              <h3 class="widget-title">Hours of Operation</h3>
              <div class="textwidget">
                <p>Mon-Wed: 6:00am - 8:00pm</p>
                <p>Thurs-Fri: 6:30am - 7:30pm</p>
                <p>Sat: 7:00am - 9:00pm</p>
                <p>Sun: 8:00am - 8:00pm</p>
              </div>
            </div>
          </section>
        </div>
        <div class="footer-area-4 col-md-3 col-sm-6">
          <section class="widget recent-posts-6 widget_recent_entries">
            <div class="widget-inner">
              <h3 class="widget-title">Recent Posts</h3>
              <ul>
                <li> <a href="#">Hello world!</a> </li>
                <li> <a href="#">Must Have Golf Gadgets For the Serious Player</a> </li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="th-lower-footer">
    <div class="th-separator"></div>
    <div class="container">
      <div class="footer-widgets row th-widget-area">
        <div class="footer-area-1 col-sm-6">
          <section class="widget media_image-3 widget_media_image">
            <div class="widget-inner"></div>
          </section>
        </div>
        <div class="footer-area-2 col-sm-6">
          <section class="widget widget-social th-social-align-right">
            <div class="widget-inner pull-right">
              <div class="soc-widget"> <a target="_blank" href="#0"><i class="fa fa-facebook"></i></a><a target="_blank" href="#0"><i class="fa fa-twitter"></i></a><a target="_blank" href="#0"><i class="fa fa-instagram"></i></a><a href="#0"><i class="fa fa-pinterest"></i></a> </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
<?php if(is_user_logged_in()){ ?>
<script type="text/javascript">
  jQuery(".navbar-nav").append("<li><a href='<?php echo site_url('user-panel'); ?>'>User Dashboard</a></li>");
</script>
<?php } ?>
</html>