@if($car->user_id!==Auth::user()->id)
    <script>
    window.location = "/user/cars";</script>
    @endif
@extends('layouts.user')

@section('custom_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">

@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Edit car </h1>
                <ol class="breadcrumb float-right hidden-mobile">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item ">User</li>
                    <li class="breadcrumb-item active">Edit car </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->




    {!! Form::model($car, ['method'=>'PATCH', 'action'=>['UserCarsController@update', $car->id]]) !!}
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
                                {!! Form::label('make', 'Select make') !!}
                                {!! Form::select('make',$makes, null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                {!! Form::label('model', 'Enter Model of your car') !!}
                                {!! Form::select('model', $carmodels, null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                {!! Form::label('year', 'Select Manufacture Year') !!}
                                {!! Form::select('year',[''=>'Choose','2018'=>'2018','2017'=>'2017','2016'=>'2016','2015'=>'2015','2014'=>'2014','2013'=>'2013','2012'=>'2012','2011'=>'2011','2010'=>'2010','2009'=>'2009','2008'=>'2008','2007'=>'2007','2006'=>'2006','2005'=>'2005','2004'=>'2004','2003'=>'2003','2002'=>'2002','2001'=>'2001','2000'=>'2009','199'=>'1999','1998'=>'1998','1997'=>'1997','1996'=>'1996','1995'=>'1995','1994'=>'1994','1993'=>'1993','1992'=>'1992','1991'=>'1991','1990'=>'1990','1989'=>'1989','1988'=>'1988','1987'=>'1987','1986'=>'1986','1985'=>'1985','1984'=>'1984','1983'=>'1983','1982'=>'1982','1981'=>'1981','1980'=>'1980','1979'=>'1979','1978'=>'1978','1977'=>'1977','1976'=>'1976','1975'=>'1975','1974'=>'1974','1973'=>'1973','1972'=>'1972','1971'=>'1971','1970'=>'1970','1969'=>'1969','1968'=>'1968','1967'=>'1967','1966'=>'1966','1965'=>'1965'], null,['class'=>'form-control']) !!}
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
                                {!! Form::label('body_type', 'Select Body Type') !!}
                                {!! Form::select('body_type',[''=>'Choose','Sedan'=>'Sedan','Wagon'=>'Wagon','SUV'=>'SUV','Hatchback'=>'Hatchback','Coupe/Cabriolet'=>'Coupe/Cabriolet','Supercar/Sport'=>'Supercar/Sport', 'Pickup'=>'Pickup'], null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                {!! Form::label('fuel', 'Select Fuel Type') !!}
                                {!! Form::select('fuel',[''=>'Choose','Gasoline'=>'Gasoline','Diesel'=>'Diesel','LPG'=>'LPG','CNG'=>'CNG','Electric car'=>'Electric car','Hybrid'=>'Hybrid'] ,null,['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    {!! Form::label('engine', 'Enter Engine Displacement') !!}
                                    <div class="input-group mb-3">
                                        {!! Form::number('engine', null,['class'=>'form-control', 'max'=>'10000']) !!}
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">ccm</span>
                                        </div>
                                    </div>
                                </div>

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
                                {!! Form::label('transmission', 'Select Transmission Type') !!}
                                {!! Form::select('transmission',[''=>'Choose','Automatic'=>'Automatic','Manual'=>'Manual'], null,['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                {!! Form::label('doors', 'Select Doors Count') !!}
                                {!! Form::select('doors',[''=>'Choose','2/3'=>'2/3','4/5'=>'4/5'], null,['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                {!! Form::label('seats', 'Select Seats Count') !!}
                                {!! Form::select('seats',[''=>'Choose','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7'] ,null,['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                {!! Form::label('interior_color', 'Select Interior Color') !!}
                                {!! Form::select('interior_color',[''=>'Choose','Black'=>'Black','Grey'=>'Grey','White'=>'White','Beige'=>'Beige','Blue'=>'Blue','Red'=>'Red','Brown'=>'Brown','Other'=>'Other'] ,null,['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                {!! Form::label('exterior_color', 'Select Exterior Color') !!}
                                {!! Form::select('exterior_color',[''=>'Choose','Black'=>'Black','Silver'=>'Silver','White'=>'White','Red'=>'Red','Blue'=>'Blue','Brown'=>'Brown','Orange'=>'Orange','Green'=>'Green','Purple'=>'Purple','Pink'=>'Pink','Other'=>'Other'], null,['class'=>'form-control']) !!}
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
                                {!! Form::checkbox('spec[]', 'Alarm', in_array('Alarm', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Alarm') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">

                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Child Safety Door Locks', in_array('Child Safety Door Locks', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Child Safety Door Locks') !!}
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-3 mb-2">

                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Power Door Locks', in_array('Power Door Locks', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Power Door Locks') !!}
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-3 mb-2">
                            {{--Also working--}}
                            {{--<div class="form-check pretty p-default p-round p-smooth p-bigger">--}}
                                {{--<input name="spec[]" type="checkbox" value="Vehicle Anti-Theft" @if(in_array('Vehicle Anti-Theft', $spec))--}}
                                {{--checked--}}
                                        {{--@endif>--}}
                                {{--<div class="state p-primary">--}}
                                    {{--<label for="spec">Vehicle Anti-Theft</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Vehicle Anti-Theft', in_array('Vehicle Anti-Theft', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', '4WD', in_array('4WD', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', '4WD') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Electronic Brake Assistance', in_array('Electronic Brake Assistance', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Electronic Brake Assistance') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Traction Control', in_array('Traction Control', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Traction Control') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Vehicle Stability Control System', in_array('Vehicle Stability Control System', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Vehicle Stability Control System') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'ABS', in_array('ABS', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Driver Airbag', in_array('Driver Airbag', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Driver Airbag') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Passenger Airbag', in_array('Passenger Airbag', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Passenger Airbag') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Front Side Airbag', in_array('Front Side Airbag', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Front Side Airbag') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Electronic Parking Aid', in_array('Electronic Parking Aid', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec[]', 'Electronic Parking Aid') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'First Aid Kit', in_array('First Aid Kit', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Keyless Entry', in_array('Keyless Entry', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Keyless Entry') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Remote Ignition', in_array('Remote Ignition', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Cruise Control', in_array('Cruise Control', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Cruise Control') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Heated Steering Wheel', in_array('Heated Steering Wheel', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Heated Steering Wheel') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Leather Steering Wheel', in_array('Leather Steering Wheel', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Leather Steering Wheel') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Steering Wheel Mounted Controls', in_array('Steering Wheel Mounted Controls', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Steering Wheel Mounted Controls') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Tire Inflation/Pressure Monitor', in_array('Tire Inflation/Pressure Monitor', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Tire Inflation/Pressure Monitor') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Trip Computer', in_array('Trip Computer', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Trip Computer') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Telescopic Steering Column', in_array('Telescopic Steering Column', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Power Sunroof/Moonroof', in_array('Power Sunroof/Moonroof', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Power Sunroof/Moonroof') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Manual Sunroof/Moonroof', in_array('Manual Sunroof/Moonroof', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Manual Sunroof/Moonroof') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Removable/Convertible Top', in_array('Removable/Convertible Top', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Air Conditioning', in_array('Air Conditioning', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Air Conditioning') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Separate Driver/Front Passenger Climate Controls', in_array('Separate Driver/Front Passenger Climate Controls', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Driver Adjustable Power Seat', in_array('Driver Adjustable Power Seat', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Driver Adjustable Power Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Front Power Memory Seat', in_array('Front Power Memory Seat', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Front Power Memory Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Third Row Removable Seat', in_array('Third Row Removable Seat', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Third Row Removable Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Front Cooled Seat', in_array('Front Cooled Seat', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Front Cooled Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Front Heated Seat', in_array('Front Heated Seat', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Front Heated Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Leather Seat', in_array('Leather Seat', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Leather Seat') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Front Power Lumbar Support', in_array('Front Power Lumbar Support', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Automatic Headlights', in_array('Automatic Headlights', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Automatic Headlights') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Fog Lights', in_array('Fog Lights', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Fog Lights') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Daytime Running Lights', in_array('Daytime Running Lights', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Daytime Running Lights') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'LED Lights Front', in_array('LED Lights Front', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'LED Lights Front') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'LED Lights Back', in_array('LED Lights Back', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Alloy Wheels', in_array('Alloy Wheels', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Alloy Wheels') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Chrome Wheels', in_array('Chrome Wheels', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Chrome Wheels') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Steel Wheels', in_array('Steel Wheels', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Full Size Spare Tire', in_array('Full Size Spare Tire', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Full Size Spare Tire') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Run Flat Tires', in_array('Run Flat Tires', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Power Windows Front', in_array('Power Windows Front', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Power Windows') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Power Windows Back', in_array('Power Windows Back', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Electrochromic Exterior Rearview Mirror', in_array('Electrochromic Exterior Rearview Mirror', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Electrochromic Exterior Rearview Mirror') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Electrochromic Interior Rearview Mirror', in_array('Electrochromic Interior Rearview Mirror', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Electrochromic Interior Rearview Mirror') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Heated Exterior Mirror', in_array('Heated Exterior Mirror', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Heated Exterior Mirror') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Power Adjustable Exterior Mirror', in_array('Power Adjustable Exterior Mirror', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'Interval Wipers', in_array('Interval Wipers', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Interval Wipers') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Rear Wiper', in_array('Rear Wiper', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Rear Wiper') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Rain Sensing Wipers', in_array('Rain Sensing Wipers', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Rain Sensing Wipers') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Rear Window Defogger', in_array('Rear Window Defogger', $spec)? 'checked' : 0) !!}
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
                                {!! Form::checkbox('spec[]', 'AM/FM Radio', in_array('AM/FM Radio', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'AM/FM Radio') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'CD Changer', in_array('CD Changer', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'CD Changer') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Navigation Aid', in_array('Navigation Aid', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Navigation Aid') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Cassette Player', in_array('Cassette Player', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Cassette Player') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'CD Player', in_array('CD Player', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'CD Player') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'DVD Player', in_array('DVD Player', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'DVD Player') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Hands Free', in_array('Hands Free', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Hands Free') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Bluetooth', in_array('Bluetooth', $spec)? 'checked' : 0) !!}
                                <div class="state p-primary">
                                    {!! Form::label('spec', 'Bluetooth') !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-2">
                            <div class="form-check pretty p-default p-round p-smooth p-bigger">
                                {!! Form::checkbox('spec[]', 'Subwoofer', in_array('Subwoofer', $spec)? 'checked' : 0) !!}
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
                    <button class="btn btn-primary btn-lg pull-right" type="submit"><i class="fa fa-save"></i> Save changes</button>
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