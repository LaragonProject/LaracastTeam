
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
                                                 
                                                    @if(!empty($faculty))
                                                            @foreach($faculty as $facultys)
                                                           
                                                        <form class="manage" action="{{url('/update',$facultys->id)}}" method="post" >
                                                            @csrf

                                                            @method('PATCH')
                                                            <br> <h2>Edit Faculty Data</h2> <br>
                                                           
                                                            
                                                                <input type="hidden" class="form-control"
                                                                    id="exampleInputEmail1" name="user_id" value="{{ $facultys->user_id }}"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Enter email">
                                                                

                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputEmail1" name="email" value="{{ $facultys->email }}"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Enter email">
                                                                @error('email')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="exampleInputPassword1" name="password"
                                                                    value="{{ $facultys->password }}"
                                                                    placeholder="Password">
                                                                @error('password')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Date Of Birth</label>
                                                                <input type="date" class="form-control"
                                                                    id="exampleInputPassword1" name="dob"
                                                                    placeholder="Enter Date of Birth" value="{{$facultys->dob }}">
                                                                @error('dob')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror

                                                            </div>
                                                            
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Experience</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputPassword1" name="experience"
                                                                    placeholder="Enter Your Experience" value="{{$facultys->experience }}">
                                                                @error('experience')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                             <!-- </form> -->
                                                    <!-- </div> -->
                                                    <!-- <div class="col-md-6"> -->
                                                        <!-- <form> -->
                                                            <div class="form-group">
                                                                <label>Your Full Name</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Name" name="fullname" value="{{$facultys->name }}">
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
                                                                    id="exampleFormControlSelect1" name='department'>
                                                                    
                                                                    <option value="{{$facultys->department }}">{{$facultys->department }}</option>
                                                                    <option value="imca">MCA</option>
                                                                </select>
                                                                @error('department')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Qualifications</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Qualifications"
                                                                    name="qualifications" value="{{$facultys->qualifications }}">

                                                                @error('qualifications')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Specialization</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Specialization"
                                                                    name="specialization" value="{{$facultys->specialization }}">

                                                                @error('specialization')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Update</button>
                                                            @endforeach
                                                            @endif
                                                        </form>
   
    </body>
    </html>
