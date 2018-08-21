@extends('layouts.interface')


@section('custom_css')
    <link href="{{asset('css/custom-front.css')}}" rel="stylesheet" type="text/css" />
    @endsection


@section('main_content')
<div class="top-login">
</div>

<div class="cd-breadcrumb">
    <div class="container">
        <span class="cd-breadcrumb-inactive">Home /</span> Login
    </div>
</div>
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header"><h4 class="mb-0">{{ __('Login') }}</h4></div>

                <div class="card-body">
                    <div class="clear"></div>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        @if(session('message'))

                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="alert alert-info">
                                        {{session('message')}}
                                    </div>
                                </div>
                            </div>



                        @endif

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label>Login Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus data-error="Input valid email">
                                    </div>
                                    @if ($errors->has('email'))
                                        <div class="help-block with-errors text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="password" id="inputPassword" data-minlength="6" name="password" class="form-control" required />
                                    </div>
                                    @if ($errors->has('password'))
                                        <div class="help-block with-errors text-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-danger btn-block btn-lg">
                                    {{ __('Login') }}
                                </button>
                                <div class="clear"></div>
                                <i class="fa fa-undo fa-fw"></i> Forgot password? <a href="{{ route('password.request') }}">
                                    {{ __('Reset password') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{asset('js/custom-front-js.js')}}"></script>
    @endsection