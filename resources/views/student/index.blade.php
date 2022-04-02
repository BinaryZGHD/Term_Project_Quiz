@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Student| | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('student.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >std_code</td>
				<td align ="center" >std_name</td>
				<td align ="center" >std_email</td>
				<td align ="center" >std_fac_code</td>
				<td align ="center" >std_user_login</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($student as $std)
			<tr>
				<td align ="center">{{ $std->std_code }}</td>
				<td align ="center" >{{ $std->std_name }}</td>
				<td align ="center">{{ $std->std_email }}</td>
				<td align ="center" >{{ $std->std_fac_code }}</td>
				<td align ="center">{{ $std->std_user_login }}</td>
				<td align ="center" >
					<form action="{{ route('student.destroy',$std->std_code) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('student.edit',$std->std_code) }}"> Edit</a>
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
