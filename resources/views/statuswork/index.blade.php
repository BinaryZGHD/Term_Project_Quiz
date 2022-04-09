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
			<h2>Show statuswork</h2>
			| <a href="http://dekwat.buu.in.th:15110/choice" > choice </a>
			| <a href="http://dekwat.buu.in.th:15110/class_check" > class_check </a>
			| <a href="http://dekwat.buu.in.th:15110/course_config" > course_config </a>
			| <a href="http://dekwat.buu.in.th:15110/class_check_student" > class_check_student </a>
			| <a href="http://dekwat.buu.in.th:15110/course" > course </a>
			| <a href="http://dekwat.buu.in.th:15110/enroll" > enroll </a>
			| <a href="http://dekwat.buu.in.th:15110/exam" > exam </a>
			| <a href="http://dekwat.buu.in.th:15110/exam_control" > exam_control </a> <br>
			| <a href="http://dekwat.buu.in.th:15110/exam_question" > exam_question </a>
			| <a href="http://dekwat.buu.in.th:15110/faculty" > faculty </a>
			| <a href="http://dekwat.buu.in.th:15110/question" > question </a>
			| <a href="http://dekwat.buu.in.th:15110/student" > student </a>
			| <a href="http://dekwat.buu.in.th:15110/teacher" > teacher </a>
			| <a href="http://dekwat.buu.in.th:15110/teacher_teach" > teacher_teach </a>
			| <a href="http://dekwat.buu.in.th:15111/" > PHP My Admin </a> |
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('statuswork.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<!-- <td align ="center" >created_at</td> -->
				<td align ="center" >update_at</td>
				<td align ="center" >TIME</td>
				<td align ="center" >ADMIN ID</td>
				<td align ="center" >NUMEDIT</td>
				<td align ="center" >DETAIL</td>
				<td colspan=2>Operrations</td>
			</tr>
			@foreach($statuswork as $stw)
			<tr>
				<!-- <td>{{ $stw->created_at }}</td> -->
				<td >{{ $stw->update_at }}</td>
				<td  align ="center" >{{ $stw->TIME }}</td>
				<td  align ="center" >{{ $stw->ADMIN }}</td>
				<td align ="center">{{ $stw->NUMEDIT }}</td>
				<td align ="center">{{ $stw->DETAIL }}</td>
				<td  align ="center">
					<form action="{{ route('statuswork.destroy',$stw->ID) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('statuswork.edit',$stw->ID) }}"> Edit</a>
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
