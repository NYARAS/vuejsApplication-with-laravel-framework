@extends('layouts.adminmaster')
@section('content')





<div class="row">

<div class="col-lg-12">
<h3 class="page-header"><i class="fa fa-file-text-o"></i>Vacancies</h3>
<ol class="breadcrumb">
	<li><i class="fa fa-home"></i><a href="#">Home</a></li>
	<li><i class="icon_document_alt"></i>Vacancies</li>
	<li><i class="fa fa-file-text-o"></i>Manage Vacancies</li>
</ol>

</div>

</div>
<div class="row">
<div class="col-lg-12">

<section class="panel panel-default">
<header class="panel-heading">
Manage Posts

</header>

<form  action="#" class="form-horizontal" method="POST"  id="frm-post-create">
{!!csrf_field()!!}
<input type="hidden" name="active" id="active" value="1"></input>
<input type="text" name="class_id" id="class_id" ></input>
<div class="panel panel-body" style="border-bottom: 1px solid #ccc;">

   @if(session('info'))
 <div style="color: green" class="alert alert-success">


 {{session('info')}}
  </div>
 @endif
<div class="form-group">

{{---------------------}}


{{---------------------}}


{{---------------------}}
<div class="col-sm-3">
<label for="shift">
Job Code
</label>
<div class="input-group">
<select class="form-control" name="jobcode_id" id="jobcode_id">



</select>
	<div class="input-group-addon">
		<span class="fa fa-plus" id="add-more-jobcode"></span>
	</div>
</div>

</div>


{{---------------------}}



{{---------------------}}


{{---------------------}}

</div>

</div>
<div class="panel-footer">
<button type="submit" class="btn btn-primary  btn-sm">Create Post</button>
<button type="submit" class="btn btn-success  btn-sm btn-update-post">Update Post</button>




</div>



</form>
	{{--------------------------------}}
	<div class="panel panel-primary">
	<div class="panel-heading">Post Information</div>
	<div class="panel-body" id="add-class-info">

	</div>

	</div>
	{{---------------------------------}}
</section>

</div>

</div>


@endsection

@section('script')
<script type="text/javascript" >





</script>

@endsection
