@extends('layout')
  
@section('content')
@foreach($question as $qs)
@endforeach
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>ข้อสอบข้อที่ {{ $qs->qs_id }}</h2>
        </div>
    </div>
</div>

@foreach($choice as $ch)
@endforeach
   
<form action="{{ route('quiz3.store', $qs->qs_id) }}" method="POST">

    @csrf
    <div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif   
    </div> 
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>คำถาม</strong><br>
				<td align ="center">{{ $qs->qs_question }}</td><br>
                <?php
                for ($i=1; $i < 5 ; $i++) { 
                $sql = "SELECT ch_desc
                        FROM choice
                        WHERE ch_no = $i AND ch_qs_id = $qs->qs_id";
                ;
                ?>
                <td width="20%"><input type="radio" name="ch2" value="$i">{{ $sql }}</td><br>
                <?php
                }
                ?>







                <!-- <td align ="center"><input type="radio" name="ch1" class="form-control" value="1">{{ $ch->ch_qs_id }}</td>
                <input type="radio" name="ch2" class="form-control" value="2">
                <td align ="center">{{ $ch->ch_qs_id }}</td>
                <input type="radio" name="ch3" class="form-control" value="3">
                <td align ="center">{{ $ch->ch_qs_id }}</td>
                <input type="radio" name="ch4" class="form-control" value="4">
                <td align ="center">{{ $ch->ch_qs_id }}</td> -->
                <!-- <input type="radio" name="ch4" class="form-control" value="$choice->ch_desc"> -->
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="submit" class="btn btn-primary">ยืนยันคำตอบ</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
