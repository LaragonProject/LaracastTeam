<!DOCTYPE html>
<html>

@include('user.headtagcode')
<body>

  <div class="hero_area">
    <!-- header section strats -->
    @include('user.header')
    <!-- end header section -->


    <!-- slider section -->
      @include('user.welslider')
    <!-- end slider section -->

  </div>



  <!-- about section -->
        @include('user.section')
  <!-- end about section -->
   



  <!-- teacher section -->
      @include('user.ourteam')
  <!-- end teacher section -->




  <!-- client section -->
      @include('user.client')
  <!-- end client section -->
<br><br><br><br>




  <!-- contact section -->
 
  <!-- end contact section -->

  
 
  <!-- footer section -->

  @include('user.footer')

   <!-- End footer section -->

  <!-- jQery -->
  <script src="user/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="user/js/bootstrap.js"></script>
  <!-- owl carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- custom js -->
  <script src="user/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>