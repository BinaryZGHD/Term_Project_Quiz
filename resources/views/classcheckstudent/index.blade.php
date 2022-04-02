@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Class Check Student  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('class_check_student.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >Choice_ID</td>
				<td align ="center" >Student Code</td>
				<td align ="center" colspan=2>Operations</td>

			</tr>
			@foreach($classcheckstudent as $claks)
			<tr>
				<td align ="center">{{ $claks->ccs_cc_id }}</td>
				<td align ="center" >{{ $claks->ccs_std_code }}</td>
				


				<td align ="center" > 
					<form action="{{ route('classcheckstudent.destroy',['ccs_cc_id'=>$claks->ccs_cc_id,'ccs_std_code'=>$claks->ccs_std_code] ) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('class_check_student.edit',$claks->ccs_cc_id) }}"> Edit</a>
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
