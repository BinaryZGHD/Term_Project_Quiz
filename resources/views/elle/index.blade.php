@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Employee</h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('employee.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >Emp_ID</td>
				<td align ="center" >Emp_Name</td>
				<td align ="center" >Emp_LName</td>
				<td align ="center" >Job</td>
				<td align ="center" >Chg_Hour</td>
				<td colspan=2>Operrations</td>
			</tr>
			@foreach($employee as $emp)
			<tr>
				<td align ="center">{{ $emp->emp_id }}</td>
				<td >{{ $emp->emp_name }}</td>
				<td >{{ $emp->emp_lname }}</td>
				<td align ="center">{{ $emp->job }}</td>
				<td align ="center">{{ $emp->chg_hour }}</td>
				<td>
					<form action="{{ route('employee.destroy',$emp->emp_id) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('employee.edit',$emp->emp_id) }}"> Edit</a>
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
