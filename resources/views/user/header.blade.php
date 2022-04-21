<header class="header_section ">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="#">
        <span>
         LJ University
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('homepage')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            @if(Auth::user())
            <li class="nav-item">
              <a class="nav-link" href="{{url('showmarksheet')}}">Student Mark</a>
            </li>
            @endif
            <!-- <li class="nav-item">
              <a class="nav-link" href="course.html">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="teacher.html">Teachers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>  -->
          </ul>
        </div>
        <div class="quote_btn-container">
        @if(Route::has('login'))

           @auth 

          
           <x-app-layout>
                             <!-- user logged -->
           </x-app-layout>
           @else
          <a href="{{route('login')}}">
            
            <span>
              Login
            </span>
            <i class="fa fa-user" aria-hidden="true"></i>
          </a>

          <!-- <a href="{{route('register')}}">
            
            <span>
            Register
            </span>
            <i class="fa fa-user" aria-hidden="true"></i>
          </a> -->
          @endauth
            @endif
          
        </div>
      </div>
    </nav>
  </div>
</header>