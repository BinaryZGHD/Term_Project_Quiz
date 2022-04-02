@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Exam  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('exam.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center">Exam_ID</td>
				<td align ="center">Exam_Year</td>
				<td align ="center">Exam_Term</td>
				<td align ="center">Exam_Crs_Code</td>
				<td align ="center">Exam_Crs_Sect</td>
				<td align ="center">Exam_Std_Code</td>
				<td align ="center">Exam_Time</td>
				<td align ="center">Exam_Date_Time_Start</td>
				<td align ="center">Exam_Date_Time_End</td>
				<td align ="center">Exam_Total_Score</td>
				<td align ="center">Exam_Commit_Type</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($exam as $ex)
			<tr>
				<td align ="center">{{ $ex->ex_id }}</td>
				<td align ="center">{{ $ex->ex_year }}</td>
				<td align ="center">{{ $ex->ex_term }}</td>
				<td align ="center">{{ $ex->ex_crs_code }}</td>
				<td align ="center">{{ $ex->ex_crs_sect }}</td>
				<td align ="center">{{ $ex->ex_std_code }}</td>
				<td align ="center">{{ $ex->ex_time }}</td>
				<td align ="center">{{ $ex->ex_date_time_start }}</td>
				<td align ="center">{{ $ex->ex_date_time_end }}</td>
				<td align ="center">{{ $ex->ex_total_score }}</td>
				<td align ="center">{{ $ex->ex_commit_type }}</td>
				<td align ="center">
					<form action="{{ route('exam.destroy',$ex->ex_id) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('exam.edit',$ex->ex_id) }}"> Edit</a>
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
