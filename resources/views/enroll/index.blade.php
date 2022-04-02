@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Enroll  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('enroll.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center">Enroll_Year</td>
				<td align ="center">Enroll_Term</td>
				<td align ="center">Enroll_crs_Code</td>
				<td align ="center">Enroll_Sect</td>
				<td align ="center">Enroll_Seq</td>
				<td align ="center">Enroll_Student_Code</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($enroll as $enr)
			<tr>
				<td align ="center">{{ $enr->enr_year }}</td>
				<td align ="center">{{ $enr->enr_term }}</td>
				<td align ="center">{{ $enr->enr_crs_code }}</td>
				<td align ="center">{{ $enr->enr_sect }}</td>
				<td align ="center">{{ $enr->enr_seq }}</td>
				<td align ="center">{{ $enr->enr_std_code }}</td>
				<td align ="center">
					<form action="{{ route('enroll.destroy',$enr->enr_sect) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('enroll.edit',$enr->enr_sect) }}"> Edit</a>
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
