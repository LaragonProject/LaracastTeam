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
                                                <h5>Enter Subject Details</h5>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Subject Name</label>
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="Enter Name of Subject">

                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Select
                                                                    Faculty</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1">
                                                                    <option>Assign Faculty</option>
                                                                    <option>Faculty 1</option>
                                                                    <option>Faculty 2</option>
                                                                    <option>Faculty 3</option>
                                                                </select>
                                                            </div>

                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>

                                                        </form>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <form>
                                                            <div class="form-group">
                                                                <label>Subject Code</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Subject Code">
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

        <!-- Warning Section Ends -->

        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/pcoded.min.js"></script>

    </body>

    </html>

    @include('admin.js')
</body>

</html>