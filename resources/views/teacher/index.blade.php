@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Teacher| | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('teacher.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >tch_code</td>
				<td align ="center" >tch_name</td>
				<td align ="center" >tch_email</td>
				<td align ="center" >tch_fac_code</td>
				<td align ="center" >tch_user_login</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($teacher as $tea)
			<tr>
				<td align ="center">{{ $tea->tch_code }}</td>
				<td align ="center" >{{ $tea->tch_name }}</td>
				<td align ="center">{{ $tea->tch_email }}</td>
				<td align ="center" >{{ $tea->tch_fac_code }}</td>
				<td align ="center">{{ $tea->tch_user_login }}</td>
				<td align ="center" >
					<form action="{{ route('teacher.destroy',$tea->tch_code) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('teacher.edit',$tea->tch_code) }}"> Edit</a>
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
