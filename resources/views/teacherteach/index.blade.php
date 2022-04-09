@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show TeacherTeach | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('teacher_teach.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >ปีการศึกษา</td>
				<td align ="center" >เทอม</td>
				<td align ="center" >รายวิชา</td>
				<td align ="center" >กลุ่ม</td>
				<td align ="center" >อาจารย์</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($teacherteach as $teat)
			<tr>
				<td align ="center">{{ $teat->tt_year }}</td>
				<td align ="center" >{{ $teat->tt_term }}</td>
				<td align ="center">{{ $teat->crs_name }}</td>
				<td align ="center" >{{ $teat->tt_sect }}</td>
				<td align ="center">{{ $teat->tch_name }}</td>
				<td align ="center" >
					<form action="{{ route('teacher_teach.destroy',$teat->tt_crs_code) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('teacher_teach.edit',$teat->tt_crs_code) }}"> Edit</a>
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
