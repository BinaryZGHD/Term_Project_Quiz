@extends('layout')
@section('content')
<div class="row">
	<br>
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>แสดงคำถาม| | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('question.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >ข้อ</td>
				<td align ="center" >คำถาม</td>
				<td align ="center" >ข้อถูก</td>
				<td align ="center" >ระยะเวลาในการทำ</td>
				<td align ="center" >คะแนน</td>
				<td align ="center" >วิชา</td>
				<td align ="center" >อาจารย์</td>
				<td align ="center" >วันที่ทำข้อสอบ</td>
				<td align ="center" colspan=2>เครื่องมือ</td>
			</tr>
			@foreach($question as $qui)
			<tr>
				<td align ="center">{{ $qui->qs_id }}</td>
				<td align ="center" >{{ $qui->qs_question }}</td>
				<td align ="center">{{ $qui->qs_ch_no_ans }}</td>
				<td align ="center" >{{ $qui->qs_ex_time }}</td>
				<td align ="center">{{ $qui->qs_score }}</td>
				<td align ="center" >{{ $qui->crs_name }}</td>
				<td align ="center">{{ $qui->tch_name }}</td>
				<td align ="center" >{{ $qui->qs_ex_date }}</td>
				

				<td align ="center" >
					<form action="{{ route('question.destroy',$qui->qs_id) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('question.edit',$qui->qs_id) }}"> Edit</a>
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
