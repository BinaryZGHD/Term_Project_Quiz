@extends('layout')
@section('content')
<div class="row">
	<br>
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>แสดงข้อสอบและคำถาม  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('exam_question.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >รหัสข้อสอบ</td>
				<td align ="center" >ลำดับข้อสอบและตัวเลือก</td>
				<td align ="center" >รหัสคำถาม</td>
				<td align ="center" >คำตอบ</td>
				<td align ="center" >คะแนนคำถาม</td>
				<td align ="center" >วันที่และเวลา</td>
				<td align ="center" >ข้อที่เป็นคำตอบคือข้อ</td>
				<td align ="center" >คะแนน</td>
				<td align ="center" colspan=2>เครื่องมือ</td>
			</tr>
			@foreach($examquestion as $eq)
			<tr>
				<td align ="center">{{ $eq->eq_ex_id }}</td>
				<td align ="center" >{{ $eq->eq_seq }}</td>
				<td align ="center" >{{ $eq->eq_qs_id }}</td>
				<td align ="center" >{{ $eq->eq_qs_ans }}</td>
				<td align ="center" >{{ $eq->eq_qs_score }}</td>
				<td align ="center" >{{ $eq->eq_date_time }}</td>
				<td align ="center" >{{ $eq->eq_ans_no }}</td>
				<td align ="center" >{{ $eq->eq_score }}</td>

				<td align ="center" >
				<form action="{{ route('exam_question.destroy',['eq_ex_id'=>$eq->eq_ex_id,'eq_qs_id'=>$eq->eq_qs_id]) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('exam_question.edit',$eq->eq_ex_id) }}"> Edit</a>
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
