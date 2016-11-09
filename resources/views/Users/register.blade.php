@extends('Basic.loginModel')
@section('register')

    {{--注册框--}}
    <div class="container">
        {!! Form::open(['url'=>'/register']) !!}

        <div class="col-md-6 col-lg-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: 微软雅黑; font-size: large">注册</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{url('#')}}">
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                            {{--<label class="col-lg-2 control-label">用户名</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<input type="text" id="username" name="username" placeholder="用户名" class="form-control">--}}
                            {{--</div>--}}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                            {{--<label class="col-lg-2 control-label">邮箱</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<input type="email" id="email" name="email" placeholder="邮箱" class="form-control">--}}
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
                            {!! Form::label('password_confirmation', 'Password_confirmation:') !!}
                            {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                            {{--<label class="col-lg-2 control-label">确认密码</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<input type="password" id="confirm_password" name="confirm_password" placeholder="确认密码" class="form-control">--}}
                            {{--</div>--}}
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="checkbox c-checkbox">
                                    <label>
                                        <input type="checkbox" checked="">
                                        <span class="fa fa-check"></span>同意本平台所有条款</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::submit('加入我们!', ['class'=>'btn btn-primary form-control']) !!}
                            {{--<div class="col-lg-offset-2 col-lg-10">--}}
                            {{--<button type="submit" class="btn btn-sm btn-default">加入我们！</button>--}}
                            {{--</div>--}}
                            <div class="col-md-10 col-lg-offset-2">
                                <br>
                                <a href="{{url('/login')}}">已有账号？点击登录</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
@stop
