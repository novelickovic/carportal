@extends('layouts.app')

@section('content')


    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><h4>Restricted</h4></div>
                <div class="card-body mt-5 mb-5">
                    @if (session('status')=='role')

                        <div class="alert alert-info" role="alert">
                            You are currently logged in as {{Auth::user()->role->name}}. Please log out from this account and
                            log in as regular user!
                        </div>

                    @elseif (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if (session('message'))
                            <div class="alert alert-info" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
