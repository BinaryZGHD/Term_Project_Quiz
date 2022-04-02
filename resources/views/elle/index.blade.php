@extends('layout')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">แบบทดสอบก่อนเรียน</h2>
        </div>

        <div class="col-md-12">

            <form  method="post" action="{{ url('pages/answerPretests') }}">
                {{ csrf_field() }}
                <?php $i = 1;  ;?>
                @foreach($quiz32 as $pretest)

                    <div class ="thumbnail">
                        <table>
                            <tr>
                                <td>ข้อที่ {{ $i }} )&nbsp; </td>
                                <td>
                                    <h4> {!! $pretest->qs_question !!}
                                            
                                    </h4>

                                </td>
                            </tr>
                        </table>
                        <ul>
                            <li style="list-style: none;"><input name="choice[{{ $i }}]" type="radio" value="1"> {!! $pretest->ch_desc !!} </li>
                            <li style="list-style: none;"><input name="choice[{{ $i }}]" type="radio" value="2"> {!! $pretest->ch_desc !!} </li>
                            <li style="list-style: none;"><input name="choice[{{ $i }}]" type="radio" value="3"> {!! $pretest->ch_desc !!} </li>
                            <li style="list-style: none;"><input name="choice[{{ $i }}]" type="radio" value="4"> {!! $pretest->ch_desc !!} </li>
                        </ul>

                    </div>
                    <?php $i++ ;?>
                @endforeach
                <div class ="thumbnail">
                    <button type="submit" name="ok" class="btn btn-success">
                        <i class="glyphicon glyphicon-ok-sign"></i>&nbsp;ส่งคำตอบ
                    </button>
                    <a href="{{ url('pages/pretests') }}">
                        <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-refresh"></i>&nbsp;ล้างข้อมูล
                        </button>
                    </a>
                </div>
            </form>

        </div>
    </div>
@endsection