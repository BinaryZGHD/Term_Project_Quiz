@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Course Config  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('course_config.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center">Course_Config_Year</td>
				<td align ="center">Course_Config_Term</td>
				<td align ="center">Course_Config_crs_Code</td>
				<td align ="center">Course_Config_num_Exam</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($course_config as $ccf)
			<tr>
				<td align ="center">{{ $ccf->ccf_year }}</td>
				<td align ="center">{{ $ccf->ccf_term }}</td>
				<td align ="center">{{ $ccf->ccf_crs_code }}</td>
				<td align ="center">{{ $ccf->ccf_num_exam }}</td>
				<td align ="center">
					<form action="{{ route('course_config.destroy',$ccf->ccf_crs_code) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('course_config.edit',$ccf->ccf_crs_code) }}"> Edit</a>
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
