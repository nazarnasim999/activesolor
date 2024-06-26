<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Solar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


    <header>
        <div class="Container">
            <nav>
                <div class="nav-part-1">
                    <div class="toogel-logo">
                        <a href="#menu" id="toggle"><span></span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="278"
                            height="44" viewBox="0 0 278 44" fill="none">
                            <path d="M278 0H0V44H278V0Z" fill="url(#pattern0_1_6)" />
                            <defs>
                                <pattern id="pattern0_1_6" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_1_6"
                                        transform="matrix(0.000981354 0 0 0.00621524 0 -0.000327118)" />
                                </pattern>
                                <image id="image0_1_6" width="1019" height="161"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>

                    <div class="logo-ul-list">
                        <ul>
                            <li><a href="#">Dashboard</a></li>
                            <li>
                           <div class="dropdown display"  >
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                        <p>Profile</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9"
                                            fill="none">
                                            <path d="M1 1L6 8L11 1" stroke="#505656" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">JavaScript</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown display">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                        <p>Switch Account</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9"
                                            fill="none">
                                            <path d="M1 1L6 8L11 1" stroke="#505656" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">JavaScript</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="nav-part-2">
                    <button class="part-2-btn-a">Announcements & Resources</button>

                    <div class="nav-2-box">
                        <div class="nav-2-card left-boder ">
                            <!-- <h3>Fri, May 17 2024, 14:11:58</h3> -->
                            <h3>{{ now()->format('D, M d Y, H:i:s') }}</h3>

                        </div>

                        <div class="nav-2-card ">
                            <h3>{{auth()->user()->name}}</h3>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<button onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </header>


    <section class="brayn">
        <div class="Container">
            <div class="main-brayn">
                <div class="Jessica-box">
                    <h1>{{auth()->user()->name}}</h1>
                    <div class="Jessica-card">
                        <div class="Version-box">
                            <span class="span-1">
                                <h2>Initial Version</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.8488 2.69C17.3863 2.5 16.7987 2.5 15.625 2.5C14.4513 2.5 13.865 2.5 13.4012 2.69C12.7856 2.94276 12.2955 3.42971 12.0387 4.04375C11.9212 4.3225 11.8763 4.64875 11.8575 5.1225C11.8492 5.46575 11.7534 5.80121 11.5793 6.09715C11.4052 6.39309 11.1585 6.63973 10.8625 6.81375C10.5609 6.98138 10.2219 7.07018 9.87691 7.07193C9.53188 7.07368 9.192 6.98831 8.88875 6.82375C8.46625 6.60125 8.16 6.47875 7.8575 6.43875C7.19569 6.35185 6.52634 6.52975 5.995 6.93375C5.5975 7.23625 5.30375 7.74125 4.7175 8.75C4.13 9.75875 3.8375 10.2625 3.77125 10.7562C3.68375 11.4137 3.86375 12.0787 4.27125 12.605C4.45625 12.845 4.7175 13.0463 5.12125 13.2987C5.7175 13.67 6.1 14.3025 6.1 15C6.1 15.6975 5.7175 16.33 5.1225 16.7C4.7175 16.9537 4.45625 17.155 4.27 17.395C4.06885 17.6549 3.92121 17.9521 3.83561 18.2695C3.75 18.5868 3.72813 18.9179 3.77125 19.2438C3.8375 19.7362 4.13 20.2412 4.7175 21.25C5.305 22.2588 5.5975 22.7625 5.995 23.0662C6.525 23.47 7.195 23.6475 7.8575 23.5613C8.16 23.5213 8.46625 23.3988 8.88875 23.1763C9.19216 23.0115 9.53227 22.926 9.87753 22.9277C10.2228 22.9295 10.562 23.0184 10.8637 23.1862C11.4712 23.5362 11.8313 24.18 11.8575 24.8775C11.8763 25.3525 11.9212 25.6775 12.0387 25.9562C12.2937 26.5687 12.7837 27.0562 13.4012 27.31C13.8637 27.5 14.4513 27.5 15.625 27.5C16.7987 27.5 17.3863 27.5 17.8488 27.31C18.4644 27.0572 18.9545 26.5703 19.2113 25.9562C19.3288 25.6775 19.3737 25.3525 19.3925 24.8775C19.4175 24.18 19.7787 23.535 20.3875 23.1862C20.6891 23.0186 21.0281 22.9298 21.3731 22.9281C21.7181 22.9263 22.058 23.0117 22.3612 23.1763C22.7838 23.3988 23.09 23.5213 23.3925 23.5613C24.055 23.6488 24.725 23.47 25.255 23.0662C25.6525 22.7637 25.9462 22.2588 26.5325 21.25C27.12 20.2412 27.4125 19.7375 27.4787 19.2438C27.5217 18.9178 27.4996 18.5867 27.4138 18.2693C27.328 17.952 27.1801 17.6548 26.9787 17.395C26.7937 17.155 26.5325 16.9537 26.1287 16.7013C25.5325 16.33 25.15 15.6975 25.15 15C25.15 14.3025 25.5325 13.67 26.1275 13.3C26.5325 13.0463 26.7937 12.845 26.98 12.605C27.1811 12.3451 27.3288 12.0479 27.4144 11.7305C27.5 11.4132 27.5219 11.0821 27.4787 10.7562C27.4125 10.2637 27.12 9.75875 26.5325 8.75C25.945 7.74125 25.6525 7.2375 25.255 6.93375C24.7237 6.52975 24.0543 6.35185 23.3925 6.43875C23.09 6.47875 22.7838 6.60125 22.3612 6.82375C22.0578 6.98854 21.7177 7.07402 21.3725 7.07227C21.0272 7.07052 20.688 6.9816 20.3862 6.81375C20.0905 6.63958 19.844 6.39287 19.6701 6.09694C19.4963 5.80101 19.4007 5.46563 19.3925 5.1225C19.3737 4.6475 19.3288 4.3225 19.2113 4.04375C19.0842 3.73967 18.8985 3.4636 18.6647 3.23132C18.4309 2.99904 18.1536 2.8151 17.8488 2.69ZM15.625 18.75C17.7125 18.75 19.4037 17.0712 19.4037 15C19.4037 12.9288 17.7112 11.25 15.625 11.25C13.5375 11.25 11.8463 12.9288 11.8463 15C11.8463 17.0712 13.5387 18.75 15.625 18.75Z"
                                        fill="white" />
                                </svg>
                            </span>
                            <span class="span-2">
                                <a href="#">Created 05/04/2025</a>
                            </span>
                            <span class="span-3">
                                <a href="#">Last Edited 2 days ago </a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <path
                                        d="M12.5 5H7.5C6.83696 5 6.20107 5.26339 5.73223 5.73223C5.26339 6.20107 5 6.83696 5 7.5V22.5C5 23.163 5.26339 23.7989 5.73223 24.2678C6.20107 24.7366 6.83696 25 7.5 25H22.5C23.163 25 23.7989 24.7366 24.2678 24.2678C24.7366 23.7989 25 23.163 25 22.5V17.5M15 15L25 5M25 5V11.25M25 5H18.75"
                                        stroke="white" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>

                    </div>
                </div>



                <div class="entry-form">
                    <form action="{{ route('store') }}" method="post">

                    @csrf

                    <div class="brayn-box aling-left">
                        <h1>Basic Info</h1>
                        <div class="brayn-form">
                            <div class="brayn-in-grouop">
                                <label for="#">Installer</label>
                                <select name="installer" id="cars">
                                    <option value="" disabled selected hidden>Infinity</option>
                                    <option value="Infinity">Infinity</option>
                                    <option value="Patriot">Patriot</option>
                                    <option value="Skyline">Skyline</option>

                                </select>
                            </div>
                            <div class="brayn-in-grouop">
                                <label for="#">State</label>
                                <select name="state" id="cars">
                                    <option value="" disabled selected hidden>CT</option>
                                    <option value="CT">CT</option>
                                    <option value="NY">NY</option>
                                    <option value="NJ">NJ</option>

                                </select>
                            </div>
                            <div class="brayn-in-grouop">
                                <label for="#">Utility Providers</label>
                                <select name="providers" id="cars">
                                    <option value="" disabled selected hidden>ConEd</option>
                                    <option value="ConEd">ConEd</option>
                                    <option value="National Grid">National Grid</option>
                                    <option value="O&R">O&R</option>
                                    <option value="Central Hudson">Central Hudson</option>
                                    <option value="EVERSOURCE">EVERSOURCE</option>
                                    <option value="UI">UI</option>




                                </select>
                            </div>
                            <div class="brayn-in-grouop">
                                <label for="#">Average Monthly Utility Cost</label>
                                <input type="number" placeholder="Type Here.." name='average'>
                            </div>
                            <div class="brayn-in-grouop">
                                <label for="#">Basic Service Package</label>
                                <input type="number" placeholder="Type Here..." name="packeage" >
                            </div>
                            <div class="brayn-in-grouop">
                                <label for="#">System Size</label>
                                <input type="number" placeholder="Type Here..." name="size" >
                            </div>
                            <div class="brayn-in-grouop">
                                <label for="#">Panel Type</label>
                                <select name="panel" id="cars">
                                    <option value="" disabled selected hidden>SEG410</option>
                                    <option value="SEG410">SEG410</option>

                                </select>
                            </div>
                            <div class="brayn-in-grouop">
                                <label for="#">System Production</label>
                                <input type="text" placeholder="Type Here..." name="production">
                            </div>
                        </div>
                    </div>
                    <!-- Basic Info form End -->


                    <!-- Historic Information form Start -->
                    <div class="brayn-box">
                        <h1>Historic Information</h1>
                        <div class="brayn-form">
                            <div class="brayn-in-grouop part-2">
                                <label for="#">January</label>
                                <input type="number" placeholder="Type Here..." name="january" >
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">February</label>
                                <input type="number" placeholder="Type Here..." name="february">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">March</label>
                                <input type="number" placeholder="Type Here..." name="march">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">April</label>
                                <input type="number" placeholder="Type Here..." name="april" >
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">May</label>
                                <input type="number" placeholder="Type Here..." name="may" >
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">June</label>
                                <input type="number" placeholder="Type Here..." name="june" >
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">July</label>
                                <input type="number" placeholder="Type Here..."  name="july" >
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">August</label>
                                <input type="number" placeholder="Type Here..." name="august">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">September</label>
                                <input type="number" placeholder="Type Here..." name="september">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">October</label>
                                <input type="number" placeholder="Type Here..." name="octobar">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">November</label>
                                <input type="number" placeholder="Type Here..." name="november" >
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">December</label>
                                <input type="number" placeholder="Type Here..." name="december" >
                            </div>
                            <div class="brayn-in-grouop">
                                <label for="#">Estimated Yearly Consumption</label>
                                <input type="number" placeholder="Type Here..." name="yearly_consumption">
                            </div>
                            <div class="brayn-in-grouop ">
                                <label for="#">Estimated Yearly Production</label>
                                <input type="number" placeholder="Type Here..." name="yearly_production" >
                            </div>
                            <div class="brayn-in-grouop ">
                                <label for="#">Offset</label>
                                <input type="number" placeholder="" name="offset" >
                            </div>
                        </div>
                    </div>
                    <!-- Historic Information form End -->

                    <!-- Deal type form Start -->
                    <div class="brayn-box">
                        <h1>Deal Type</h1>
                        <div class="brayn-form">
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Deal Type</label>
                                <select name="loan" id="cars">
                                    <option value="" disabled selected hidden>Loan</option>
                                    <option value="Loan1">Loan</option>
                                    <option value="Loan2">PPA</option>
                                    <option value="Loan2">Cash</option>

                                </select>
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Lender</label>
                                <select name="lender" id="cars">
                                    <option value="" disabled selected hidden>Goodleap</option>
                                    <option value="Loan1">Goodleap</option>
                                    <option value="Loan2">Dividend</option>
                                    <option value="Loan2">Sunnova</option>

                                </select>
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Loan Term</label>
                                <input type="number" placeholder="Type Here..." name="loan_term">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">PERCENTAGE</label>
                                <input type="number" placeholder="Type Here..." name="apr" >
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Cash Down</label>
                                <input type="number" placeholder="0" name="cash" >
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Solar PPW</label>
                                <input type="number" placeholder="Type Here..." name="solar" >
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Total System Cost</label>
                                <input type="number" placeholder="Type Here..."  name="system_cost">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Rebate Level</label>
                                <input type="number" placeholder="0.2"  name="rebate">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">State Rebate</label>
                                <input type="number" placeholder="1,018.44" name="state_rebate">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Federal Tax Credit</label>
                                <input type="number" placeholder="8,747.27" name="federal_tax" >
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">State Tax Credit</label>
                                <input type="number" placeholder="5000.00"  name="state_tax">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Total Tax Credit</label>
                                <input type="number" placeholder="13,747.27"  name="total_tax" >
                            </div>
                            <div class="brayn-in-grouop part-3">
                                <label for="#">Total Financed Amount</label>
                                <input type="number" placeholder="29,157.56"  name="total_finance">
                            </div>
                            <div class="brayn-in-grouop part-3">
                                <label for="#">Net Cost</label>
                                <input type="number" placeholder="Type Here..."   name="net_cost">
                            </div>
                        </div>
                    </div>
                    <!-- Deal type form End -->


                    <!-- Monthly Payment Form Start -->
                    <div class="brayn-box">
                        <h1>Monthly Payment</h1>
                        <div class="brayn-form">
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Reamorization Loan</label>
                                <input type="number" placeholder="201.00"  name="Reamorization">

                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Ream Loan + Basic Service Charge</label>
                                <input type="number" placeholder="201.00"  name="basic_service_charge">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Option A - Keep Tax Credit</label>
                                <input type="number" placeholder="Type Here..." name="keep_tax_credit">
                            </div>
                            <div class="brayn-in-grouop part-2">
                                <label for="#">Option B - Allocate Tax Credit</label>
                                <input type="number" placeholder="Type Here..."  name="allocate_tax_credit">
                            </div>
                            <div class="brayn-in-grouop ">
                                <label for="#">Total Cost Staying with util</label>
                                <input type="number" placeholder="0" name="total_cost_util">
                            </div>
                            <div class="brayn-in-grouop ">
                                <label for="#">Total Cost  switching to solar</label>
                                <input type="number" placeholder="Type Here..." name="switching_solar" >
                            </div>
                            <div class="brayn-in-grouop ">
                                <label for="#">30 Year Savings</label>
                                <input type="number" placeholder="Type Here..."  name="year_saving">
                            </div>
                        </div>
                    </div>

                    <div class="brayn-btn-box">
                        <button type="submit">Generate Report</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>






    <footer>
        <div class="Container">
            <div class="main-footer">
                <a href="#">Active Solar © 2024 - All Rights Reserved</a>
            </div>
        </div>
    </footer>


    <script>
    var theToggle = document.getElementById('toggle');

    // based on Todd Motto functions
    // https://toddmotto.com/labs/reusable-js/

    // hasClass
    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }
    // addClass

    function addClass(elem, className) {
        if (!hasClass(elem, className)) {
            elem.className += ' ' + className;
        }
    }
    // removeClass

    function removeClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        }
    }
    // toggleClass

    function toggleClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, " ") + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(" " + className + " ") >= 0) {
                newClass = newClass.replace(" " + className + " ", " ");
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        } else {
            elem.className += ' ' + className;
        }
    }

    theToggle.onclick = function() {
        toggleClass(this, 'on');
        return false;
    }
    </script>


</body>

</html>

<style>



    .display{
        opacity: 0;
    }
</style>
