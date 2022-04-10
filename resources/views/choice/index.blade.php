@extends('layout')
@section('content')
<div class="row">
	<br>
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>แสดงตัวเลือก | |<a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
			
            <!-- <div class="card-header">
				<a class="btn btn-danger" 
                    href="{{ route('choice.create') }}">Insert</a>
    		</div> -->
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >คำถาม</td>
				<td align ="center" >ชอยส์ที่</td>
				<td align ="center" >อธิบายตัวเลือก</td>
				<td align ="center" colspan=2>เครื่องมือ</td>
			</tr>
			@foreach($choice as $cho)
			<tr>
				<td align ="left">{{ $cho->qs_question }}</td>
				<td align ="center" >{{ $cho->ch_no }}</td>
				<td align ="left">{{ $cho->ch_desc }}</td>

				<td align ="center" >
					<form action="{{ route('choice.destroy',['ch_qs_id'=>$cho->ch_qs_id,'ch_no'=>$cho->ch_no]  ) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('choice.edit',$cho->ch_qs_id) }}"> Edit</a>
						@csrf
						@method('DELETE')
						<!-- <button type="submit" class="btn btn-danger">Delete </button> -->

					</form>
				</td>
			</tr>
			@endforeach
        </table>
	</div>
</div>
@endsection
