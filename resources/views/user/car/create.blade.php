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
                    <h6>EQUIPMENT - ANTI-THEFT & LOCKS</h6><br>
                    <div class="row mb-4">


                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Alarm') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Alarm') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Child Safety Door Locks') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Child Safety Door Locks') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Power Door Locks') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Power Door Locks') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Vehicle Anti-Theft') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Vehicle Anti-Theft') !!}
                                </div>
                            </div>
                        </div>

                    </div>

                    <h6>EQUIPMENT - BRAKING & TRACTION</h6><br>

                    <div class="row mb-4">


                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', '4WD') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', '4WD') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Electronic Brake Assistance') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Electronic Brake Assistance') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Traction Control') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Traction Control') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Vehicle Stability Control System') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Vehicle Stability Control System') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'ABS') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'ABS') !!}
                                </div>
                            </div>
                        </div>

                    </div>


                    <h6>EQUIPMENT - SAFETY</h6><br>

                    <div class="row mb-4">


                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Driver Airbag') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Driver Airbag') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Passenger Airbag') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Passenger Airbag') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Front Side Airbag') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Front Side Airbag') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Electronic Parking Aid') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Electronic Parking Aid') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'First Aid Kit') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'First Aid Kit') !!}
                                </div>
                            </div>
                        </div>

                    </div>


                    <h6>EQUIPMENT - REMOTE CONTROLS & RELEASE</h6><br>
                    <div class="row mb-4">

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Keyless Entry') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Keyless Entry') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Remote Ignition') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Remote Ignition') !!}
                                </div>
                            </div>
                        </div>

                    </div>





                    <h6>EQUIPMENT - INTERIOR FEATURES</h6><br>
                    <div class="row mb-4">
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Cruise Control') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Cruise Control') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Heated Steering Wheel') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Heated Steering Wheel') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Leather Steering Wheel') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Leather Steering Wheel') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Steering Wheel Mounted Controls') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Steering Wheel Mounted Controls') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Tire Inflation/Pressure Monitor') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Tire Inflation/Pressure Monitor') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Trip Computer') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Trip Computer') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Telescopic Steering Column') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Telescopic Steering Column') !!}
                                </div>
                            </div>
                        </div>

                    </div>



                    <h6>EQUIPMENT - ROOF</h6><br>
                    <div class="row mb-4">
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Power Sunroof/Moonroof') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Power Sunroof/Moonroof') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Manual Sunroof/Moonroof') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Manual Sunroof/Moonroof') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Removable/Convertible Top') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Removable/Convertible Top') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>EQUIPMENT - CLIMATE CONTROL</h6><br>
                    <div class="row mb-4">

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Air Conditioning') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Air Conditioning') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Separate Driver/Front Passenger Climate Controls') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Separate Driver/Front Passenger Climate Controls') !!}
                                </div>
                            </div>
                        </div>

                    </div>

                    <h6>EQUIPMENT - SEAT</h6><br>
                    <div class="row mb-4">

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Driver Adjustable Power Seat') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Driver Adjustable Power Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Front Power Memory Seat') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Front Power Memory Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Third Row Removable Seat') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Third Row Removable Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Front Cooled Seat') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Front Cooled Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Front Heated Seat') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Front Heated Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Leather Seat') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Leather Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Front Power Lumbar Support') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Front Power Lumbar Support') !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <h6>EQUIPMENT - EXTERIOR LIGHTING</h6><br>
                    <div class="row mb-4">

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Automatic Headlights') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Automatic Headlights') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Fog Lights') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Fog Lights') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Daytime Running Lights') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Daytime Running Lights') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'LED Lights Front') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'LED Lights Front') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'LED Lights Back') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'LED Lights Back') !!}
                                </div>
                            </div>
                        </div>
                    </div>



                    <h6>EQUIPMENT - WHEELS</h6><br>
                    <div class="row mb-4">
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Alloy Wheels') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Alloy Wheels') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Chrome Wheels') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Chrome Wheels') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Steel Wheels') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Steel Wheels') !!}
                                </div>
                            </div>
                        </div>

                    </div>

                    <h6>EQUIPMENT - TIRES</h6><br>
                    <div class="row mb-4">

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Full Size Spare Tire') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Full Size Spare Tire') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Run Flat Tires') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Run Flat Tires') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>EQUIPMENT - WINDOWS</h6><br>
                    <div class="row mb-4">
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Power Windows Front') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Power Windows') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Power Windows Back') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Power Windows Back') !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <h6>EQUIPMENT - MIRRORS</h6><br>
                    <div class="row mb-4">
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Electrochromic Exterior Rearview Mirror') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Electrochromic Exterior Rearview Mirror') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Electrochromic Interior Rearview Mirror') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Electrochromic Interior Rearview Mirror') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Heated Exterior Mirror') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Heated Exterior Mirror') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Power Adjustable Exterior Mirror') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Power Adjustable Exterior Mirror') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6>EQUIPMENT - WIPERS</h6><br>
                    <div class="row mb-4">
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Interval Wipers') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Interval Wipers') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Rear Wiper') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Rear Wiper') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Rain Sensing Wipers') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Rain Sensing Wipers') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Rear Window Defogger') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Rear Window Defogger') !!}
                                </div>
                            </div>
                        </div>

                    </div>

                    <h6>EQUIPMENT - ENTERTAINMENT, COMMUNICATION & NAVIGATION</h6><br>
                    <div class="row mb-4">

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'AM/FM Radio') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'AM/FM Radio') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'CD Changer') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'CD Changer') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Navigation Aid') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Navigation Aid') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Cassette Player') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Cassette Player') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'CD Player') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'CD Player') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'DVD Player') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'DVD Player') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Hands Free') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Hands Free') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Bluetooth') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Bluetooth') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Subwoofer') !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Subwoofer') !!}
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