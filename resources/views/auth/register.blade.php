@extends('layouts.interface')


@section('custom_css')
    <link href="{{asset('css/custom-front.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('main_content')
    <div class="top-login">
    </div>

    <div class="cd-breadcrumb">
        <div class="container">
            <span class="cd-breadcrumb-inactive">Home /</span> Register new acount
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header"><h4 class="mb-0">{{ __('Register') }}</h4></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="clear"></div>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="form-group">
                                        <label>Your full name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="text" name="name" class="form-control"  value="{{ old('name') }}" required autofocus />
                                        </div>
                                        @if ($errors->has('name'))
                                            <div class="help-block with-errors text-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                        </div>
                                        @if ($errors->has('email'))
                                            <div class="help-block with-errors text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span  class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input id="password" type="password" data-minlength="6" name="password" class="form-control" required />
                                                </div>
                                                @if ($errors->has('password'))
                                                    <div class="help-block with-errors text-danger">{{ $errors->first('password') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password again</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input  id="password-confirm" type="password" name="password_confirmation" class="form-control"  required />
                                                </div>
                                                <div class="help-block with-errors text-danger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>

                            <div class="form-group row mb-0">
                                <div class="col-md-10 offset-md-1">
                                    <button type="submit" class="btn btn-danger btn-block btn-lg">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <div class="clear"></div>

                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <i class="fa fa-undo fa-fw"></i> Already registered? <a href="{{route('login')}}">Account login</a>

                                </div>
                            </div>


                            <div class="clear"></div>
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







