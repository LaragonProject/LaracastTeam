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
<h2>Faculty</h2>
</div>
<div class="pull-right mb-2">
</div>
</div>
</div>


<table class="table table-bordered">

<tr>

<th>id</th>
<th>name</th>
<th>email</th>
<!-- <th>user type</th> -->
<th>dob</th>
<th>experience</th>
<th>department</th>
<th>qualifications</th>
<th>specialization</th>
<th>Action</th>
	


</tr>

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
    <td><a href="#"> Edit </a> | 
    <a href="#"> Delete </a></td>
    </tr>

@endforeach
</table>
</body>
</html>