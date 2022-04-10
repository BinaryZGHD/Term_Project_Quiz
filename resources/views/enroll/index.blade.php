@extends('layout')
@section('content')
<div class="row">
	<br>
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>แสดงการลงทะเบียน  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
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
				<td align ="center">ปีการศึกษา</td>
				<td align ="center">เทอมที่ลงทะเบียนรายวิชา</td>
				<td align ="center">วิชา</td>
				<td align ="center">กลุ่มที่ลงทะเบียน</td>
				<td align ="center">เลขที่</td>
				<!-- เลขที่รึเปล่านะ -->
				<td align ="center">ชื่อนักศึกษา</td>
				<td align ="center" colspan=2>เครื่องมือ</td>
			</tr>
			@foreach($enroll as $enr)
			<tr>
				<td align ="center">{{ $enr->enr_year }}</td>
				<td align ="center">{{ $enr->enr_term }}</td>
				<td align ="center">{{ $enr->crs_name }}</td>
				<td align ="center">{{ $enr->enr_sect }}</td>
				<td align ="center">{{ $enr->enr_seq }}</td>
				<td align ="center">{{ $enr->std_name }}</td>
				<td align ="center">
					<form action="{{ route('enroll.destroy',['enr_std_code'=>$enr->enr_std_code,'enr_crs_code'=>$enr->enr_crs_code] ) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('enroll.edit',$enr->enr_std_code) }}"> Edit</a>
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
