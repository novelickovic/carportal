@extends('layouts.interface')

@section('custom_css')
    <link href="{{asset('css/custom-front.css')}}" rel="stylesheet" type="text/css" />
    <!-- Light gallery -->
    <link href="{{asset('css/lightslider.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.19/css/lightgallery.min.css" />
@endsection

@section('main_content')
    <div class="cd-top-content">
    </div>

    <div class="cd-breadcrumb">
        <div class="container">
            <span class="cd-breadcrumb-inactive">Home / Car details /</span> {{$car->make}} {{$car->model}} {{$car->year}}
        </div>
    </div>
    <div class="cd-top-main-content">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-9">
                    <div class="cd-title">{{$car->make}} {{$car->model}}</div>

                </div>
                <div class="col-sm-3">
                    <div class="cd-price">{{$car->price}} €</div>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="row">
            <div class="col-md-8">


                {{--image holder--}}
                <ul id="imageGallery">
                    @foreach($car->photos as $photo)
                    <li data-thumb="{{$photo->name}}" data-src="{{$photo->name}}">
                        <img src="{{$photo->name}}" />
                    </li>
                        @endforeach

                </ul>




                <br><br>
                <div class="cd-general-title">Description</div>
                <div class="cd-description">
                    {{$car->description}}
                </div>
                <div class="cd-general-title">Equipment</div>
                <div class="row equipment">
                    <div class="col-md-4 mb-3">
                        <strong>ANTI-THEFT & LOCKS</strong>
                        @php
                        $specifications = explode(',', $car->specification);
                        @endphp

                        <ul>
                            @if(in_array('Alarm', $specifications))
                                <li><i class="fa fa-check"></i> Alarm</li>
                            @endif
                            @if(in_array('Child Safety Door Locks', $specifications))
                                <li><i class="fa fa-check"></i> Child Safety Door Locks</li>
                            @endif
                            @if(in_array('Power Door Locks', $specifications))
                                <li><i class="fa fa-check"></i> Power Door Locks</li>
                            @endif
                            @if(in_array('Vehicle Anti-Theft', $specifications))
                                <li><i class="fa fa-check"></i> Vehicle Anti-Theft</li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>BRAKING & TRACTION</strong>
                        <ul>
                            @if(in_array('4WD', $specifications))
                                <li><i class="fa fa-check"></i> 4WD</li>
                            @endif
                            @if(in_array('Electronic Brake Assistance', $specifications))
                                <li><i class="fa fa-check"></i> Electronic Brake Assistance</li>
                            @endif
                            @if(in_array('Traction Control', $specifications))
                                <li><i class="fa fa-check"></i> Traction Control</li>
                            @endif
                            @if(in_array('Vehicle Stability Control System', $specifications))
                                <li><i class="fa fa-check"></i> Vehicle Stability Control System</li>
                            @endif
                            @if(in_array('ABS', $specifications))
                                <li><i class="fa fa-check"></i> ABS</li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>SAFETY</strong>
                        <ul>
                            @if(in_array('Driver Airbag', $specifications))
                                <li><i class="fa fa-check"></i> Driver Airbag</li>
                            @endif
                                @if(in_array('Passenger Airbag', $specifications))
                                    <li><i class="fa fa-check"></i> Passenger Airbag</li>
                                @endif
                                @if(in_array('Front Side Airbag', $specifications))
                                    <li><i class="fa fa-check"></i> Front Side Airbag</li>
                                @endif
                                @if(in_array('Electronic Parking Aid', $specifications))
                                    <li><i class="fa fa-check"></i> Electronic Parking Aid</li>
                                @endif
                                @if(in_array('First Aid Kit', $specifications))
                                    <li><i class="fa fa-check"></i> First Aid Kit</li>
                                @endif

                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>REMOTE CONTROLS & RELEASE</strong>
                        <ul>
                            @if(in_array('Keyless Entry', $specifications))
                                <li><i class="fa fa-check"></i> Keyless Entry</li>
                            @endif
                            @if(in_array('Remote Ignition', $specifications))
                                <li><i class="fa fa-check"></i> Remote Ignition</li>
                            @endif


                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>INTERIOR FEATURES</strong>
                        <ul>
                            @if(in_array('Cruise Control', $specifications))
                                <li><i class="fa fa-check"></i> Cruise Control</li>
                            @endif
                                @if(in_array('Heated Steering Wheel', $specifications))
                                    <li><i class="fa fa-check"></i> Heated Steering Wheel</li>
                                @endif
                                @if(in_array('Leather Steering Wheel', $specifications))
                                    <li><i class="fa fa-check"></i> Leather Steering Wheel</li>
                                @endif
                                @if(in_array('Steering Wheel Mounted Controls', $specifications))
                                    <li><i class="fa fa-check"></i> Steering Wheel Mounted Controls</li>
                                @endif
                                @if(in_array('Tire Inflation/Pressure Monitor', $specifications))
                                    <li><i class="fa fa-check"></i> Tire Inflation/Pressure Monitor</li>
                                @endif
                                @if(in_array('Trip Computer', $specifications))
                                    <li><i class="fa fa-check"></i> Trip Computer</li>
                                @endif
                                @if(in_array('Telescopic Steering Column</', $specifications))
                                    <li><i class="fa fa-check"></i> Telescopic Steering Column</</li>
                                @endif

                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>ROOF</strong>
                        <ul>
                            @if(in_array('Power Sunroof/Moonroof', $specifications))
                                <li><i class="fa fa-check"></i> Power Sunroof/Moonroof</li>
                            @endif
                                @if(in_array('Manual Sunroof/Moonroof', $specifications))
                                    <li><i class="fa fa-check"></i> Manual Sunroof/Moonroof</li>
                                @endif
                                @if(in_array('Removable/Convertible Top', $specifications))
                                    <li><i class="fa fa-check"></i> Removable/Convertible Top</li>
                                @endif

                        </ul>

                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>CLIMATE CONTROL</strong>
                        <ul>
                            @if(in_array('Air Conditioning', $specifications))
                                <li><i class="fa fa-check"></i> Air Conditioning</li>
                            @endif
                                @if(in_array('Separate Driver/Front Passenger Climate Controls', $specifications))
                                    <li><i class="fa fa-check"></i> Separate Driver/Front Passenger Climate Controls</li>
                                @endif
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>SEAT</strong>
                        <ul>@if(in_array('Driver Adjustable Power Seat', $specifications))
                                <li><i class="fa fa-check"></i> Driver Adjustable Power Seat</li>
                            @endif
                            @if(in_array('Front Power Memory Seat', $specifications))
                                <li><i class="fa fa-check"></i> Front Power Memory Seat</li>
                            @endif
                            @if(in_array('Third Row Removable Seat', $specifications))
                                <li><i class="fa fa-check"></i> Third Row Removable Seat</li>
                            @endif
                            @if(in_array('Front Cooled Seat', $specifications))
                                <li><i class="fa fa-check"></i> Front Cooled Seat</li>
                            @endif
                            @if(in_array('Front Heated Seat', $specifications))
                                <li><i class="fa fa-check"></i> Front Heated Seat</li>
                            @endif
                            @if(in_array('Leather Seat', $specifications))
                                <li><i class="fa fa-check"></i> Leather Seat</li>
                            @endif
                            @if(in_array('Front Power Lumbar Support', $specifications))
                                <li><i class="fa fa-check"></i> Front Power Lumbar Support</li>
                            @endif


                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>EXTERIOR LIGHTING</strong>
                        <ul>
                            @if(in_array('Automatic Headlights', $specifications))
                                <li><i class="fa fa-check"></i> Automatic Headlights</li>
                            @endif
                            @if(in_array('Fog Lights', $specifications))
                                <li><i class="fa fa-check"></i> Fog Lights</li>
                            @endif
                            @if(in_array('Daytime Running Lights', $specifications))
                                <li><i class="fa fa-check"></i> Daytime Running Lights</li>
                            @endif
                            @if(in_array('LED Lights Front', $specifications))
                                <li><i class="fa fa-check"></i> LED Lights Front</li>
                            @endif
                            @if(in_array('LED Lights Back', $specifications))
                                <li><i class="fa fa-check"></i> LED Lights Back</li>
                            @endif


                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>WHEELS</strong>
                        <ul>
                            @if(in_array('Alloy Wheels', $specifications))
                                <li><i class="fa fa-check"></i> Alloy Wheels</li>
                            @endif
                            @if(in_array('Chrome Wheels', $specifications))
                                <li><i class="fa fa-check"></i> Chrome Wheels</li>
                            @endif
                            @if(in_array('Steel Wheels', $specifications))
                                <li><i class="fa fa-check"></i> Steel Wheels</li>
                                @endif

                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>TYRES</strong>
                        <ul>
                            @if(in_array('Full Size Spare Tire', $specifications))
                                <li><i class="fa fa-check"></i> Full Size Spare Tire</li>
                            @endif
                            @if(in_array('Run Flat Tires', $specifications))
                                <li><i class="fa fa-check"></i> Run Flat Tires</li>
                            @endif

                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>WINDOWS</strong>
                        <ul>
                            @if(in_array('Power Windows', $specifications))
                                <li><i class="fa fa-check"></i> Power Windows</li>
                            @endif
                            @if(in_array('Power Windows Back', $specifications))
                                <li><i class="fa fa-check"></i> Power Windows Back</li>
                            @endif

                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>MIRRORS</strong>
                        <ul>
                            @if(in_array('Electrochromic Exterior Rearview Mirror', $specifications))
                                <li><i class="fa fa-check"></i> Electrochromic Exterior Rearview Mirror</li>
                            @endif
                            @if(in_array('Electrochromic Interior Rearview Mirror', $specifications))
                                <li><i class="fa fa-check"></i> Electrochromic Interior Rearview Mirror</li>
                            @endif
                            @if(in_array('Heated Exterior Mirror', $specifications))
                                <li><i class="fa fa-check"></i> Heated Exterior Mirror</li>
                            @endif
                            @if(in_array('Power Adjustable Exterior Mirror', $specifications))
                                <li><i class="fa fa-check"></i> Power Adjustable Exterior Mirror</li>
                            @endif


                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>WIPERS</strong>
                        <ul>
                            @if(in_array('Interval Wipers', $specifications))
                                <li><i class="fa fa-check"></i> Interval Wipers</li>
                            @endif
                            @if(in_array('Rear Wiper', $specifications))
                                <li><i class="fa fa-check"></i> Rear Wiper</li>
                            @endif
                            @if(in_array('Rain Sensing Wipers', $specifications))
                                <li><i class="fa fa-check"></i> Rain Sensing Wipers</li>
                            @endif
                            @if(in_array('Rear Window Defogger', $specifications))
                                <li><i class="fa fa-check"></i> Rear Window Defogger</li>
                            @endif


                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <strong>ENTERTAINMENT, COMMUNICATION & NAVIGATION</strong>
                        <ul>
                            @if(in_array('AM/FM Radio', $specifications))
                                <li><i class="fa fa-check"></i> AM/FM Radio</li>
                            @endif
                            @if(in_array('CD Changer', $specifications))
                                <li><i class="fa fa-check"></i> CD Changer</li>
                            @endif
                            @if(in_array('Navigation Aid', $specifications))
                                <li><i class="fa fa-check"></i> Navigation Aid</li>
                            @endif
                            @if(in_array('Cassette Player', $specifications))
                                <li><i class="fa fa-check"></i> Cassette Player</li>
                            @endif
                            @if(in_array('CD Player', $specifications))
                                <li><i class="fa fa-check"></i> CD Player</li>
                            @endif
                            @if(in_array('DVD Player', $specifications))
                                <li><i class="fa fa-check"></i> DVD Player</li>
                            @endif
                            @if(in_array('Hands Free', $specifications))
                                <li><i class="fa fa-check"></i> Hands Free</li>
                            @endif
                            @if(in_array('Bluetooth', $specifications))
                                <li><i class="fa fa-check"></i> Bluetooth</li>
                            @endif
                            @if(in_array('Subwoofer', $specifications))
                                <li><i class="fa fa-check"></i> Subwoofer</li>
                            @endif

                        </ul>
                    </div>


                </div>
            </div>

            <div class="col-md-4">
                <div class="cd-general-title">general information</div>
                <div class="cd-general-information">
                    <ul>
                        <li><span>Make</span><strong>{{$car->make}}</strong></li>
                        <li><span>Model</span><strong>{{$car->model}}</strong></li>
                        <li><span>Year</span><strong>{{$car->year}}</strong></li>
                        <li><span>Body</span><strong>{{$car->body_type}}</strong></li>
                        <li><span>Fuel</span><strong>{{$car->fuel}}</strong></li>
                        <li><span>Milleage</span><strong>{{$car->mileage}} km</strong></li>
                        <li><span>Engine</span><strong>{{$car->engine}} ccm</strong></li>
                        <li><span>Horse power</span><strong>{{$car->power}} KW</strong></li>
                        <li><span>Transmission</span><strong>{{$car->transmission}}</strong></li>
                        <li><span>Interior color</span><strong>{{$car->interior_color}}</strong></li>
                        <li><span>Exterior color</span><strong>{{$car->exterior_color}}</strong></li>
                        <li><span>Dors</span><strong>{{$car->doors}}</strong></li>
                        <li><span>Seats</span><strong>{{$car->seats}}</strong></li>
                    </ul>
                </div>
                <br><br>
                <div class="cd-general-title">Seller iformation</div>
                <i class="fa fa-user mr-2"></i> {{$car->user->name}}<br>
                <i class="fa fa-map-marker mr-2"></i> {{$car->user->city}} <br>
                <i class="fa fa-phone mr-2"></i> {{$car->user->phone}}




                <div class="share-box mb-4 mt-4">
                    <div class="cd-general-title"><i class="fa fa-share"></i> Share on</div>
                    <a role="button" href="#" class="btn btn-facebook btn-block mb-2">
                        <i class="fa fa-facebook m-r-5"></i> Facebook
                    </a>
                    <a role="button" href="#" class="btn btn-twitter btn-block mb-2">
                        <i class="fa fa-facebook m-r-5"></i> Twitter
                    </a>
                    <a role="button" href="#" class="btn btn-googleplus btn-block mb-2">
                        <i class="fa fa-facebook m-r-5"></i> Google +
                    </a>
                </div>


                <div class="share-box">
                    <div class="cd-general-title"><i class="fa fa-calculator"></i> Financing calc</div>
                    <div class="calculator">

                        <strong>Enter Loan Data:</strong>
                        <br><br>

                        <div class="form-group mb-2">
                            <div class="input-group">
                                <label for="amount" class="calc-label">Amount of the loan:</label>
                                <input class="form-control" aria-describedby="basic-addon2" name="amountt" type="number" value="{{$car->price}}" id="amountt">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2"> € </span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-2">
                            <label for="apr" class="calc-label">Annual interest</label>
                            <input class="form-control" aria-describedby="basic-addon2" name="amoaprunt" type="number"  id="apr" >
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"> % </span>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <label for="years" class="calc-label">Years </label>
                            <input class="form-control" aria-describedby="basic-addon2" name="years" type="number" id="years">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"> Year </span>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-block mb-4" onclick="calculate();">Calculate</button>
                        <table>

                            <tr><td>Monthly payment:</td>
                                <td>€ <strong><span class="output" id="payment"></span></strong></td></tr>
                            <tr><td>Total payment:</td>
                                <td>€ <span class="output" id="total"></span></td></tr>
                            <tr><td>Total interest:</td>
                                <td>€ <span class="output" id="totalinterest"></span></td></tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{asset('js/custom-front-js.js')}}"></script>
    <!-- Gallery -->
    <script src="{{asset('js/lightslider.js')}}"></script>
    <!-- Light gallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.19/js/lightgallery-all.min.js"></script>


@endsection

@section('scripts_data')
            <script>

                $(document).ready(function() {
                    $('#imageGallery').lightSlider({
                        gallery:true,
                        item:1,
                        loop:true,
                        thumbItem:9,
                        slideMargin:0,
                        enableDrag: false,
                        currentPagerPosition:'left',
                        onSliderLoad: function(el) {
                            el.lightGallery({
                                selector: '#imageGallery .lslide'
                            });
                        }
                    });
                });

                function calculate() {
                    //Look up the input and output elements in the document
                    var amount = document.getElementById("amountt");
                    var apr = document.getElementById("apr");
                    var years = document.getElementById("years");
                    var payment = document.getElementById("payment");
                    var total = document.getElementById("total");

// Get the user's input from the input elements.
// Convert interest from a percentage to a decimal, and convert from
// an annual rate to a monthly rate. Convert payment period in years
// to the number of monthly payments.
                    var principal = parseFloat(amount.value);
                    var interest = parseFloat(apr.value) / 100 / 12;
                    var payments = parseFloat(years.value) * 12;

// compute the monthly payment figure
                    var x = Math.pow(1 + interest, payments); //Math.pow computes powers
                    var monthly = (principal*x*interest)/(x-1);

// If the result is a finite number, the user's input was good and
// we have meaningful results to display
                    if (isFinite(monthly)){
                        // Fill in the output fields, rounding to 2 decimal places
                        payment.innerHTML = monthly.toFixed(2);
                        total.innerHTML = (monthly * payments).toFixed(2);
                        totalinterest.innerHTML = ((monthly*payments)-principal).toFixed(2);

// Save the user's input so we can restore it the next time they visit
                        save(amount.value, apr.value, years.value);

                        // Advertise: find and display local lenders, but ignore network errors
                        try { // Catch any errors that occur within these curly braces
                            getLenders(amount.value, apr.value, years.value);
                        }

                        catch(e) { /* And ignore those errors */ }
                        // Finally, chart loan balance, and interest and equity payments
                        chart(principal, interest, monthly, payments);
                    }
                    else {
                        // Result was Not-a-Number or infinite, which means the input was
                        // incomplete or invalid. Clear any previously displayed output.
                        payment.innerHTML = ""; // Erase the content of these elements
                        total.innerHTML = ""
                        totalinterest.innerHTML = "";
                        chart(); // With no arguments, clears the chart
                    }
                }
                // Save the user's input as properties of the localStorage object. Those
                // properties will still be there when the user visits in the future
                // This storage feature will not work in some browsers (Firefox, e.g.) if you
                // run the example from a local file:// URL. It does work over HTTP, however.
                function save(amount, apr, years) {
                    if (window.localStorage) { // Only do this if the browser supports it
                        localStorage.loan_amount = amount;
                        localStorage.loan_apr = apr;
                        localStorage.loan_years = years;

                    }
                }
                // Automatically attempt to restore input fields when the document first loads.
                window.onload = function() {
                    // If the browser supports localStorage and we have some stored data
                    if (window.localStorage && localStorage.loan_amount) {
                        document.getElementById("amount").value = localStorage.loan_amount;
                        document.getElementById("apr").value = localStorage.loan_apr;
                        document.getElementById("years").value = localStorage.loan_years;
                    }
                };
                // Pass the user's input to a server-side script which can (in theory) return
                // a list of links to local lenders interested in making loans. This example
                // does not actually include a working implementation of such a lender-finding
                // service. But if the service existed, this function would work with it.
                function getLenders(amount, apr, years) {
                    // If the browser does not support the XMLHttpRequest object, do nothing
                    if (!window.XMLHttpRequest) return;
                    // Find the element to display the list of lenders in
                    var ad = document.getElementById("lenders");
                    if (!ad) return; // Quit if no spot for output

                    // Encode the user's input as query parameters in a URL
                    var url = "getLenders.php" + // Service url plus
                        "?amt=" + encodeURIComponent(amount) + // user data in query string
                        "&apr=" + encodeURIComponent(apr) +
                        "&yrs=" + encodeURIComponent(years);
                    // Fetch the contents of that URL using the XMLHttpRequest object
                    var req = new XMLHttpRequest(); // Begin a new request
                    req.open("GET", url); // An HTTP GET request for the url
                    req.send(null); // Send the request with no body
                    // Before returning, register an event handler function that will be called
                    // at some later time when the HTTP server's response arrives. This kind of
                    // asynchronous programming is very common in client-side JavaScript.
                    req.onreadystatechange = function() {
                        if (req.readyState == 4 && req.status == 200) {
                            // If we get here, we got a complete valid HTTP response
                            var response = req.responseText; // HTTP response as a string
                            var lenders = JSON.parse(response); // Parse it to a JS array
                            // Convert the array of lender objects to a string of HTML
                            var list = "";
                            for(var i = 0; i < lenders.length; i++) {
                                list += "<li><a href='" + lenders[i].url + "'>" +
                                    lenders[i].name + "</a>";
                            }
                            // Display the HTML in the element from above.
                            ad.innerHTML = "<ul>" + list + "</ul>";
                        }
                    }
                }

                // Chart monthly loan balance, interest and equity in an HTML <canvas> element.
                // If called with no arguments then just erase any previously drawn chart.
                function chart(principal, interest, monthly, payments) {
                    var graph = document.getElementById("graph"); // Get the <canvas> tag
                    graph.width = graph.width; // Magic to clear and reset the canvas element
                    // If we're called with no arguments, or if this browser does not support
                    // graphics in a <canvas> element, then just return now.
                    if (arguments.length == 0 || !graph.getContext) return;
                    // Get the "context" object for the <canvas> that defines the drawing API
                    var g = graph.getContext("2d"); // All drawing is done with this object
                    var width = graph.width, height = graph.height; // Get canvas size
                    // These functions convert payment numbers and dollar amounts to pixels
                    function paymentToX(n) { return n * width/payments; }
                    function amountToY(a) { return height-(a * height/(monthly*payments*1.05));}
                    // Payments are a straight line from (0,0) to (payments, monthly*payments)
                    g.moveTo(paymentToX(0), amountToY(0)); // Start at lower left
                    g.lineTo(paymentToX(payments), // Draw to upper right
                        amountToY(monthly*payments));

                    g.lineTo(paymentToX(payments), amountToY(0)); // Down to lower right
                    g.closePath(); // And back to start
                    g.fillStyle = "#f88"; // Light red
                    g.fill(); // Fill the triangle
                    g.font = "bold 12px sans-serif"; // Define a font
                    g.fillText("Total Interest Payments", 20,20); // Draw text in legend
                    // Cumulative equity is non-linear and trickier to chart
                    var equity = 0;
                    g.beginPath(); // Begin a new shape
                    g.moveTo(paymentToX(0), amountToY(0)); // starting at lower-left
                    for(var p = 1; p <= payments; p++) {
                        // For each payment, figure out how much is interest
                        var thisMonthsInterest = (principal-equity)*interest;
                        equity += (monthly - thisMonthsInterest); // The rest goes to equity
                        g.lineTo(paymentToX(p),amountToY(equity)); // Line to this point
                    }
                    g.lineTo(paymentToX(payments), amountToY(0)); // Line back to X axis
                    g.closePath(); // And back to start point
                    g.fillStyle = "green"; // Now use green paint
                    g.fill(); // And fill area under curve
                    g.fillText("Total Equity", 20,35); // Label it in green
                    // Loop again, as above, but chart loan balance as a thick black line
                    var bal = principal;
                    g.beginPath();
                    g.moveTo(paymentToX(0),amountToY(bal));
                    for(var p = 1; p <= payments; p++) {
                        var thisMonthsInterest = bal*interest;
                        bal -= (monthly - thisMonthsInterest); // The rest goes to equity
                        g.lineTo(paymentToX(p),amountToY(bal)); // Draw line to this point
                    }
                    g.lineWidth = 3; // Use a thick line
                    g.stroke(); // Draw the balance curve
                    g.fillStyle = "black"; // Switch to black text
                    g.fillText("Loan Balance", 20,50); // Legend entry
                    // Now make yearly tick marks and year numbers on X axis
                    g.textAlign="center"; // Center text over ticks
                    var y = amountToY(0); // Y coordinate of X axis
                    for(var year=1; year*12 <= payments; year++) { // For each year
                        var x = paymentToX(year*12); // Compute tick position
                        g.fillRect(x-0.5,y-3,1,3); // Draw the tick
                        if (year == 1) g.fillText("Year", x, y-5); // Label the axis
                        if (year % 5 == 0 && year*12 !== payments) // Number every 5 years
                            g.fillText(String(year), x, y-5);
                    }
                    // Mark payment amounts along the right edge
                    g.textAlign = "right"; // Right-justify text
                    g.textBaseline = "middle"; // Center it vertically
                    var ticks = [monthly*payments, principal]; // The two points we'll mark
                    var rightEdge = paymentToX(payments); // X coordinate of Y axis
                    for(var i = 0; i < ticks.length; i++) { // For each of the 2 points
                        var y = amountToY(ticks[i]); // Compute Y position of tick

                        g.fillRect(rightEdge-3, y-0.5, 3,1); // Draw the tick mark
                        g.fillText(String(ticks[i].toFixed(0)), // And label it.
                            rightEdge-5, y);
                    }
                }
            </script>
    @endsection