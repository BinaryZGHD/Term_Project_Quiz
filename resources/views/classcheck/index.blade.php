@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Class Check  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('class_check.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >Class ID</td>
				<td align ="center" >Year</td>
				<td align ="center" >Term</td>
				<td align ="center" >Student Code</td>

				<td align ="center" >Sect</td>
				<td align ="center" >Date</td>
				<td align ="center" >Time</td>
				<td align ="center" >ExamTime</td>

				<td align ="center" >TeacherCode</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($classcheck as $clak)
			<tr>
				<td align ="center">{{ $clak->cc_id }}</td>
				<td align ="center" >{{ $clak->cc_year }}</td>
				<td align ="center">{{ $clak->cc_term }}</td>
				<td align ="center" >{{ $clak->cc_crs_code }}</td>

				<td align ="center">{{ $clak->cc_sect }}</td>
				<td align ="center" >{{ $clak->cc_date }}</td>
				<td align ="center">{{ $clak->cc_time }}</td>
				<td align ="center" >{{ $clak->cc_ex_times }}</td>

				<td align ="center" >{{ $clak->cc_tch_code }}</td>


				<td align ="center" >
					<form action="{{ route('class_check.destroy',$clak->cc_id) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('class_check.edit',$clak->cc_id) }}"> Edit</a>
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
