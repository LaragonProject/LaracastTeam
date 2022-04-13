@include('admin.headtagcode')
@include('admin.sidebar')
@include('admin.navbar')

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Datta Able Free Bootstrap 4 Admin Template</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description"
            content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords"
            content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
        <meta name="author" content="CodedThemes" />

        <!-- Favicon icon -->
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
        <!-- fontawesome icon -->
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
        <!-- animation css -->
        <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
        <!-- vendor css -->
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->


        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- [ Main Content ] start -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <h5>Enter Student Details</h5>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="/addstudentdata" method="post">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Enrollment
                                                                    Number</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="Enter Enrollment Number"
                                                                    name="enrollmentnumber">
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
                                                                    <option>Select Semester</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
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
                                                                    placeholder="Enter email" name="email">
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
                                                                    name="password">
                                                                @error('password')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <form>
                                                            <div class="form-group">
                                                                <label>Enter Roll Number</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Roll Number"
                                                                    name="rollnumber">
                                                                @error('rollnumber')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Select Your Division</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1" name="division">
                                                                    <option>Select Division</option>
                                                                    <option>A</option>
                                                                    <option>B</option>
                                                                    <option>C</option>
                                                                    <option>D</option>
                                                                    <option>E</option>
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
                                                                    placeholder="Enter Your Name" name="fullname">
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
                                                                    <option>Select Department</option>
                                                                    <option>MCA</option>
                                                                    <option>IMCA</option>
                                                                </select>
                                                                @error('department')
                                                                <p style="color:red; margin-top: 2px;" class="error">
                                                                    {{$message}}
                                                                </p>
                                                                @enderror
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/pcoded.min.js"></script>

    </body>

    </html>

    @include('admin.js')
</body>

</html>