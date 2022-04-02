@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Choice | |<a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
			
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('choice.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >Choice_id</td>
				<td align ="center" >Choice_number</td>
				<td align ="center" >Choice_description</td>
				<td align ="center" colspan=2>Operations</td>
			</tr>
			@foreach($choice as $cho)
			<tr>
				<td align ="center">{{ $cho->ch_qs_id }}</td>
				<td align ="center" >{{ $cho->ch_no }}</td>
				<td >{{ $cho->ch_desc }}</td>

				<td align ="center" >
					<form action="{{ route('choice.destroy',$cho->ch_qs_id) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('choice.edit',$cho->ch_qs_id) }}"> Edit</a>
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
