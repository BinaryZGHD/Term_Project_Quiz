@extends('layout')

@section('content')

    <div class="row">
    <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">Show</h2>
        </div>
        <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">แบบทดสอบก่อนเรียน</h2>
        </div>

        <div class="col-md-12">

            <form  method="post" action=" ">
                {{ csrf_field() }}
                
				@foreach($quiz32 as $qui)
                @endforeach
                    <div class ="thumbnail">
                        <table>
                            <tr>
                                <td>ข้อที่ {{ $qui->qs_id }} )&nbsp; </td>
                                <td>
                                    <h4> {{ $qui->qs_question }}
                                    </h4>
                                </td>
                            </tr>
                        </table>
                        @foreach($quiz32 as $qui)
                        h4> {{ $qui->qs_question }}
                                    </h4>
                        <li style="list-style: none;"><input name = "choice{$qui->ch_no}" type="radio" value="$i"> {!! $qui->ch_desc !!} </li>
                       
                        @endforeach
                </div>
                <div class ="thumbnail">
                    <button type="submit" name="ok" class="btn btn-success">
                        <i class="glyphicon glyphicon-ok-sign"></i>&nbsp;ส่งคำตอบ
                    </button>
                    <a href=" ">
                        <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-refresh"></i>&nbsp;ล้างข้อมูล
                        </button>
                    </a>
                </div>
            </form>

        </div>
    </div>
@endsection