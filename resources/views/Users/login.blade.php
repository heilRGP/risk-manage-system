@extends('Basic.loginModel')
@section('login')

    <div class="container">


        {!! Form::open(['url'=>'/login']) !!}

        <div class="col-md-5 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: 微软雅黑; font-size: large">登录您的账户</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{url('home')}}">
                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                            {{--<label class="col-lg-2 control-label">用户名</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<input type="text" id="username" name="username" placeholder="用户名/邮箱/手机号" class="form-control">--}}
                            {{--</div>--}}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', ['class'=>'form-control']) !!}
                            {{--<label class="col-lg-2 control-label">密码</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<input type="password" id="password" name="password" placeholder="密码" class="form-control">--}}
                            {{--</div>--}}
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="checkbox c-checkbox">
                                    <label>
                                        <input type="checkbox" checked="">
                                        <span class="fa fa-check"></span>记住我</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::submit('登录', ['class'=>'btn btn-primary form-control']) !!}
                            {{--<div class="col-lg-offset-2 col-lg-10">--}}
                            {{--<button type="submit" class="btn btn-sm btn-default">--}}
                            {{--登录--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            <div class="col-md-10 col-lg-offset-2">
                                <br>
                                <a href="{{url('register')}}">没有账号？点击注册</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {!! Form::close() !!}

    </div>

@stop
