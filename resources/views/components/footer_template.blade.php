<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

</div>

<footer class="footer text-light">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="index.php">
            Task Management System
            </a>
          </li>
          <li>
            <a href="about-us.php">
              About Us
            </a>
          </li>
          <li>
            <a href="{{route('task.taksList')}}">
              Tasks
            </a>
          </li>
          {{-- <li>
            <a href="reports.php">
              Reports
            </a>
          </li> --}}
        </ul>
      </nav>
      <div class="copyright float-right">
      Copyright
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script> Task Management System
      </div>
    </div>
  </footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{asset('assets/js/plugins/sweetalert2.js')}}"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('assets/js/plugins/nouislider.min.js')}}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{asset('assets/js/plugins/arrive.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/material-dashboard.js?v=2.2.2" type="text/javascript')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<!--  Plugin for Sweet Alert -->
<script src="{{asset('assets/js/sweetalert2.min.js')}}"></script>
<script>
$(document).ready(function() {
  $().ready(function() {
    demo.showSwal();
    $sidebar = $('.sidebar');

    $sidebar_img_container = $sidebar.find('.sidebar-background');

    $full_page = $('.full-page');

    $sidebar_responsive = $('body > .navbar-collapse');

    window_width = $(window).width();

    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

    if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
      if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
        $('.fixed-plugin .dropdown').addClass('open');
      }

    }

    $('.fixed-plugin a').click(function(event) {
      // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
      if ($(this).hasClass('switch-trigger')) {
        if (event.stopPropagation) {
          event.stopPropagation();
        } else if (window.event) {
          window.event.cancelBubble = true;
        }
      }
    });

    $('.fixed-plugin .active-color span').click(function() {
      $full_page_background = $('.full-page-background');

      $(this).siblings().removeClass('active');
      $(this).addClass('active');

      var new_color = $(this).data('color');

      if ($sidebar.length != 0) {
        $sidebar.attr('data-color', new_color);
      }

      if ($full_page.length != 0) {
        $full_page.attr('filter-color', new_color);
      }

      if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.attr('data-color', new_color);
      }
    });

    $('.fixed-plugin .background-color .badge').click(function() {
      $(this).siblings().removeClass('active');
      $(this).addClass('active');

      var new_color = $(this).data('background-color');

      if ($sidebar.length != 0) {
        $sidebar.attr('data-background-color', new_color);
      }
    });

    $('.fixed-plugin .img-holder').click(function() {
      $full_page_background = $('.full-page-background');

      $(this).parent('li').siblings().removeClass('active');
      $(this).parent('li').addClass('active');


      var new_image = $(this).find("img").attr('src');

      if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
        $sidebar_img_container.fadeOut('fast', function() {
          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $sidebar_img_container.fadeIn('fast');
        });
      }

      if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

        $full_page_background.fadeOut('fast', function() {
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          $full_page_background.fadeIn('fast');
        });
      }

      if ($('.switch-sidebar-image input:checked').length == 0) {
        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
      }

      if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
      }
    });

    $('.switch-sidebar-image input').change(function() {
      $full_page_background = $('.full-page-background');

      $input = $(this);

      if ($input.is(':checked')) {
        if ($sidebar_img_container.length != 0) {
          $sidebar_img_container.fadeIn('fast');
          $sidebar.attr('data-image', '#');
        }

        if ($full_page_background.length != 0) {
          $full_page_background.fadeIn('fast');
          $full_page.attr('data-image', '#');
        }

        background_image = true;
      } else {
        if ($sidebar_img_container.length != 0) {
          $sidebar.removeAttr('data-image');
          $sidebar_img_container.fadeOut('fast');
        }

        if ($full_page_background.length != 0) {
          $full_page.removeAttr('data-image', '#');
          $full_page_background.fadeOut('fast');
        }

        background_image = false;
      }
    });

    $('.switch-sidebar-mini input').change(function() {
      $body = $('body');

      $input = $(this);

      if (md.misc.sidebar_mini_active == true) {
        $('body').removeClass('sidebar-mini');
        md.misc.sidebar_mini_active = false;

        if ($(".sidebar").length != 0) {
          var ps = new PerfectScrollbar('.sidebar');
        }
        if ($(".sidebar-wrapper").length != 0) {
          var ps1 = new PerfectScrollbar('.sidebar-wrapper');
        }
        if ($(".main-panel").length != 0) {
          var ps2 = new PerfectScrollbar('.main-panel');
        }
        if ($(".main").length != 0) {
          var ps3 = new PerfectScrollbar('main');
        }

      } else {

        if ($(".sidebar").length != 0) {
          var ps = new PerfectScrollbar('.sidebar');
          ps.destroy();
        }
        if ($(".sidebar-wrapper").length != 0) {
          var ps1 = new PerfectScrollbar('.sidebar-wrapper');
          ps1.destroy();
        }
        if ($(".main-panel").length != 0) {
          var ps2 = new PerfectScrollbar('.main-panel');
          ps2.destroy();
        }
        if ($(".main").length != 0) {
          var ps3 = new PerfectScrollbar('main');
          ps3.destroy();
        }


        setTimeout(function() {
          $('body').addClass('sidebar-mini');

          md.misc.sidebar_mini_active = true;
        }, 300);
      }

      // we simulate the window Resize so the charts will get updated in realtime.
      var simulateWindowResize = setInterval(function() {
        window.dispatchEvent(new Event('resize'));
      }, 180);

      // we stop the simulation of Window Resize after the animations are completed
      setTimeout(function() {
        clearInterval(simulateWindowResize);
      }, 1000);

    });
  });
});
</script>
<script>
$(document).ready(function() {
  md.checkFullPageBackgroundImage();
});
</script>
</body>

</html>
