
<html>

<head>

    
    <title>LJ University</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

        

<!-- Favicon icon -->
<link rel="icon" href="admin/assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="admin/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="admin/assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="admin/assets/css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

    <style>

form{

margin-left:500px;
margin-right:500px;
margin-top:20px;

}

    </style>
    </head>
    <body>                                              
                                                 
    <!-- <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- [ Main Content ] start -->
                                <!-- <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">

                                            <div class="card-body"> --> 
                                                <!-- <h5>Enter Student Details</h5>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    @if(Session::get('success'))
                                                    <div class="alert alert-success">
                                                        {{ Session::get('success')}}
                                                    </div>
                                                    @endif

                                                    @if(Session::get('fail'))
                                                    <div class="alert alert-danger">
                                                        {{ Session::get('fail')}}
                                                    </div>
                                                    @endif -->



                                                    @if(!empty($student))
                                                       
                                                        @foreach($student as $students)
                                                           
                                                        <form class="manage" action="{{url('/updatee',$students->id)}}" method="post" >
                                                            @csrf

                                                            @method('PATCH')
                                                            <br> <h2>Edit students Data</h2> <br>
                                                           
                                                            
                                                                <input type="hidden" class="form-control"
                                                                    id="exampleInputEmail2" name="user_id" value="{{$students->user_id}}"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Enter email">

                                                                                                                       
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Enrollment
                                                                    Number</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="Enter Enrollment Number"
                                                                    name="enrollmentnumber" value="{{$students->enrollmentnumber}}">
                                                                @error('enrollmentnumber')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Select Semester</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1" name="semester">
                                                                    
                                                                    <option value="{{$students->semester}}" >{{$students->semester}}</option>
                                                                    <option value="2" >2</option>
                                                                    <option value="3" >3</option>
                                                                    <option value="4" >4</option>
                                                                    <option value="5" >5</option>
                                                                    <option value="6" >6</option>
                                                                </select>

                                                                @error('division')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="Enter email" name="email" value="{{$students->email}}">
                                                                @error('email')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="exampleInputPassword1" placeholder="Password"
                                                                    name="password" value="{{$students->password}}">
                                                                @error('password')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                                                                                
                                                                                                                  
                                                            <div class="form-group">
                                                                <label>Enter Roll Number</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Roll Number"
                                                                    name="rollnumber" value="{{$students->rollnumber}}">
                                                                @error('rollnumber')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Select Your Division</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1" name="division" >
                                                                   
                                                                    <!-- <option>Select Division</option> -->
                                                                    <option value="{{$students->division}} ">{{$students->division}}</option>
                                                                    <option value="B">B</option>
                                                                    <option value="C">C</option>
                                                                    <option value="D">D</option>
                                                                    <option value="E">E</option>
                                                                </select>
                                                                @error('division')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Your Full Name</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Name" name="fullname" value="{{$students->name}}">
                                                                @error('fullname')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Select
                                                                    Department</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1" name="department">
                                                                    
                                                                    <!-- <option>Select Department</option> -->
                                                                    <option value="{{$students->department}} ">{{$students->department}}</option>
                                                                    <option value="imca">IMCA</option>
                                                                </select>
                                                                @error('department')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
</br>
                                                            <button type="submit"
                                                                class="btn btn-primary">Update</button>
                                                          @endforeach
                                                          @endif
                                                        </form>
                                                    
                 
    </body>
    </html>
