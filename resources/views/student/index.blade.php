@extends('layout')
@section('content')
<div class="row">
	<br>
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>แสดงรายชื่อนิสิต| | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('student.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<br>
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >รหัสนักศึกษา</td>
				<td align ="center" >ชื่อนักศึกษา</td>
				<td align ="center" >อีเมล</td>
				<td align ="center" >รหัสคณะที่สังกัด</td>
				<td align ="center" >ผู้ใช้งาน</td>
				<td align ="center" colspan=2>เครื่องมือ</td>
			</tr>
			@foreach($student as $std)
			<tr>
				<td align ="center">{{ $std->std_code }}</td>
				<td align ="center" >{{ $std->std_name }}</td>
				<td align ="center">{{ $std->std_email }}</td>
				<td align ="center" >{{ $std->fac_name }}</td>
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
