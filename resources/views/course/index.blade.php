@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Course  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('course.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >crs_code</td>
				<td align ="center" >crs_name</td>
				<td align ="center" >crs_active</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($course as $crs)
			<tr>
				<td align ="center">{{ $crs->crs_code }}</td>
				<td align ="center" >{{ $crs->crs_name }}</td>
				<td >{{ $crs->crs_active }}</td>

				<td align ="center" >
					<form action="{{ route('course.destroy',$crs->crs_code, $crs->crs_name) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('course.edit',$crs->crs_code, $crs->crs_name) }}"> Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete </button>

					</form>
				</td>
			</tr>
			@endforeach
        </table>
	</div>
</div>
@endsection
