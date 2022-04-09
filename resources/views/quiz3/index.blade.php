@extends('layout')
@section('content')
<style>
	table {border: 2px solid black;}
	tr {border: 2px solid white;}
	th {background-color: rgba(255, 102, 181, 1);
		align: center;}
	td {border: 2px solid black;}
	tr:hover {background-color: rgba(255, 130, 195, 1);}
	body	{background-color: rgba(255, 134, 197, 0.8);}
	h1	{color: white;}
	h2	{color: white;}
	a	{color: white;}
	.mybtn {background-color: white;
  			border: none;
  			color: black;
  			padding: 10px 20px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 14px;
  			margin: 4px 2px;
			border-radius: 8px;
  			cursor: pointer;}
</style>
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
		<br><h1>Quiz3 | <a href="http://dekwat.buu.in.th:15110/statuswork"> STATUS </a></h1><br>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<th align ="center">Question_id</th>
				<!-- <td align ="center">Question</td> -->
				<th align ="center">Time</th>
                <th align ="center">Score</th>
				<th align ="center" colspan=2>Operations</th>
			</tr>
			@foreach($quiz3 as $qu)
			<tr>
				<td align ="center">{{ $qu->qs_id }}</td>
				<!-- <td align ="center">{{ $qu->qs_question }}</td> -->
                <td align ="center">{{ $qu->qs_ex_time }}</td>
				<td align ="center">{{ $qu->qs_score }}</td>
				<td align ="center">
                <a class="mybtn" href="{{ route('quiz3.show',$qu->qs_id) }}">เริ่มทำข้อสอบ</a>
				@csrf
				</td>
			</tr>
			@endforeach
        </table>
	</div>
</div>
@endsection
