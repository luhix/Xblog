@extends('layouts.app')
@section('title','Register')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">注册
                    </div>
                    <div class="card-body">
                        <form method="POST" class="col-md-6" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="form-control-label">昵称</label>
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="name"
                                       value="{{ old('name') }}" autofocus>
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-control-label">邮箱</label>
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email"
                                       value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-control-label">密码</label>
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password">

                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="form-control-label">确认密码</label>
                                <input id="password-confirm" type="password"
                                       class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                       name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">
                                注册
                            </button>
                        </form>
                        <a class="pull-right" style="text-decoration: none" href="{{ route('github.login') }}">
                            使用<i class="fa fa-lg fa-github fa-fw"></i>注册
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
