@extends('layout')
@section('content')
<style>
body {background-color: #CCCCFF;}
h1   {color: blue;}
h2    {color: #FFFFFF;}
h3    {color: #FFFF00;}
a     {color: #FF0000;}

    table#t01 { width :100%; }
    table#t01 td:nth-child(even) { background-color: #eee; }
    table#t01 td:nth-child(odd) { background-color:#fff; }
    table#t01 td1 { background-color: black;color: white; }
	/* tr:hover {background-color: coral;} */
	td:hover {background-color: coral;}
	table, th, td, tr {
  border: 2px solid black;
  border-collapse: collapse;
  border-spacing: 2px;
}
</style>
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			
			
	</div>
</div>
<div class="card ">
              <div class="card-header card-header-primary" style="background-color: #D175FF;" >
                <h2 class="card-title">{{ __(' Working Group Duo') }}</h4>
                <h3 class="card-category">{{ __('Sample Exam') }}</p>
                <a style="color: #FF99FF;" href=" "><u> SHOW</u></a>
				<h2><a class="card-category" href="http://dekwat.buu.in.th:15110/quiz3" > Quiz3 </a> | |<a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
 </div>
<?php $i = 1; ;?>
<div class="row">
	<div class="col-lg-12 margin-tb">
	
        <table class="table#t01" >
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
