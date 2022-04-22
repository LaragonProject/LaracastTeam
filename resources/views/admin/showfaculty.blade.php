@include('admin.headtagcode')
@include('admin.sidebar')
@include('admin.navbar')


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 8 CRUD Tutorial From Scratch</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Show Faculty Data</h2>
<br/>
</div>
<div class="pull-right mb-2">
</div>
</div>
</div>


<table class="table table-bordered">
    <style>
        td{

            text-align:center
        }
    </style>


<tr>

<th width="50" style="text-align:center">Id</th>
<th width="100" style="text-align:center">Name</th>
<th width="150" style="text-align:center">Email</th>
<!-- <th>user type</th> -->
<th width="100" style="text-align:center">DOB</th>
<th width="50" style="text-align:center">Experience</th>
<th width="50" style="text-align:center">Department</th>
<th width="50" style="text-align:center">Qualifications</th>
<th width="50" style="text-align:center">Specialization</th>
<th width="50" style="text-align:center">Action</th>
	


</tr>
@if(!empty($faculty))
@foreach ($faculty as $f)


<tr>
<td>{{ $f->id }}</td>
    <td>{{ $f->name }}</td>
    <td>{{ $f->email }}</td>

    <td>{{ $f->dob }}</td>
    <td>{{ $f->experience }}</td>
    <td>{{ $f->department }}</td>
    <td>{{ $f->qualifications }}</td>
    <td>{{ $f->specialization }}</td>
    <td><a class="btn btn-small btn-success" href="{{ URL::to('edit/' . $f->id ) }}">Edit </a> 
    <a class="btn btn-small btn-danger" href="{{ URL::to('delete/' . $f->id ) }}">Delete</a></td>
    </tr>

@endforeach
@endif
</table>
</body>
</html>

<script src="admin/assets/js/vendor-all.min.js"></script>
	<script src="admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/pcoded.min.js"></script>