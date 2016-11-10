@extends('Basic.operateModel')
@section('showAllRisk')

        <!--所有风险-->
<div class="col-lg-7 col-lg-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading" style="font-family: 微软雅黑; font-size: medium;">风险列表</div>
        <div class="panel-body">
            @foreach($risks as $risk)

                {{--{!! Form::open(['url'=>'/reply/'.$request->id]) !!}--}}

                <div class="alert alert-info" style="font-family: 微软雅黑; font-size: medium;">
                    <label style="font-size: medium;">{{ $risk->r_id }}</label>
                    <br>
                    <label style="font-size: medium;">{{ $risk->project_name }}</label>
                    <br>
                    <label style="font-size: smaller;">———————————————————————————————————————————————</label>
                    <br>
                    <label style="font-size: larger;">风险描述：{{ $risk->content }}</label>
                    <br>
                    <label style="font-size: smaller;">———————————————————————————————————————————————</label>
                    <br>
                    <label style="font-size: larger;">触发临界状态：{{ $risk->trigger }}</label>
                    <br>
                    <label style="font-size: smaller;">———————————————————————————————————————————————</label>
                    <br>
                    @if( $risk->possibility == 'high' )
                        <label style="font-size: medium;">可能性：高</label>
                    @elseif( $risk->possibility == 'medium' )
                        <label style="font-size: medium;">可能性：中</label>
                    @else
                        <label style="font-size: medium;">可能性：低</label>
                    @endif
                    <br>
                    @if( $risk->effect == 'high' )
                        <label style="font-size: medium;">影响程度：高</label>
                    @elseif( $risk->effect == 'medium' )
                        <label style="font-size: medium;">影响程度：中</label>
                    @else
                        <label style="font-size: medium;">影响程度：低</label>
                    @endif
                    <br>
                    <label style="font-size: smaller;">———————————————————————————————————————————————</label>
                    <br>
                    <label style="font-size: medium;">创建者：{{ $risk->creator_name }}</label>
                    <br>
                    @if( $risk->tracker_name == null )
                        <label style="font-size: medium;">跟踪者：无</label>
                    @else
                        <label style="font-size: medium;">跟踪者：{{ $risk->tracker_name }}</label>
                    @endif
                    <br>
                    <label style="font-size: small;">创建时间：{{ $risk->created_at }}</label>
                    {{--{!! Form::submit('回复', ['class'=>'btn btn-primary form-control', 'style'=>'width: 70px; height: 30px; margin-left: 480px; font-size: 10px; font-weight: normal; font-family: 微软雅黑;']) !!}--}}
                    <br>
                </div>

                {{--{!! Form::close() !!}--}}

            @endforeach
        </div>
    </div>
</div>

@stop