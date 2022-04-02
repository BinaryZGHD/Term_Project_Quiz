@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Exam Control | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('exam_control.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center">Exam_Control_ID</td>
				<td align ="center">Exam_Control_Year</td>
				<td align ="center">Exam_Control_Term</td>
				<td align ="center">Exam_Control_Crs_Code</td>
				<td align ="center">Exam_Control_Sect</td>
				<td align ="center">Exam_Control_tch_Code</td>
				<td align ="center">Exam_Control_Time</td>
				<td align ="center">Exam_Control_Status</td>
				<td align ="center">Exam_Control_Date_Start</td>
				<td align ="center">Exam_Control_Date_Stop</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($exam_control as $exc)
			<tr>
				<td align ="center">{{ $exc->exc_id }}</td>
				<td align ="center">{{ $exc->exc_year }}</td>
				<td align ="center">{{ $exc->exc_term }}</td>
				<td align ="center">{{ $exc->exc_crs_code }}</td>
				<td align ="center">{{ $exc->exc_sect }}</td>
				<td align ="center">{{ $exc->exc_tch_code }}</td>
				<td align ="center">{{ $exc->exc_time }}</td>
				<td align ="center">{{ $exc->exc_status }}</td>
				<td align ="center">{{ $exc->exc_date_start }}</td>
				<td align ="center">{{ $exc->exc_date_stop }}</td>
				<td align ="center">
					<!-- เปลี่ยน int(11) to varchar(11) for exam_control -->
					<form action="{{ route('exam_control.destroy',$exc->exc_id) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('exam_control.edit',$exc->exc_id) }}"> Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>

					</form>
				</td>
			</tr>
			@endforeach
        </table>
	</div>
</div>
@endsection
