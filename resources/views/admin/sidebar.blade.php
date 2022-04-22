<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="#" class="b-brand"> 
                

                <span class="b-title" STYLE="font-size:120%">LJ University</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                
               
               
                @can('isAdmin')
                <li data-username="form elements advance componant validation masking wizard picker select"
                    class="nav-item">
                    <a href="{{url('/addfaculty')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-file-text"></i></span><span class="pcoded-mtext">Add
                            Faculty</span></a>
                </li>
                
                <li data-username="form elements advance componant validation masking wizard picker select"
                    class="nav-item">
                    <a href="{{url('/addstudent')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-file-text"></i></span><span class="pcoded-mtext">Add
                            Student</span></a>
                </li>

                <li data-username="form elements advance componant validation masking wizard picker select"
                    class="nav-item">
                    <a href="{{url('/showfaculty')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-file-text"></i></span><span class="pcoded-mtext">Show 
                            Faculty</span></a>
                </li>

                <li data-username="form elements advance componant validation masking wizard picker select"
                    class="nav-item">
                    <a href="{{url('/showstudent')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-file-text"></i></span><span class="pcoded-mtext">Show 
                            Student</span></a>
                </li>


                
                <li data-username="form elements advance componant validation masking wizard picker select"
                    class="nav-item">
                    <a href="{{url('/addsubject')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-file-text"></i></span><span class="pcoded-mtext">Add
                            Subject</span></a>
                </li>
                @endcan
                @can('isFaculty')
                <li data-username="form elements advance componant validation masking wizard picker select"
                    class="nav-item">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-file-text"></i></span><span class="pcoded-mtext">
                            Add Mark</span></a>
                </li>
                @endcan
                
            </ul>
        </div>
    </div>
</nav>