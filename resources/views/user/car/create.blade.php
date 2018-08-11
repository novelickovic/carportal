@extends('layouts.user')

@section('custom_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">

    @endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Add new car</h1>
                <ol class="breadcrumb float-right hidden-mobile">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item ">User</li>
                    <li class="breadcrumb-item active">Add new car</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->


    @if(session('message'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    <h4 class="alert-heading">{{session('message')}}</h4>
                </div>
            </div>
        </div>
    @endif

    @if(session('message_error'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger">
                    <h4 class="alert-heading">{{session('message_error')}}</h4>
                </div>
            </div>
        </div>
    @endif


    {!! Form::open(['method'=>'POST', 'action'=>'UserCarsController@store','files'=>true]) !!}
    <div class="row mb-3">
        <div class="col-sm-12">

            {{--Displaying errors--}}
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Add car details</h3>
                    Choose your car
                </div>
                <div class="card-body mt-3">

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group ">
                                {!! Form::label('make', 'Enter make') !!}
                                {!! Form::text('make', null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('model', 'Enter Model of your car') !!}
                                    {!! Form::text('model', null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('year', 'Enter Manufacture Year') !!}
                                    {!! Form::number('year', null,['class'=>'form-control', 'min'=>'1900', 'max'=>'2018', 'placeholder'=>'Year']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('mileage', 'Enter mileage') !!}
                                    <div class="input-group mb-3">
                                        {!! Form::number('mileage', null,['class'=>'form-control', 'aria-describedby'=>'basic-addon2']) !!}
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">km</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('body_type', 'Select Body Typ') !!}
                                    {!! Form::text('body_type', null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('fuel', 'Enter Fuel Type') !!}
                                    {!! Form::text('fuel', null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('engine', 'Enter Engine Type') !!}
                                    {!! Form::text('engine', null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('horse_power', 'Enter horse power') !!}
                                    <div class="input-group mb-3">
                                        {!! Form::number('horse_power', null,['class'=>'form-control']) !!}
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">HP</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('transmission', 'Enter Transmission Type') !!}
                                    {!! Form::text('transmission', null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('doors', 'Enter Doors Count') !!}
                                    {!! Form::text('doors', null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('seats', 'Enter Seats Count') !!}
                                    {!! Form::text('seats', null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('interior_color', 'Enter Interior Color') !!}
                                    {!! Form::text('interior_color', null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('exterior_color', 'Enter Exterior Color') !!}
                                    {!! Form::text('exterior_color', null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                        </div>


                    <div class="row mt-2">
                        <div class="col-sm-4">
                            <div class="form-group">
                                {!! Form::label('price', 'Enter Price') !!}
                                <div class="input-group mb-3">
                                    {!! Form::number('price', null,['class'=>'form-control']) !!}
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-primary text-white" id="basic-addon2"> € </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>





                </div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Choose specifications</h3>
                    Select additional features your car has
                </div>
                <div class="card-body">
                    EQUIPMENT - ANTI-THEFT & LOCKS<br><br>
                    <div class="row">


                        <div class="col-sm-3">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Alarm') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Alarm') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Child Safety Door Locks') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Child Safety Door Locks') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Power Door Locks') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Power Door Locks') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Vehicle Anti-Theft') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Vehicle Anti-Theft') !!}
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Description</h3>
                    Add some comments about your car
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">Enter here some impressive word about your car to attract more buyers ineterest
                        </div>
                        <div class="col-sm-6">
                            {!! Form::textarea('description', null,['class'=>'form-control']) !!}
                            {!! Form::hidden('user_id', Auth::user()->id) !!}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::submit('Save information and continue', ['class'=>'btn btn-primary btn-lg pull-right']) !!}
                </div>
            </div>
        </div>
    </div>



    {!! Form::close() !!}



@endsection


@section('scripts')

    @endsection

@section('scripts_data')



    @endsection