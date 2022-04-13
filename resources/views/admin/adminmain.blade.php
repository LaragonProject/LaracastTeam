<!DOCTYPE html>
<html lang="en">

@include('admin.headtagcode')

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <!-- <nav class="pcoded-navbar"> -->

    @include('admin.sidebar')

    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    @include('admin.navbar')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->


    @include('admin.bodypart')

    <!-- Required Js -->
    @include('admin.js')

</body>

</html>