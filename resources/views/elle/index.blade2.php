@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Quiz3 | |<a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
			
	</div>
</div>
<?php $i = 1; ;?>
<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >ลำดับ</td>
				<!-- <td align ="center" >Question</td> -->
				<td align ="center" >เนื้อหา</td>
                <td align ="center" >คะแนน</td>
				<td align ="center" colspan=2>ตัวเลือก</td>
			</tr>
			@foreach($quiz3 as $qu)
            
            
			<tr>
				<td align ="center">{{ $i }}</td>
				<!-- <td align ="center" >{{ $qu->qs_question }}</td> -->
                <td align ="left">{{ $qu->qs_question }}</td>
				<td align ="center" >{{ $qu->qs_score }}</td>
				<td align ="center" >
                <a class="btn btn-primary" href="{{ route('elle.show',$qu->qs_id) }}">เริ่มทำข้อสอบ</a>
						@csrf
				</td>
			</tr><?php $i++ ; ;?>
			@endforeach
        </table>
	</div>
</div>
@endsection
