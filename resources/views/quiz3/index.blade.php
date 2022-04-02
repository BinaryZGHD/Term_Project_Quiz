@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Quiz3 | |<a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
			
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >Question_id</td>
				<!-- <td align ="center" >Question</td> -->
				<td align ="center" >Time</td>
                <td align ="center" >Score</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($quiz3 as $qu)
			<tr>
				<td align ="center">{{ $qu->qs_id }}</td>
				<!-- <td align ="center" >{{ $qu->qs_question }}</td> -->
                <td align ="center">{{ $qu->qs_ex_time }}</td>
				<td align ="center" >{{ $qu->qs_score }}</td>
				<td align ="center" >
                <a class="btn btn-primary" href="{{ route('quiz3.create',$qu->qs_id) }}">เริ่มทำข้อสอบ</a>
						@csrf
				</td>
			</tr>
			@endforeach
        </table>
	</div>
</div>
@endsection
