<!DOCTYPE html>
<html>

@include('user.headtagcode')

<style>
  .manage{

   margin-top:2%;
   margin-bottom:2%;
   margin-right: 6%;
   margin-left: 6%;
   
  }
  .borderclass{
    margin-top:2%;
   margin-bottom:2%;
   margin-right: 6%;
   margin-left: 6%;
    border-top: solid 3px red;
    border-bottom: solid 3px red;
  }
</style>
<body>

  <div class="hero_area">
    <!-- header section strats -->
    @include('user.header')
    <!-- end header section -->

  

<html>
<body>
  
  
  <div class="table-responsive">
    <div class="borderclass">
    <div class="manage">
    <center><u><h2 style="margin-top:30px;">Student Marksheet</h2></u></center><br/><br/>
  <table class="table table-bordered table-striped table-dark"   height="250px" >
   
    <thead>
      <tr>
        <th width="100" style="text-align:center" scope="col">ER NO</th>
        <th width="200" style="text-align:center" scope="col">NAME</th>
        <th width="180" style="text-align:center" scope="col">SUBJECT CODE</th>
        <th width="150" style="text-align:center" scope="col">PHP</th>
        <th width="150" style="text-align:center" scope="col">JAVA</th>
        <th width="150" style="text-align:center" scope="col">RDBMS</th>
        <th width="150" style="text-align:center" scope="col">INTERNAL MARK</th>
        <th width="150" style="text-align:center" scope="col">EXTERNAL MARK</th>
        <th width="150" style="text-align:center" scope="col">Total</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th style="text-align:center" scope="row">1</th>
        <td style="text-align:center">Shyam</td>
        <td style="text-align:center">obf45</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">41</td>
        <td style="text-align:center">55</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">58</td>
        <td style="text-align:center">120</td>

      </tr>
      <tr>
        <th style="text-align:center" scope="row">2</th>
        <td style="text-align:center">Jimi</td>
        <td style="text-align:center">obf45</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">41</td>
        <td style="text-align:center">55</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">58</td>
        <td style="text-align:center">150</td>
        
      </tr>
      <tr>
        <th style="text-align:center" scope="row">2</th>
        <td style="text-align:center">Jimi</td>
        <td style="text-align:center">obf45</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">41</td>
        <td style="text-align:center">55</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">58</td>
        <td style="text-align:center">880</td>

      </tr>
      <tr>
        <th style="text-align:center" scope="row">3</th>
        <td style="text-align:center">Yash</td>
        <td style="text-align:center">obf45</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">41</td>
        <td style="text-align:center">55</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">58</td>
        <td style="text-align:center">140</td>

      </tr>
      <tr>
        <th style="text-align:center" scope="row">4</th>
        <td style="text-align:center">Raj</td>
        <td style="text-align:center">obf45</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">41</td>
        <td style="text-align:center">55</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">58</td>
        <td style="text-align:center">150</td>

      </tr>
      <tr>
        <th style="text-align:center" scope="row">5</th>
        <td style="text-align:center">Bhavya</td>
        <td style="text-align:center">obf45</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">41</td>
        <td style="text-align:center">55</td>
        <td style="text-align:center">65</td>
        <td style="text-align:center">58</td>
        <td style="text-align:center">150</td>

      </tr>
    </tbody>
  </table>
</div>
    </div>
  </div>
</body>
</html>


 

  






  
 
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