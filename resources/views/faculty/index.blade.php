@extends('layout')
@section('content')
<div class="row">
	<br>
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>แสดงคณะที่สังกัด  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('faculty.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >รหัสคณะ</td>
				<td align ="center" >ชื่อคณะ</td>
				<td align ="center" colspan=2>เครื่องมือ</td>

			</tr>
			@foreach($faculty as $fac)
			<tr>
				<td align ="center">{{ $fac->fac_code }}</td>
				<td align ="center" >{{ $fac->fac_name }}</td>
				


				<td align ="center" > 
					<form action="{{ route('faculty.destroy',$fac->fac_code ) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('faculty.edit',$fac->fac_code) }}"> Edit</a>
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
