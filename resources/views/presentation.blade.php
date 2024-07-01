


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Main </title>


</head>


<body>


    <div class="slideshow-container">
        {{-- {{dd($deal->lender)}} --}}

                <div class="mySlides fade">
                    <section class="section-1">
                        <div class="main-section-1">


                            <div class="section-1-tital">
                                <a href="#"><img src="/images/section-1-logo.png" alt="" class="short-logo"></a>
                                <img src="/images/section-tital.png" alt="">
                            </div>

                            <div class="section-1-imger">
                                <img src="/images/section-1-img.png" alt="">
                            </div>
                        </div>
                    </section>
                </div>


                <div class="mySlides fade">
                    <section class="section-3">
                        <div class="main-section-3">
                            <div class="section-3-logo">
                       <a href="#">         <img src="/images/logo.png" alt=""></a>

                               <a href="#"  class="Discovery"> <img src="/images/Discovery.png" alt=""></a>
                            </div>

                            <div class="section-3-box">
                                <div class="section-3-list">
                                    <p>Have you looked into solar before?</p>
                                </div>
                                <div class="section-3-list">
                                    <p>What has you interested in solar now?</p>
                                </div>
                                <div class="section-3-list">
                                    <p>Planning on changing anything to increase <br> energy consumption?</p>
                                </div>
                                <div class="section-3-list">
                                    <p>How old is your roof?</p>
                                </div>
                                <div class="section-3-list">
                                    <p>How long have you lived here? <br>
                                        Do you plan on moving?</p>
                                </div>
                                <div class="section-3-list">
                                    <p>What concerns do you have?</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="mySlides fade">
                    <section class="section-5">
                        <div class="main-section-5">
                            <div class="section-5-logo">
                              <a href="#">  <img src="/images/a-logo.png" alt=""></a>
                            </div>

                            <div class="section-5-box">
                                <div class="section-5-card">
                                    <h2>About ActivSolar</h2>

                                    <p>At ActivSolar, we are more than just a solar energy provider; we are you local home energy advisors.Our expertise lies in creating bespoke solar solutions that are as unique as your property. </p>
                                    <br>
                                    <br>
                                    <p>We believe in a win-win philosophy: your success is our success. That's why we delve deep into understanding the intricacies of your property, ensuring that every solar installation we undertake is meticulously tailored to maximize your benefits.</p>

                                    <div class="section-5-list">
                                        <img src="/images/google.png" alt="" class="google">


                                        <img src="/images/rated.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                @if ($basic->installer =='Infinity')


                <div class="mySlides fade">
                    <section class="section-6">
                        <div class="main-section-6">

                            <div class="section-6-logo">
                           <a href="#">     <img src="/images/a-logo.png" alt=""></a>
                            </div>

                            <div class="section-6-box">
                                <div class="section-6-card">
                                    <h2>OUR LOCAL INSTALL PARTNER</h2>
                                    <h3>Why Infinity Energy?</h3>

                                    <p>Infinity Energy is one of the few premier turnkey solar provider in the Northeast, managing the entire process in-house—from site assessment and permitting to system activation. We ensure a seamless transition to solar energy without relying on subcontractors or day laborers</p>

                                    <ul>
                                        <li>Founded in 2008</li>
                                        <li>Local Installer</li>
                                        <li>4.7/5 Online rating</li>
                                    </ul>

                                    <img src="/images/google.png" alt="">

                                    <p>Solar energy contractor in Mahwah, New Jersey</p>
                                </div>
                                <div class="section-6-list">
                                    <p>We have installedover 10000 ofyour neighbors inthe past 15 years</p>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
                @endif


                <div class="mySlides fade">
                    <section class="section-7">
                        <div class="main-section-7">
                            <img src="/images/section-7.png" alt="">
                        </div>
                    </section>
                </div>


                <div class="mySlides fade">
                    <section class="section-8">
                        <div class="main-section-8">
                            <img src="/images/section-8.png" alt="">
                        </div>
                    </section>
                </div>


                <div class="mySlides fade">
                    <section class="section-9">
                        <div class="main-section-9">
                            <div class="section-9-logo">
                      <a href="#"> <img src="/images/logo.png" alt=""></a>
                        </div>


                        <div class="section-9-box">

                            <div class="section-9-span">
                                <h2>Net Metering</h2>
                            </div>
                            <div class="section-9-list">
                                <p>Net Metering is a billing mechanism that allows owners of solar panels or other renewable energy systems to connect their systems to the electric grid and receive credit for any excess electricity they generate.</p>
                            </div>
                        </div>
                        </div>
                    </section>
                </div>



                <div class="mySlides fade">
                    <section class="section-11">

                        <div class="main-section-11">

                            <div class="section-11-box">
                                <div class="section-11-logo">
                                     <a href="#"><img src="/images/a-logo.png" alt=""></a>
                                </div>

                                <div class="section-11-box-card">
                                    <h2>Understanding
                                        your bill -
                                        before solar</h2>

                                        <ul>
                                            <li>Supply</li>
                                            <li>Delivery</li>
                                            <li>Basic Service Charge</li>
                                        </ul>
                                </div>
                            </div>


                            <div class="section-11-imger">
                                <div class="section-bill">
                                    <img src="/images/mb-4.png" alt="" class="images-with">

                                </div>

                                <div class="section-bill  site">
                                    <img src="/images/ele-2.png" alt="" class="images-with">
                                    <img src="/images/mb-td.png" alt="" class="images-with">


                                </div>

                                <div class="mb-box">


                                    <div class="jaduhe-box">
                                        <span>
                                            <span class=".class-no">

                                                <h3>Delivery Charges:</h3>
                                                <h2>What It Cost To Have Your Energy “Shipped” To Your House</h2>

                                            </span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="58" viewBox="0 0 34 58" fill="none">
                                                    <g clip-path="url(#clip0_1236_462)">
                                                      <path d="M11.7882 33.9295C7.85773 34.2691 4.27643 34.5766 0 34.9418C9.93989 22.9742 19.4794 11.4871 29.022 0C29.1502 0.0672696 29.2815 0.134539 29.4096 0.201809C27.0136 7.38364 24.6175 14.5655 22.0997 22.1093C26.043 21.789 29.7011 21.4943 34 21.1483C24.2107 33.5259 14.7417 45.4935 5.27266 57.4611C5.15093 57.4002 5.03241 57.3394 4.91068 57.2817C7.16902 49.613 9.42736 41.9442 11.785 33.9295H11.7882Z" fill="#1226AA"/>
                                                    </g>
                                                    <defs>
                                                      <clipPath id="clip0_1236_462">
                                                        <rect width="34" height="57.4611" fill="white"/>
                                                      </clipPath>
                                                    </defs>
                                                  </svg>
                                        </span>
                                        <ul>
                                            <li>Electricity generated at the power plant</li>
                                            <li>Comes from natural gas, coal and other non renewable sources</li>
                                            <li>Fluctuates in prices. Typically increases 4% annually.</li>
                                        </ul>
                                    </div>



                                    <div class="jaduhe-box">
                                        <span>
                                            <span class=".class-no">

                                                <h3>Delivery Charges:</h3>
                                                <h2>What It Cost To Have Your Energy “Shipped” To Your House</h2>

                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="50" viewBox="0 0 41 50" fill="none">
                                                <g clip-path="url(#clip0_1236_465)">
                                                  <path d="M40.7546 15.2663C40.9232 13.9801 40.9157 14.0002 39.8132 13.5773C36.5938 12.3389 33.5556 10.8966 32.7099 6.95479C32.3197 6.97492 31.9321 6.99506 31.5722 7.0152C30.953 10.7707 26.3894 15.2487 22.6364 15.8352C22.6364 14.6597 22.727 13.4842 22.6112 12.3313C22.4803 11.0199 22.8831 10.149 24.0435 9.46435C25.146 8.81242 26.1251 7.95156 27.3812 7.01771H13.9876C14.2519 7.26439 14.3551 7.37515 14.4709 7.46828C15.8679 8.61105 17.8262 9.49456 18.5108 10.9671C19.2131 12.4773 18.6115 14.5691 18.6971 16.4015C18.7424 17.3681 18.4102 17.7734 17.499 18.0452C12.0016 19.6964 6.37331 20.5699 0.667006 21.0255C0.470671 21.0406 0.276853 21.0909 0.00248769 21.1387C0.030176 21.5566 0.0503129 21.9065 0.0805183 22.347C6.44631 21.9971 12.5755 20.9273 18.7273 19.0495V49.9975H22.6364C22.6364 49.411 22.6364 48.9176 22.6364 48.4243C22.6364 38.537 22.6364 28.6498 22.6364 18.7626C22.6364 18.1031 22.5735 17.5367 23.4117 17.1516C26.9734 15.518 30.2482 13.4917 32.2568 9.81927C34.3913 12.8524 37.4043 14.2897 40.7546 15.2638V15.2663ZM8.54055 6.55457C8.2536 8.99365 7.20899 10.4511 5.63579 11.4151C4.12301 12.3414 2.48185 13.0764 0.843205 13.7636C0.0452786 14.0958 -0.206433 14.4583 0.173652 15.3368C3.70265 14.4306 6.82639 12.9002 9.04649 9.81675C10.9066 13.2702 13.8919 15.2009 17.217 16.8798C17.509 15.9233 17.3303 15.4073 16.5299 15.007C15.6036 14.5439 14.7226 13.9675 13.8919 13.3457C11.921 11.8732 10.2522 10.1817 9.77645 7.60169C9.71604 7.27446 9.1371 7.04289 8.54055 6.55708V6.55457ZM40.7168 22.4527C41.0516 21.33 40.7823 21.0406 39.9365 20.96C37.578 20.7335 35.2169 20.4868 32.8836 20.0815C29.9159 19.5655 26.9759 18.8884 24.0258 18.2818C23.6709 19.2081 24.1215 19.5907 25.0176 19.7795C27.1295 20.2275 29.2161 20.8317 31.3431 21.1815C34.4467 21.6925 37.578 22.0373 40.7168 22.4552V22.4527Z" fill="#1226AA"/>
                                                  <path d="M35.7204 0C35.7582 0.823097 35.7959 1.64619 35.8337 2.5146C36.244 2.59263 36.6014 2.66311 37.0419 2.74617V5.50493H4.22876V2.75624C4.58871 2.68073 4.97383 2.6027 5.41432 2.50957V0H8.17056V2.5448H10.0559C10.0987 1.63864 10.1364 0.818063 10.1742 0C11.0099 0 11.843 0 12.6787 0V2.54984H28.4585V0H31.2148V2.54984H33.2184V0H35.7229H35.7204Z" fill="#1226AA"/>
                                                  <path d="M40.7546 15.2663C37.4043 14.2897 34.3913 12.8549 32.2568 9.82178C30.2481 13.4943 26.9733 15.5205 23.4116 17.1541C22.5734 17.5393 22.6364 18.1056 22.6364 18.7651C22.6364 28.6523 22.6364 38.5396 22.6364 48.4268C22.6364 48.9202 22.6364 49.416 22.6364 50H18.7273V19.0521C12.5754 20.9298 6.44626 21.9996 0.080472 22.3495C0.0527837 21.9065 0.0301297 21.5591 0.00244141 21.1413C0.276807 21.0934 0.470625 21.0456 0.66696 21.028C6.37326 20.5724 12.0015 19.6989 17.4989 18.0477C18.4101 17.7734 18.7424 17.3681 18.6971 16.404C18.6115 14.5716 19.2131 12.4799 18.5108 10.9696C17.8261 9.49456 15.8678 8.61357 14.4708 7.4708C14.355 7.37515 14.2518 7.26691 13.9875 7.02023H27.3811C26.1251 7.95408 25.1459 8.81494 24.0434 9.46687C22.8855 10.1515 22.4828 11.0224 22.6112 12.3339C22.727 13.4867 22.6364 14.6622 22.6364 15.8377C26.3894 15.2512 30.9529 10.7733 31.5721 7.01772C31.9321 7.0001 32.3197 6.97996 32.7099 6.95731C33.5556 10.8991 36.5938 12.3414 39.8132 13.5798C40.9157 14.0027 40.9232 13.9851 40.7546 15.2688V15.2663Z" fill="#1226AA"/>
                                                  <path d="M8.54055 6.55458C9.1371 7.04038 9.71604 7.27196 9.77645 7.59918C10.2522 10.1792 11.921 11.8732 13.8919 13.3432C14.7226 13.9625 15.6036 14.5414 16.5299 15.0045C17.3303 15.4048 17.509 15.9208 17.217 16.8773C13.8919 15.2009 10.9066 13.2677 9.04649 9.81425C6.82639 12.8977 3.70265 14.4281 0.173652 15.3343C-0.206433 14.4558 0.0452786 14.0959 0.843205 13.7611C2.48436 13.0739 4.12552 12.3389 5.63579 11.4126C7.20647 10.4486 8.2536 8.99115 8.54055 6.55206V6.55458Z" fill="#1226AA"/>
                                                  <path d="M40.717 22.4527C37.5781 22.0348 34.4469 21.6925 31.3433 21.179C29.2163 20.8291 27.1321 20.2225 25.0177 19.777C24.1216 19.5882 23.6711 19.2056 24.026 18.2793C26.9786 18.8859 29.916 19.5655 32.8837 20.079C35.2146 20.4843 37.5781 20.7285 39.9367 20.9575C40.7824 21.0381 41.0518 21.3275 40.717 22.4502V22.4527Z" fill="#1226AA"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_1236_465">
                                                    <rect width="40.8553" height="50" fill="white"/>
                                                  </clipPath>
                                                </defs>
                                              </svg>
                                        </span>
                                        <ul>
                                            <li>Cost to maintain the grid and power lines </li>
                                            <li>Government regulated</li>
                                            <li>Increases annually due to changes in infrastructure</li>
                                        </ul>
                                    </div>


                                </div>

                            </div>

                        </div>

                    </section>
                </div>


                <div class="mySlides fade">
                    <section class="section-11">
                        <div class="main-section-11">


                            <div class="section-11-box">
                                <div class="section-11-logo">
                                     <a href="#"><img src="/images/a-logo.png" alt=""></a>
                                </div>

                                <div class="section-11-box-card">
                                    <h2>Understanding
                                        your bill</h2>

                                        <p>This is how your bill looks before and after you transition to solar.</p>
                                </div>
                            </div>


                            <div class="section-11-imger">
                                <div class="section-bill">
                                    <img src="/images/ele.png" alt="">

                                    <img src="/images/eleract.png" alt="">
                                </div>

                                <div class="section-bill ele">
                                    <img src="/images/biller.png" alt="">
                                    <img src="/images/bill.png" alt="">
                                </div>
                            </div>

                        </div>
                    </section>
                </div>



                <div class="mySlides fade">
                    <section class="section-12">
                        <div class="main-section-12">
                            <div class="section-12-logo">
                                <img src="/images/logo.png" alt="">
                            </div>

                            <div class="section-12-box">
                                <div class="section-12-list">

                                    <div class="section-12-card">
                                        <h2>Rising Cost of Power</h2>
                                        <p>Updating the Electric infrastructure will cost  <span>7 trillion dollars</span>.</p>

                                        <ul>
                                            <li><p>State & Utility companies are passing billions of dollars worth of updates on to homeowners.</p></li>
                                            <li><p>Electricity rates in the US climbed <span>14.3%</span> in 2022 alone.</p></li>
                                            <li><p>Electricity to  heat homes is expected to cost  10.2% more or,</p></li>
                                            <li><p>$1,359 more for the season</p></li>
                                        </ul>

                                        <div class="a-site">
                                            <a href="#">Source</a>
                                         </div>
                                    </div>


                                    <div class="section-12-card">
                                        <h2>Our Grid is Falling  </h2>
                                        <p>Today's grid was built over a 100 years ago to meet the demands of the consumers of that time.</p>

                                        <ul>
                                            <li><p>With nuclear being phased out and coal being too dirty. </p></li>

                                            <li><p>America is in an energy crisis.</p></li>
                                            <li><p>Power outages have been on a steady increase since the 1960s due to lack of updates to electric grid.</p></li>
                                            <li><p>With homeowners using more power than ever, we need a solution.</p></li>
                                        </ul>
                                        <div class="a-site">
                                       <a href="#">Source</a>
                                    </div>
                                    </div>
                                </div>


                                <div class="section-12-round">
                                    <img src="/images/round.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="mySlides fade">
                    <section class="section-14">
                        <div class="main-section-14">
                            <div class="section-14-logo">
                              <a href="#">  <img src="/images/logo.png" alt=""></a>
                            </div>

                            <div class="section-14-box">
                                <div class="section-14-btn">
                                    <a href="#"> <img src="/images/wher.png" alt=""></a>
                                </div>

                                <div class="section-14-boxing">
                                    <div class="map-child-1">
                                         <a href="#"><img src="/images/bt-1.png" alt="" class="btn-1"></a>

                                         <a href="#"><img src="/images/bt-2.png" alt="" class="btn-2"></a>


                                         <a href="#"><img src="/images/bt-3.png" alt="" class="btn-3"></a>


                                        <a href="#"><img src="/images/bt-4.png" alt="" class="btn-4"></a>
                                    </div>
                                    <div class="map-child-2">
                                        <button>Transco Pipeline</button>
                                     <span class="border-space">
                                        <img src="/images/map.png" alt="">
                                     </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @if ($basic->providers =='ConEd')

                <div class="mySlides fade">
                    <section class="section-15">
                        <div class="main-section-15">
                            <div class="section-15-logo">
                                <img src="/images/logo.png" alt="">

                            </div>
                            <div class="section-15-btn-box">
                                <button>You and your Utility Provider</button>
                            </div>
                            <div class="section-15-box">
                                <div class="section-15-list">
                                    <div class="section-15-card">
                                        <h2>Choosing Your Utility Provider</h2>
                                        <ul>
                                            <li>How can you select a utility provider that is best?</li>
                                            <li>What typically happens to costs during a monopoly?</li>
                                            <li>Renting vs. owning your power.</li>
                                        </ul>
                                    </div>
                                    <div class="section-15-card">
                                        <h2>Protecting your Rate</h2>
                                        <ul>
                                            <li>With your current utility provider there is no protection of your rate. </li>
                                            <li>With your current utility provider YOU the customer will have to pay improvements to the grid, and the transition away from natural gas to renewal sources of electricity.</li>
                                            <li>There is no cap on what they can charge.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="section-15-imger">
                                    <img src="/images/card-15.png" alt="">
                                </div>


                            </div>
                        </div>
                    </section>
                </div>
                @endif



                @if ($basic->providers =='National Grid')

                <div class="mySlides fade">
                    <section class="section-15">
                        <div class="main-section-15">
                            <div class="section-15-logo">
                                <img src="/images/logo.png" alt="">

                            </div>
                            <div class="section-15-btn-box">
                                <button>You and your Utility Provider</button>
                            </div>
                            <div class="section-15-box">
                                <div class="section-15-list">
                                    <div class="section-15-card">
                                        <h2>Choosing Your Utility Provider</h2>
                                        <ul>
                                            <li>How can you select a utility provider that is best?</li>
                                            <li>What typically happens to costs during a monopoly?</li>
                                            <li>Renting vs. owning your power.</li>
                                        </ul>
                                    </div>
                                    <div class="section-15-card">
                                        <h2>Protecting your Rate</h2>
                                        <ul>
                                            <li>With your current utility provider there is no protection of your rate. </li>
                                            <li>With your current utility provider YOU the customer will have to pay improvements to the grid, and the transition away from natural gas to renewal sources of electricity.</li>
                                            <li>There is no cap on what they can charge.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="section-15-imger">
                                    <img src="/images/card-16.png" alt="">
                                </div>


                            </div>
                        </div>
                    </section>
                </div>
                @endif



                @if ($basic->providers =='O&R')

                <div class="mySlides fade">
                    <section class="section-15">
                        <div class="main-section-15">
                            <div class="section-15-logo">
                                <img src="/images/logo.png" alt="">

                            </div>
                            <div class="section-15-btn-box">
                                <button>You and your Utility Provider</button>
                            </div>
                            <div class="section-15-box">
                                <div class="section-15-list">
                                    <div class="section-15-card">
                                        <h2>Choosing Your Utility Provider</h2>
                                        <ul>
                                            <li>How can you select a utility provider that is best?</li>
                                            <li>What typically happens to costs during a monopoly?</li>
                                            <li>Renting vs. owning your power.</li>
                                        </ul>
                                    </div>
                                    <div class="section-15-card">
                                        <h2>Protecting your Rate</h2>
                                        <ul>
                                            <li>With your current utility provider there is no protection of your rate. </li>
                                            <li>With your current utility provider YOU the customer will have to pay improvements to the grid, and the transition away from natural gas to renewal sources of electricity.</li>
                                            <li>There is no cap on what they can charge.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="section-15-imger">
                                    <img src="/images/card-17.png" alt="">
                                </div>


                            </div>
                        </div>
                    </section>
                </div>
                @endif



                @if ($basic->providers =='Central Hudson')

                <div class="mySlides fade">

                                <section class="section-15">


                                    <div class="main-section-15">
                                        <div class="section-15-logo">
                                            <img src="/images/logo.png" alt="">

                                        </div>
                            <div class="section-15-btn-box">
                                <button>You and your Utility Provider</button>
                            </div>
                            <div class="section-15-box">
                                <div class="section-15-list">
                                    <div class="section-15-card">
                                        <h2>Choosing Your Utility Provider</h2>
                                        <ul>
                                            <li>How can you select a utility provider that is best?</li>
                                            <li>What typically happens to costs during a monopoly?</li>
                                            <li>Renting vs. owning your power.</li>
                                        </ul>
                                    </div>
                                    <div class="section-15-card">
                                        <h2>Protecting your Rate</h2>
                                        <ul>
                                            <li>With your current utility provider there is no protection of your rate. </li>
                                            <li>With your current utility provider YOU the customer will have to pay improvements to the grid, and the transition away from natural gas to renewal sources of electricity.</li>
                                            <li>There is no cap on what they can charge.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="section-15-imger">
                                    <img src="/images/card-18.png" alt="">
                                </div>


                            </div>
                        </div>


                    </section>
                </div>
                @endif




                @if ($basic->providers =='NYSEG')

                <div class="mySlides fade">
                    <section class="section-15">
                        <div class="main-section-15">
                            <div class="section-15-logo">
                                <img src="/images/logo.png" alt="">

                            </div>
                            <div class="section-15-btn-box">
                                <button>You and your Utility Provider</button>
                            </div>
                            <div class="section-15-box">
                                <div class="section-15-list">
                                    <div class="section-15-card">
                                        <h2>Choosing Your Utility Provider</h2>
                                        <ul>
                                            <li>How can you select a utility provider that is best?</li>
                                            <li>What typically happens to costs during a monopoly?</li>
                                            <li>Renting vs. owning your power.</li>
                                        </ul>
                                    </div>
                                    <div class="section-15-card">
                                        <h2>Protecting your Rate</h2>
                                        <ul>
                                            <li>With your current utility provider there is no protection of your rate. </li>
                                            <li>With your current utility provider YOU the customer will have to pay improvements to the grid, and the transition away from natural gas to renewal sources of electricity.</li>
                                            <li>There is no cap on what they can charge.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="section-15-imger">
                                    <img src="/images/card-19.png" alt="">
                                </div>


                            </div>
                        </div>
                    </section>
                </div>
                @endif




                @if ($basic->providers =='EVERSOURCE')
                <div class="mySlides fade">
                    <section class="section-15">
                        <div class="main-section-15">
                            <div class="section-15-logo">
                                <img src="/images/logo.png" alt="">

                            </div>
                        <div class="section-15-btn-box">
                            <button>You and your Utility Provider</button>
                        </div>
                            <div class="section-15-box">
                                <div class="section-15-list">
                                    <div class="section-15-card">
                                        <h2>Choosing Your Utility Provider</h2>
                                        <ul>
                                            <li>How can you select a utility provider that is best?</li>
                                            <li>What typically happens to costs during a monopoly?</li>
                                            <li>Renting vs. owning your power.</li>
                                        </ul>
                                    </div>
                                    <div class="section-15-card">
                                        <h2>Protecting your Rate</h2>
                                        <ul>
                                            <li>With your current utility provider there is no protection of your rate. </li>
                                            <li>With your current utility provider YOU the customer will have to pay improvements to the grid, and the transition away from natural gas to renewal sources of electricity.</li>
                                            <li>There is no cap on what they can charge.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="section-15-imger">
                                    <img src="/images/card-20.png" alt="">
                                </div>


                            </div>
                        </div>
                    </section>
                </div>
                @endif




                @if ($basic->providers =='UI')
                <div class="mySlides fade">
                    <section class="section-15">
                        <div class="main-section-15">
                            <div class="section-15-logo">
                                <img src="/images/logo.png" alt="">

                            </div>
                            <div class="section-15-btn-box">
                                <button>You and your Utility Provider</button>
                            </div>
                            <div class="section-15-box">
                                <div class="section-15-list">
                                    <div class="section-15-card">
                                        <h2>Choosing Your Utility Provider</h2>
                                        <ul>
                                            <li>How can you select a utility provider that is best?</li>
                                            <li>What typically happens to costs during a monopoly?</li>
                                            <li>Renting vs. owning your power.</li>
                                        </ul>
                                    </div>
                                    <div class="section-15-card">
                                        <h2>Protecting your Rate</h2>
                                        <ul>
                                            <li>With your current utility provider there is no protection of your rate. </li>
                                            <li>With your current utility provider YOU the customer will have to pay improvements to the grid, and the transition away from natural gas to renewal sources of electricity.</li>
                                            <li>There is no cap on what they can charge.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="section-15-imger">
                                    <img src="/images/card-21.png" alt="">
                                </div>


                            </div>
                        </div>
                    </section>

                </div>
                @endif



                <div class="mySlides fade">
                    <section class="sec-1">
                        <div class="logo-main">
                            <div class="section-14-logo">
                                <a href="#">  <img src="/images/a-logo.png" alt=""></a>
                              </div>

                        <div class="sec-1-cont">
                            <img class="sec-img" src="/images/Group 247 (1).png" alt="">
                        </div>
                    </div>


                    </section>
                </div>


                <div class="mySlides fade">

                        <section class="section-go-2">

                            <div class="section-14-logo">
                                <a href="#">  <img src="/images/a-logo.png" alt=""></a>
                            </div>
                            <div class="box-30">


                            <div class="list-30-1">
                                <h3>Federal Tax Credit</h3>
                                <h5>INCENTIVES - FEDERAL TAX CREDIT</h5>
                                <p>The Federal tax Credit is a dollar-for-dollar credit for installing solar. The tax credit is 30% of your total gross system cost for your solar project!</p>
                                <div class="inner-col">
                                    <div class="inn-col-1">
                                        <img src="/images/calulator.png" alt="">
                                    </div>
                                    <div class="inn-col-2">
                                    <h6>Example</h6>
                                    <p>System Cost: $100,000</p>
                                    <p>$100,000 x 0.30 = $30,000 Tax Credit</p>
                                    </div>

                                </div>
                                <p class="para-1"> Disclaimer: You only qualify for the federal tax credit if you pay federal income taxes and have the tax liability.</p>
                                <div class="col-1-btn">
                                <button>Click to Federal Tax Credit</button>
                            </div>
                        </div>


                            <div class="list-30-2">
                                <img class="layer-img" src="/images/mubeen.png" alt="">
                                <p> Systems installed on or before December 31, 2019, were  also eligible for a 30% tax credit.</p>
                            </div>

                        </div>

                    </section>
                </div>


                @if ($basic->state =='NJ')
                <div class="mySlides fade">
                    <section class="section-go-3">


                        <div class="section-14-logo">
                            <a href="#">  <img src="/images/logo.png" alt=""></a>
                          </div>


                        <div class="state">
                            <button>state incentives</button>
                            <h2>incentives- New Jersey</h2>
                            <h4>SREC-II Program</h4>
                            <p>New Jersey offers, a 15-year fixed renewable energy credit program. This is a production-based incentive. For Every1,000 kWh your solar system generates of clean energy, you will earn (1) SREC-II credit worth $90.</p>
                        </div>
                        <div class="state-2">
                            <div class="state-2-child">
                                <h3>Solar Renewable Energy Credits (SRECs)</h3>
                                <p>TheSREC-II program is designed to reward New Jersey homeowners for switching to solar energy by awarding cash credits toward their solar system costs for 15 years.</p>
                            </div>
                            <div class="state-2-child-2">
                                <h3>Net<br>
                                    Metering</h3>
                                    <p>Net metering enables you to receive full retail credit on your utility bill for each kWh of electricity your system produces over a year. Then, at the end of an annualized period, you will receive credit on remaining excess.</p>
                            </div>
                            <div class="state-2-child-3">
                                <h3>Property & Sales
                                    Tax Exemption</h3>
                                    <p>You will not have to pay additional property taxes on the value the solar panels add to your home. On average, solar panels increase homes value in New Jersey by 6%*</p>
                            </div>
                        </div>
                    </section>
                </div>
                @endif


                @if ($basic->state =='CT')


                <div class="mySlides fade">
                    <section class="section-go-3 part-32">


                        <div class="section-14-logo">
                            <a href="#">  <img src="/images/logo.png" alt=""></a>
                          </div>


                        <div class="state">
                            <button>state incentives</button>
                            <h2>incentives- Connecticut</h2>
                            <h4>Connecticut Green Bank Residential Solar Investment Program (RSIP)</h4>
                            <p>Receive an immediate discount of $0.426 per installed watt, depending on the system size. The maximum eligible system size is 10 kilowatts (kW), equating to a rebate of up to $4,260..</p>
                        </div>
                        <div class="state-2">
                            <div class="state-2-child">
                                <h3>Renewable Energy Credits (RECs)</h3>
                                <p>The REC program is designed to reward Connecticut homeowners for switching to solar energy by awarding them cash credits toward their solar system cost for 20 years.</p>
                            </div>
                            <div class="state-2-child-2">
                                <h3>Net<br>
                                    Metering</h3>
                                    <p>Net metering enables you to receive full retail credit on your utility bill for each kWh of electricity your system produces over a year. Then, at the end of an annualized period, you will receive credit on remaining excess.</p>
                            </div>
                            <div class="state-2-child-3">
                                <h3>Property & Sales
                                    Tax Exemption</h3>
                                    <p>You will not have to pay additional property taxes on the value the solar panels add to your home. On average, solar panels increase homes value in New Jersey by 6%*</p>
                            </div>
                        </div>
                    </section>
                </div>
                @endif

                @if ($basic->state =='NY')

                <div class="mySlides fade">
                    <section class="section-go-3 part-33">


                        <div class="section-14-logo">
                            <a href="#">  <img src="/images/logo.png" alt=""></a>
                          </div>


                        <div class="state">
                            <button>state incentives</button>
                            <h2>incentives - New York</h2>
                            <h4>Solar Energy System Equipment Credit</h4>
                            <p>New York State offers a tax credit of up to $5,000 when you switch to solar. This tax credit can be claimed over a span of five years. </p>
                        </div>
                        <div class="state-2">
                            <div class="state-2-child">
                                <h3>New York State Energy Research & Development Authority(NYSERDA)</h3>
                                <p>NYSERDA works directly  with your chosen solar contractor to reduce installation costs for New York residents. Incentives may differ depending on your location. These incentives are automatically deducted from your solar installation costs, offering you immediate savings.</p>
                            </div>
                            <div class="state-2-child-2">
                                <h3>Net<br>
                                    Metering</h3>
                                    <p>Net metering enables you to receive full retail credit on your utility bill for each kWh of electricity your system produces over a year. Then, at the end of an annualized period, you will receive credit on remaining excess.</p>
                            </div>
                            <div class="state-2-child-3">
                                <h3>Property & Sales
                                    Tax Exemption</h3>
                                    <p>You will not have to pay additional property taxes on the value the solar panels add to your home. On average, solar panels increase homes value in New Jersey by 6%*</p>
                            </div>
                        </div>
                    </section>
                </div>
                @endif


                <div class="mySlides fade">
                    <section class="section-23">
                        <div class="main-section-23">


                            <div class="logo-section-23">
                                <img src="/images/logo.png" alt="">
                            </div>

                            <div class="section-23-box">

                                <div class="card-23">
                                    <h2>too good to be true, right?</h2>
                                    <p>So, you must be asking why doesn’t everyone have solar? The biggest reason is because not everyone can qualify</p>

                                    <h3>1 out of every 4 homes can qualify for today’s solar program.</h3>
                                </div>

                                <h2>3 Easy Steps To Qualify:</h2>



                                <div class="box-btn-23">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="45" height="36" viewBox="0 0 45 36" fill="none">
                                        <g clip-path="url(#clip0_1136_305)">
                                          <path d="M44.8233 9.49861L34.4247 0.139417C34.2206 -0.0448602 33.9053 -0.0463584 33.6997 0.137919L23.2478 9.49711C23.0833 9.64393 23.0285 9.87615 23.1092 10.0784C23.1884 10.2822 23.3879 10.4155 23.6102 10.4155H25.4743V14.555L19.014 14.5925V10.7301C19.014 10.438 18.7718 10.1998 18.4749 10.1998H15.6787C15.3818 10.1998 15.1396 10.438 15.1396 10.7301V14.6134L10.3347 14.6419C10.3088 14.6419 10.286 14.6524 10.2601 14.6569C10.219 14.6629 10.1763 14.6659 10.1367 14.6823C10.0971 14.6973 10.0636 14.7228 10.0316 14.7468C10.0103 14.7617 9.98595 14.7677 9.96768 14.7872L0.169047 23.9936C0.169047 23.9936 0.167524 23.9981 0.164478 23.9981C0.126405 24.0325 0.10356 24.0775 0.0761473 24.1209C0.0670096 24.1359 0.0517802 24.1494 0.0456884 24.1659C0.0395966 24.1839 0.0395966 24.2033 0.0319819 24.2228C0.0167524 24.2708 0.00152295 24.3202 0.00152295 24.3696C0.00152295 24.3711 0 24.3741 0 24.3756C0 24.4011 0.0106606 24.4236 0.0152295 24.4475C0.0213212 24.491 0.0243671 24.5314 0.0411195 24.5734C0.0578719 24.6153 0.085285 24.6468 0.111175 24.6843C0.124882 24.7037 0.132496 24.7247 0.149249 24.7442C0.150772 24.7457 0.153818 24.7457 0.153818 24.7487C0.204075 24.7981 0.261947 24.8401 0.328956 24.867C0.377691 24.8865 0.429471 24.8925 0.482774 24.897C0.502572 24.8985 0.517802 24.9075 0.5376 24.9075L3.68553 24.912V34.9394H2.52048C2.2235 34.9394 1.98135 35.1776 1.98135 35.4697C1.98135 35.7619 2.2235 36.0001 2.52048 36.0001H43.8502C44.1472 36.0001 44.3893 35.7619 44.3893 35.4697C44.3893 35.1776 44.1472 34.9394 43.8502 34.9394H42.7064V10.4215H44.4609C44.6832 10.4215 44.8812 10.2882 44.9619 10.0844C45.0426 9.88065 44.9878 9.64993 44.8233 9.5031V9.49861ZM34.2952 23.8513L26.5449 16.9791C26.3409 16.7978 26.0302 16.7978 25.8246 16.9791L18.0743 23.8513H17.1529L26.0271 15.6487L34.979 23.8513H34.2952ZM4.22465 23.8513H1.87932L10.554 15.6981L24.489 15.6187L15.5813 23.8498H4.22465V23.8528V23.8513ZM16.2163 11.259H17.9373V14.5984L16.2163 14.6089V11.259ZM4.76377 24.909H17.7423V34.9364H4.76377V24.909ZM28.0679 34.9364H24.3808V28.8297H28.0679V34.9364ZM28.9634 34.9364V28.3878C28.9634 28.1436 28.7639 27.9473 28.5156 27.9473H23.9316C23.6833 27.9473 23.4838 28.1436 23.4838 28.3878V34.9364H18.819V24.6138L26.1855 18.0802L33.552 24.6138V34.9364H28.9619H28.9634ZM34.6287 34.9364V24.909H36.3481C36.5705 24.909 36.7685 24.7771 36.8492 24.5734C36.9299 24.3726 36.8781 24.1404 36.7152 23.9921L26.551 14.6808V10.2297L34.1521 3.58675L41.6328 10.1249V34.9379H34.6287V34.9364ZM42.3775 9.35778L34.51 2.48109C34.3059 2.3043 33.9998 2.3043 33.7957 2.48109L25.9282 9.35778H25.0007L34.0637 1.24358L43.0796 9.35778H42.3775ZM37.0853 10.7706H31.5189C31.3209 10.7706 31.161 10.9279 31.161 11.1226V16.3319C31.161 16.5266 31.3209 16.6839 31.5189 16.6839H37.0853C37.2832 16.6839 37.4431 16.5266 37.4431 16.3319V11.1226C37.4431 10.9279 37.2832 10.7706 37.0853 10.7706ZM36.7258 13.3729H34.6592V11.4747H36.7258V13.3729ZM33.9434 11.4747V13.3729H31.8768V11.4747H33.9434ZM31.8768 14.0786H33.9434V15.9768H31.8768V14.0786ZM34.6592 15.9768V14.0786H36.7258V15.9768H34.6592ZM26.3957 21.8047C25.4301 21.8047 24.6458 22.5763 24.6458 23.5262C24.6458 24.476 25.4301 25.2476 26.3957 25.2476C27.3612 25.2476 28.1456 24.476 28.1456 23.5262C28.1456 22.5763 27.3612 21.8047 26.3957 21.8047ZM26.3957 24.5434C25.8261 24.5434 25.3631 24.0865 25.3631 23.5277C25.3631 22.9688 25.8276 22.5119 26.3957 22.5119C26.9638 22.5119 27.4283 22.9688 27.4283 23.5277C27.4283 24.0865 26.9638 24.5434 26.3957 24.5434ZM14.0705 26.9211H8.50413C8.30615 26.9211 8.14624 27.0784 8.14624 27.2731V30.8328C8.14624 31.0276 8.30615 31.1849 8.50413 31.1849H14.0705C14.2685 31.1849 14.4284 31.0276 14.4284 30.8328V27.2731C14.4284 27.0784 14.2685 26.9211 14.0705 26.9211ZM13.7126 28.7009H11.646V27.6267H13.7126V28.7009ZM10.9287 27.6267V28.7009H8.86202V27.6267H10.9287ZM8.86354 29.4066H10.9302V30.4808H8.86354V29.4066ZM11.646 30.4808V29.4066H13.7126V30.4808H11.646Z" fill="#1226AA"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_1136_305">
                                            <rect width="45" height="36" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg></span>
                                    <button>Own your own home</button>
                                </div>





                                <div class="box-btn-23">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="45" height="42" viewBox="0 0 45 42" fill="none">
                                        <g clip-path="url(#clip0_1136_349)">
                                          <path d="M36.9503 8.75232H35.0557V10.6215H36.9503V8.75232Z" fill="#1226AA"/>
                                          <path d="M34.5646 8.75232H32.6699V10.6215H34.5646V8.75232Z" fill="#1226AA"/>
                                          <path d="M34.5646 11.1957H32.6699V13.0649H34.5646V11.1957Z" fill="#1226AA"/>
                                          <path d="M36.9503 11.1957H35.0557V13.0649H36.9503V11.1957Z" fill="#1226AA"/>
                                          <path d="M23.9933 23.2393H22.0986V25.1085H23.9933V23.2393Z" fill="#1226AA"/>
                                          <path d="M21.6095 23.2393H19.7148V25.1085H21.6095V23.2393Z" fill="#1226AA"/>
                                          <path d="M21.6075 25.6827H19.7129V27.5519H21.6075V25.6827Z" fill="#1226AA"/>
                                          <path d="M23.9933 25.6827H22.0986V27.5519H23.9933V25.6827Z" fill="#1226AA"/>
                                          <path d="M12.3331 34.2615H10.4385V36.1307H12.3331V34.2615Z" fill="#1226AA"/>
                                          <path d="M9.94737 34.2615H8.05273V36.1307H9.94737V34.2615Z" fill="#1226AA"/>
                                          <path d="M9.94737 36.705H8.05273V38.5741H9.94737V36.705Z" fill="#1226AA"/>
                                          <path d="M12.3331 36.705H10.4385V38.5741H12.3331V36.705Z" fill="#1226AA"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M44.7786 7.66967L42.7673 7.67266V41.3136C42.7673 41.6531 42.4899 41.9267 42.1458 41.9267H31.9299C31.9617 41.8056 31.983 41.68 31.983 41.5499V24.1933H33.044C33.4502 24.1918 33.8124 23.9361 33.9428 23.5563C34.0746 23.1765 33.9473 22.7563 33.6245 22.5111L26.8477 17.3297V7.67116L24.8379 7.66817L34.8749 0.0942078L44.7786 7.66967Z" stroke="#1226AA" stroke-miterlimit="10"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M31.8235 23.0165L29.8122 23.0195V41.3136C29.8122 41.6516 29.5348 41.9252 29.1923 41.9252H19.8418C19.9479 41.7159 20.0131 41.4841 20.0131 41.2359V35.6492H21.0741C21.4803 35.6477 21.8426 35.392 21.9729 35.0122C22.1033 34.6324 21.9775 34.2122 21.6546 33.9655L13.8942 28.0289V23.018L11.8828 23.015L21.9183 15.441L31.822 23.015L31.8235 23.0165Z" stroke="#1226AA" stroke-miterlimit="10"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1505 34.6384C18.1505 34.6459 18.152 34.6504 18.152 34.6578V41.1641C18.152 41.5021 17.8746 41.7757 17.5306 41.7757H2.85545C2.5129 41.7757 2.23401 41.5021 2.23401 41.1641V34.6578C2.23401 34.6578 2.23552 34.6459 2.23552 34.6384L0.222656 34.6354L10.2582 27.0599L20.1619 34.6354L18.149 34.6384H18.1505Z" stroke="#1226AA" stroke-miterlimit="10"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_1136_349">
                                            <rect width="45" height="42" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg></span>
                                    <button>Right home for solar</button>
                                </div>



                                <div class="box-btn-23">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="47" height="26" viewBox="0 0 47 26" fill="none">
                                        <g clip-path="url(#clip0_1136_344)">
                                          <path d="M20.7113 19.6485C19.0945 20.632 18.5904 22.7346 19.5861 24.3478C20.588 25.9735 22.7011 26.4832 24.318 25.4981L25.3807 24.4959L37.8159 12.6252L21.6586 19.2572L20.7113 19.6485Z" fill="#1226AA"/>
                                          <path d="M41.3271 8.19543C40.3501 8.25154 39.5371 8.89059 39.2218 9.7728C35.3967 5.39296 29.7659 2.62322 23.5 2.62322C11.9903 2.62322 2.62654 11.9736 2.62654 23.4703C2.62654 24.1935 2.03975 24.7796 1.31093 24.7796C0.582116 24.7796 0 24.1935 0 23.4703C0 10.5287 10.5421 0 23.5 0C30.6258 0 37.0166 3.18278 41.3271 8.19543Z" fill="#1226AA"/>
                                          <path d="M47.0001 23.4703C47.0001 24.1935 46.4133 24.7796 45.6845 24.7796C44.9557 24.7796 44.3735 24.1935 44.3735 23.4703C44.3735 19.6407 43.3342 16.0542 41.5254 12.9696C42.5117 12.9556 43.3498 12.3446 43.6962 11.4811C45.7922 14.9927 47.0001 19.0905 47.0001 23.4703Z" fill="#1226AA"/>
                                          <path d="M41.477 12.1529C42.3467 12.1529 43.0517 11.4488 43.0517 10.5802C43.0517 9.71162 42.3467 9.00751 41.477 9.00751C40.6074 9.00751 39.9023 9.71162 39.9023 10.5802C39.9023 11.4488 40.6074 12.1529 41.477 12.1529Z" fill="#1226AA"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_1136_344">
                                            <rect width="47" height="26" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg></span>
                                    <button>640 - Credit Score</button>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>


                <div class="mySlides fade">
                    <section class="section-24">
                        <div class="main-section-24">

                            <div class="logo-section-24">
                                <img src="/images/logo.png" alt="">
                            </div>

                            <div class="section-23-para">
                                <h3>
                                    The average home generates anywhere <br>
                              20-70% of their annual power needs from solar.
                                       </h3>
                            </div>


                        </div>


                        <div class="main-section-24-2">

                            <div class="or">
                                <div class="or-part-1">

                                    <h2>Gas Station Example</h2>

                                    <p>If you went to the gas station to fill your tank with 20 gallons of gasoline and the attendant said that the first 10 gallons were on sale, would you say...</p>

                                        <h3>“YES, OF COURSE I WOULD LIKE HALF OF MY GAS AT A DISCOUNT’</h3>
                                </div>

                                <div class="or-part">
                                    <div class="or-span">
                                        <h2>OR</h2>
                                    </div>
                                </div>


                                <div class="or-part-2">
                                    <p>“If I can't secure a discount on all 20 gallons, I'd rather pay full price for the entire quantity. I'm disappointed that the discount isn't as substantial as I had hoped. For me, it's either a significant discount or I'm willing to pay the full amount."</p>
                                </div>

                            </div>

                            <div class="or-imger">
                                <img src="/images/Layer.png" alt="">
                            </div>

                        </div>

                    </section>
                </div>



                <div class="mySlides fade">
                    <section class="section-22">
                        <div class="main-section-22">


                            <div class="logo-section-22">
                                <img src="/images/a-logo.png" alt="">
                            </div>

                            <div class="section-22-box">
                                <div class="section-22-list-1">
                                    <h2>Production & consumption</h2>
                                    <p>When you produce more electricity than you use it will be credited into your virtual energy bank with your utility company.</p>
                                </div>

                                <div class="section-22-list-2">

                                    <div class="section-22-dashbord">
                                        <img src="/images/dashbord.png" alt="">
                                    </div>

                                    <div class="section-22-cards">
                                        <div class="section-22-card">
                                            <span>
                                                <h2>{{$history->yearly_consumption}} <span>kWh</span></h2>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="47" viewBox="0 0 43 47" fill="none">
                                                    <g clip-path="url(#clip0_1250_95)">
                                                      <path d="M0.392578 45.4239C0.655659 44.8369 1.11643 44.6636 1.74296 44.6697C4.05442 44.694 6.36588 44.6697 8.67886 44.6894C9.10313 44.6925 9.26889 44.5723 9.36925 44.1481C11.2716 36.1157 13.1908 28.0864 15.1068 20.0572C15.2148 19.6025 15.3182 19.1463 15.4353 18.6946C15.484 18.5106 15.4627 18.3981 15.2817 18.2795C12.4426 16.406 9.61105 14.5233 6.77799 12.6407C6.26247 12.2986 6.07847 11.8332 6.23662 11.3086C6.38565 10.8174 6.75213 10.5817 7.38627 10.5817C10.5417 10.5817 13.6987 10.5817 16.8541 10.5817C17.0092 10.5817 17.1643 10.5817 17.3605 10.5817C17.546 9.81831 17.7316 9.06709 17.911 8.31586C18.4052 6.24619 18.9132 4.17805 19.3846 2.10229C19.599 1.15794 20.0126 0.408237 20.9691 0.0599976H21.6702C22.6084 0.403675 23.0266 1.13513 23.2426 2.0658C23.8691 4.77112 24.526 7.46883 25.1723 10.1711C25.2028 10.2958 25.2377 10.4205 25.2803 10.5817C25.44 10.5817 25.5936 10.5817 25.7472 10.5817C28.7734 10.5817 31.798 10.5817 34.8242 10.5817C35.5085 10.5817 35.8613 10.7916 36.021 11.2934C36.1868 11.8135 35.9967 12.294 35.4629 12.659C32.8138 14.4671 30.1663 16.2752 27.5097 18.0696C27.2238 18.2627 27.128 18.4239 27.2146 18.7859C29.2524 27.2653 31.2764 35.7477 33.2929 44.2317C33.3719 44.5662 33.4921 44.6894 33.851 44.6879C36.1883 44.6697 38.5256 44.694 40.8629 44.6681C41.4985 44.662 41.976 44.8263 42.2482 45.4254V46.0489C42.0855 46.4063 41.8513 46.6907 41.4681 46.829H1.09362C0.860953 46.5675 0.626766 46.3074 0.392578 46.0474C0.392578 45.8391 0.392578 45.6323 0.392578 45.4239ZM31.1745 44.6484C31.1624 44.5541 31.1578 44.4902 31.1441 44.4279C30.5313 41.8518 29.9108 39.2757 29.3102 36.6966C29.2402 36.4001 29.0866 36.3803 28.8433 36.3803C23.8296 36.3849 18.8143 36.3864 13.8006 36.3773C13.501 36.3773 13.3839 36.4609 13.3124 36.7651C12.7346 39.2438 12.1354 41.7165 11.5439 44.1906C11.5089 44.3351 11.4876 44.4826 11.4557 44.6484H31.1745ZM25.7761 34.2133L25.7958 34.1343C22.3575 32.0752 18.9192 30.0177 15.4292 27.9283C14.9244 30.0481 14.4301 32.1209 13.9298 34.2133H25.7745H25.7761ZM24.3116 25.3948L24.3557 25.3203C22.0458 23.4787 19.7358 21.6372 17.3803 19.7591C16.9226 21.6797 16.4831 23.5228 16.036 25.3948H24.3116ZM19.1747 27.5785C19.1686 27.6044 19.1625 27.6318 19.1565 27.6576C22.2359 29.5007 25.3153 31.3438 28.4464 33.2188C28.4236 33.0743 28.416 32.9983 28.3993 32.9253C27.9978 31.2343 27.5903 29.5433 27.1994 27.8492C27.1356 27.5725 26.9805 27.5572 26.7539 27.5572C24.3527 27.5633 21.9515 27.5603 19.5488 27.5603C19.4241 27.5603 19.2994 27.5709 19.1747 27.577V27.5785ZM18.0935 16.7801H24.4941C24.5063 16.7299 24.5215 16.7025 24.5154 16.6812C24.2204 15.4312 23.9284 14.1812 23.6151 12.9357C23.5923 12.843 23.3977 12.7335 23.2821 12.732C21.9713 12.7168 20.6604 12.7274 19.3496 12.7168C19.1215 12.7152 19.0302 12.7974 18.9846 13.0118C18.8827 13.4938 18.758 13.9713 18.644 14.4504C18.4615 15.2168 18.2821 15.9832 18.0935 16.7785V16.7801ZM19.9563 18.944C19.9427 18.9805 19.9275 19.017 19.9138 19.0535C22.0108 20.7248 24.1079 22.396 26.2049 24.0688C25.8871 22.3945 25.5069 20.778 25.1024 19.1691C25.0781 19.0702 24.8652 18.9562 24.7389 18.9547C23.4266 18.9395 22.1157 18.9455 20.8034 18.9455C20.5205 18.9455 20.2377 18.9455 19.9563 18.9455V18.944ZM23.0631 10.5635C22.4868 8.15163 21.9211 5.78238 21.3569 3.41466C21.3326 3.41466 21.3082 3.41161 21.2824 3.41161C20.7152 5.78694 20.1495 8.16075 19.5747 10.5635H23.0631ZM16.8496 12.7517H10.9782C10.969 12.7745 10.9614 12.7974 10.9523 12.8217C12.6312 13.9105 14.31 15.0008 16.0421 16.1246C16.3219 14.9583 16.5804 13.8786 16.8496 12.7517ZM26.5927 16.1155C28.2381 14.9932 29.8378 13.9029 31.5304 12.7487H25.7882C26.0574 13.8755 26.3174 14.9674 26.5927 16.1155Z" fill="#FF3939"/>
                                                    </g>
                                                    <defs>
                                                      <clipPath id="clip0_1250_95">
                                                        <rect width="41.8557" height="46.766" fill="white" transform="translate(0.392578 0.0599976)"/>
                                                      </clipPath>
                                                    </defs>
                                                  </svg>
                                        </span>

                                        <p>Estimated Yearly Consumption</p>
                                        </div>


                                        <div class="section-22-card">
                                            <span>
                                                <h2 style="color: #FFC442;">{{$history->yearly_production}}  <span>kWh</span></h2>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                                    <g clip-path="url(#clip0_1275_402)">
                                                      <path d="M25.0005 38.3619C32.3664 38.3619 38.3617 32.3667 38.3617 24.9962C38.3617 17.6256 32.3664 11.635 25.0005 11.635C17.6346 11.635 11.6348 17.6302 11.6348 24.9962C11.6348 32.3667 17.63 38.3619 25.0005 38.3619ZM25.0005 17.2241C29.2881 17.2241 32.7726 20.7086 32.7726 24.9962C32.7726 29.2837 29.2881 32.7682 25.0005 32.7682C20.713 32.7682 17.2284 29.2791 17.2284 24.9962C17.2284 20.7086 20.7176 17.2241 25.0005 17.2241Z" fill="#FFC442"/>
                                                      <path d="M25 9.31818C26.5461 9.31818 27.7968 8.06745 27.7968 6.52134V2.79684C27.7968 1.25073 26.5461 0 25 0C23.4539 0 22.2031 1.25073 22.2031 2.79684V6.52134C22.2031 8.06745 23.4539 9.31818 25 9.31818Z" fill="#FFC442"/>
                                                      <path d="M22.2031 43.4756V47.2001C22.2031 48.7462 23.4539 49.997 25 49.997C26.5461 49.997 27.7968 48.7462 27.7968 47.2001V43.4756C27.7968 41.9295 26.5461 40.6788 25 40.6788C23.4539 40.6788 22.2031 41.9295 22.2031 43.4756Z" fill="#FFC442"/>
                                                      <path d="M9.95957 13.9103C10.5042 14.4549 11.2195 14.7272 11.9349 14.7272C12.6503 14.7272 13.3656 14.4549 13.9102 13.9103C15.004 12.8211 15.004 11.0489 13.9102 9.95969L11.2749 7.32439C10.1811 6.23058 8.41346 6.23058 7.32427 7.32439C6.23045 8.41359 6.23045 10.1858 7.32427 11.275L9.95496 13.9103H9.95957Z" fill="#FFC442"/>
                                                      <path d="M40.0425 36.0866C38.9487 34.9928 37.181 34.9928 36.0918 36.0866C34.998 37.1758 34.998 38.948 36.0918 40.0372L38.7272 42.6725C39.2718 43.2171 39.9871 43.4894 40.7025 43.4894C41.4178 43.4894 42.1332 43.2171 42.6778 42.6725C43.7716 41.5834 43.7716 39.8111 42.6778 38.7219L40.0425 36.0866Z" fill="#FFC442"/>
                                                      <path d="M38.0672 14.7272C38.7825 14.7272 39.4979 14.4549 40.0425 13.9103L42.6778 11.275C43.7716 10.1858 43.7716 8.41359 42.6778 7.32439C41.584 6.23058 39.8164 6.23058 38.7272 7.32439L36.0918 9.95969C34.998 11.0489 34.998 12.8211 36.0918 13.9103C36.6364 14.4549 37.3518 14.7272 38.0672 14.7272Z" fill="#FFC442"/>
                                                      <path d="M9.95416 36.0912L7.31885 38.7265C6.22965 39.8203 6.22965 41.588 7.31885 42.6772C7.86345 43.2218 8.57881 43.4941 9.29418 43.4941C10.0095 43.4941 10.7249 43.2218 11.2695 42.6726L13.9048 40.0373C14.994 38.9434 14.994 37.1758 13.9048 36.0866C12.8156 34.9974 11.0434 34.9928 9.95416 36.0866V36.0912Z" fill="#FFC442"/>
                                                      <path d="M40.6836 25.0008C40.6836 26.5469 41.9343 27.7976 43.4804 27.7976H47.2049C48.751 27.7976 50.0018 26.5469 50.0018 25.0008C50.0018 23.4547 48.751 22.2039 47.2049 22.2039H43.4804C41.9343 22.2039 40.6836 23.4547 40.6836 25.0008Z" fill="#FFC442"/>
                                                      <path d="M2.79684 27.793H6.52134C8.06745 27.793 9.31818 26.5423 9.31818 24.9962C9.31818 23.4501 8.06745 22.1993 6.52134 22.1993H2.79684C1.25073 22.1993 0 23.4501 0 24.9962C0 26.5423 1.25073 27.793 2.79684 27.793Z" fill="#FFC442"/>
                                                    </g>
                                                    <defs>
                                                      <clipPath id="clip0_1275_402">
                                                        <rect width="50.0016" height="49.997" fill="white"/>
                                                      </clipPath>
                                                    </defs>
                                                  </svg>
                                        </span>

                                        <p>Estimated Yearly Production</p>
                                        </div>



                                        <div class="section-22-card">
                                            <span>
                                                <h2 style="color:  #0CBF65;">{{$history->offset}}</h2>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                                    <g clip-path="url(#clip0_1250_98)">
                                                      <path d="M16.0356 32.0712C24.8918 32.0712 32.0712 24.8918 32.0712 16.0356C32.0712 7.17939 24.8918 0 16.0356 0C7.17939 0 0 7.17939 0 16.0356C0 24.8918 7.17939 32.0712 16.0356 32.0712Z" fill="#0CBF65"/>
                                                      <path d="M25.5083 41.5439C34.3645 41.5439 41.5439 34.3645 41.5439 25.5083C41.5439 16.6521 34.3645 9.47269 25.5083 9.47269C16.652 9.47269 9.47266 16.6521 9.47266 25.5083C9.47266 34.3645 16.652 41.5439 25.5083 41.5439Z" fill="#0CBF65" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
                                                      <path d="M25.508 33.5261C29.9362 33.5261 33.5259 29.9364 33.5259 25.5083C33.5259 21.0802 29.9362 17.4905 25.508 17.4905C21.0799 17.4905 17.4902 21.0802 17.4902 25.5083C17.4902 29.9364 21.0799 33.5261 25.508 33.5261Z" fill="#098F4C"/>
                                                    </g>
                                                    <defs>
                                                      <clipPath id="clip0_1250_98">
                                                        <rect width="42" height="42" fill="white"/>
                                                      </clipPath>
                                                    </defs>
                                                  </svg>

                                        </span>

                                        <p>Offset</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </section>
                </div>


                <div class="mySlides fade">
                    <div class="section-go-7">
                        <div class="section-14-logo">
                            <a href="#">  <img src="/images/logo.png" alt=""></a>
                          </div>
                        <div class="competitors">
                            <img src="/images/Group 219.png" alt="">
                        </div>
                </div>
                </div>


                <div class="mySlides fade">
                    <section class="section-4">
                        <div class="main-section-4">
                            <div class="section-4-logo">
                            <a href="#">    <img src="/images/logo.png" alt=""></a>
                            </div>

                            <div class="section-4-box">
                                <div class="section-4-btn">
                                    <a href="#"><img src="/images/process.png" alt=""></a>
                                </div>

                                <div class="section-4-boxing">


                                   <div class="section-4-card">
                                    <img src="/images/s4-1.png" alt="">
                                    <h2>Soft Credit Check & Sign Service Agreement</h2>
                                        <span>1</span>
                                   </div>


                                   <div class="section-4-card">
                                    <img src="/images/s4-1.png" alt="">
                                    <h2>Site Survey</h2>
                                        <span>2</span>
                                   </div>



                                   <div class="section-4-card">
                                    <img src="/images/s4-1.png" alt="">
                                    <h2>Permits & <br>
                                        Utility Approvals</h2>
                                        <span>3</span>
                                   </div>


                                   <div class="section-4-card">
                                    <img src="/images/s4-1.png" alt="">
                                    <h2>Installation</h2>
                                        <span>4</span>
                                   </div>



                                   <div class="section-4-card">
                                    <img src="/images/s4-1.png" alt="">
                                    <h2>Inspection &  <br>
                                        Activation</h2>
                                        <span>5</span>
                                   </div>


                                </div>

                            </div>
                        </div>
                    </section>
                </div>


                <div class="mySlides fade">
                    <section class="section-35">
                        <div class="mian-section-35">
                            <div class="section-14-logo">
                                <a href="#">  <img src="/images/logo.png" alt=""></a>
                              </div>


                              <div class="section-35-box">
                                <div class="section-35-list-1">
                                    <button class="befor-and after">Before Solar </button>

                                    <button class="befor-and after">After Solar </button>

                                </div>


                                <div class="section-35-list-2">
                                    <img src="/images/before and after 1.png" alt="">
                                </div>

                              </div>
                        </div>
                    </section>
                </div>


                <div class="mySlides fade">
                    <section class="section-36">
                        <div class="main-section-36">
                            <div class="section-36-list-1">


                                <div class="hold-div">
                                    <span class="holding-1">

                                        <h2>Site</h2>
                                    </span>

                                    <span class="holding-2">
                                        <h2>System</h2>
                                    </span>
                                </div>


                                <div class="hold-div">
                                    <span class="hold-1">

                                        <h2>Fire pathways</h2>
                                    </span>

                                    <span class="hold-2">
                                        <h3>></h3>
                                    </span>
                                </div>



                                <div class="hold-div">
                                    <span class="hold-1">

                                        <h2>AutoDesigner</h2>
                                    </span>

                                    <span class="hold-2">
                                        <h3>></h3>
                                    </span>
                                </div>







                                <div class="hold-div">
                                    <span class="hold-1">

                                        <h2>Insert Panels</h2>
                                    </span>

                                    <span class="hold-2">
                                        <h3>></h3>
                                    </span>
                                </div>





                                <div class="hold-div">
                                    <span class="hold-1">

                                        <h2>Add Components</h2>
                                    </span>

                                    <span class="hold-2">
                                        <h3>></h3>
                                    </span>
                                </div>





                                <div class="hold-div">
                                    <span class="hold-1">

                                        <h2>String/Connect</h2>
                                    </span>

                                    <span class="hold-2">
                                        <h3>></h3>
                                    </span>
                                </div>





                            </div>


                            <div class="section-36-btn">
                                <button>
                                    Let’s take a look at your HOme
                                </button>
                            </div>

                            <div class="section-36-list-2">
                                <div class="listing-36-box">
                                    <h2>ANNUAL:<span> (Panels) average</span></h2>

                                    <span>
                                        <p>Irradiance</p>
                                        <p>1,350 kWh/m2/yr</p>
                                    </span>



                                    <span>
                                        <p>Solar Access</p>
                                        <p>91%</p>
                                    </span>




                                    <span>
                                        <p>TOF</p>
                                        <p>82%</p>
                                    </span>




                                    <span>
                                        <p>TSAF</p>
                                        <p>75%</p>
                                    </span>


                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="mySlides fade">
                    <section class="section-28">
                        <div class="main-section-28">
                            <div class="list-28-1">

                        <div class="logo-section-25">
                            <img src="/images/a-logo.png" alt="">
                        </div>

                        <div class="section-28-boxing">
                            <div class="card-28">
                                <h2>Long-Term Cost Analysis</h2>
                                <p>Do nothing and watch your bill rise</p>
                            </div>

                            <div class="box-btn-28">
                                <div class="btn-28">
                                    <span>
                                        <img src="/images/btn-28.png" alt="">
                                    </span>
                                    <button><p>Bill amount this year</p> <h2>${{ $basic->average * 12 }}</h2></button>
                                </div>


                                <div class="btn-28">
                                    <span>
                                        <img src="/images/btn-28.png" alt="">
                                    </span>
                                    <button><p>In 10 years your annual bill will be</p> <h2>$3291/year</h2></button>
                                </div>



                                <div class="btn-28">
                                    <span>
                                        <img src="/images/btn-28.png" alt="">
                                    </span>
                                    <button><p>In 20 years your annual bill will be</p> <h2>$5361/year</h2></button>
                                </div>


                            </div>
                        </div>
                            </div>

                            <div class="list-28-2">

                                <div class="board">
                                    <img src="/images/year.png" alt="">
                                </div>

                                <div class="dash">
                                    <img src="/images/bord-28.png" alt="">
                                </div>

                                <div class="dash-bol">
                                    <div class="dash-list black">
                                        <h2>Total Cost of staying with your Utility</h2>
                                        <div class="dash-box">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="60" viewBox="0 0 64 60" fill="none">
                                                <g clip-path="url(#clip0_1282_11)">
                                                  <path d="M64 58.9081C64 59.4384 63.5387 59.8707 62.9682 59.8707H0V57.9476H14.4513V47.3649C14.4513 46.8345 14.9125 46.4022 15.483 46.4022H21.6758C22.2462 46.4022 22.7075 46.8323 22.7075 47.3649V57.9476H24.771V37.7448C24.771 37.2145 25.2323 36.7822 25.8028 36.7822H31.9955C32.566 36.7822 33.0273 37.2122 33.0273 37.7448V57.9476H35.0908V28.1248C35.0908 27.5944 35.5521 27.1621 36.1226 27.1621H42.3153C42.8858 27.1621 43.3471 27.5922 43.3471 28.1248V57.9476H45.4106V18.5047C45.4106 17.9744 45.8719 17.5421 46.4423 17.5421H52.6351C53.2056 17.5421 53.6669 17.9721 53.6669 18.5047V57.9454H61.9254" fill="#1226AA"/>
                                                  <path d="M20.6468 48.3253H16.5176V57.9454H20.6468V48.3253Z" fill="#0CBF65"/>
                                                  <path d="M30.9691 38.7053H26.8398V57.9454H30.9691V38.7053Z" fill="#0CBF65"/>
                                                  <path d="M41.2894 29.0853H37.1602V57.9454H41.2894V29.0853Z" fill="#0CBF65"/>
                                                  <path d="M51.6117 19.4652H47.4824V57.9454H51.6117V19.4652Z" fill="#0CBF65"/>
                                                  <path d="M43.9979 3.15098L46.2976 6.40669L47.5789 5.50196L43.9288 0.332041C43.7884 0.131484 43.5611 0.00892094 43.3182 7.29383e-06C43.0731 -0.00890636 42.8391 0.095829 42.6831 0.285244L38.4447 5.42396L39.6547 6.42229L42.4246 3.06185C40.6152 18.5226 30.2441 31.9599 15.6436 37.5666L13.5645 38.3666L14.1282 39.8329L16.2074 39.0329C31.3806 33.2056 42.1483 19.2267 43.9956 3.14875L43.9979 3.15098Z" fill="#1226AA"/>
                                                  <path d="M2.16312 1.21893V5.0674H8.35588V6.99052H2.16312V10.839H8.35588V12.7621H2.16312V16.6106H8.35588V18.5337H2.16312V22.3822H8.35588V24.3053H2.16312V28.1537H8.35588V30.0769H2.16312V33.9253H8.35588V35.8485H2.16312V39.6969H8.35588V41.62H2.16312V45.4685H8.35588V47.3916H2.16312V58.9348H0.0996094V0.256256" fill="#1226AA"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_1282_11">
                                                    <rect width="64" height="59.8708" fill="white"/>
                                                  </clipPath>
                                                </defs>
                                              </svg>

                                            <span>
                                                <p>At the rate of consumption, your 30 year cost of not switching to solar is:</p>
                                                <h3>
                                                    $140957</h3>
                                            </span>
                                        </div>
                                    </div>

                                   <div class="dash-list black">
                                        <h2>Total Cost of staying with your Utility</h2>
                                        <div class="dash-box">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="68" viewBox="0 0 73 68" fill="none">
                                                <g clip-path="url(#clip0_1295_117)">
                                                  <path d="M73.0051 66.9044C73.0051 67.5094 72.4789 68.0025 71.8282 68.0025H0V65.8088H16.4846V20.9076C16.4846 20.3026 17.0108 19.8095 17.6615 19.8095H24.7257C25.3764 19.8095 25.9026 20.3001 25.9026 20.9076V65.8038H28.2564V31.3373C28.2564 30.7323 28.7826 30.2392 29.4334 30.2392H36.4975C37.1482 30.2392 37.6744 30.7298 37.6744 31.3373V65.8063H40.0283V42.2881C40.0283 41.6831 40.5544 41.1899 41.2052 41.1899H48.2693C48.92 41.1899 49.4462 41.6805 49.4462 42.2881V65.8063H51.8001V53.9328C51.8001 53.3278 52.3263 52.8347 52.977 52.8347H60.0411C60.6919 52.8347 61.218 53.3253 61.218 53.9328V65.8063H70.6385" fill="#1226AA"/>
                                                  <path d="M58.6634 54.8326H53.9531V65.8063H58.6634V54.8326Z" fill="#0CBF65"/>
                                                  <path d="M47.2415 43.859H42.5312V65.8063H47.2415V43.859Z" fill="#0CBF65"/>
                                                  <path d="M35.3938 32.8854H30.6836V65.8063H35.3938V32.8854Z" fill="#0CBF65"/>
                                                  <path d="M23.3353 21.9117H18.625V65.8063H23.3353V21.9117Z" fill="#0CBF65"/>
                                                  <path d="M60.1753 44.9571L62.7148 40.9637L64.5501 41.8203L60.5185 48.16C60.3634 48.4066 60.0813 48.5743 59.761 48.6175C59.4382 48.6608 59.1128 48.5718 58.8764 48.3786L52.4757 43.1167L53.9221 41.8254L58.1062 45.2647C53.3222 27.987 37.529 14.1359 17.3535 9.71538L14.4785 9.08498L14.9971 7.34882L17.872 7.97922C38.8407 12.5751 55.2465 26.988 60.1728 44.9597L60.1753 44.9571Z" fill="#1226AA"/>
                                                  <path d="M2.46909 1.09813V5.48555H9.53574V7.68181H2.46909V12.0718H9.53574V14.2655H2.46909V18.6555H9.53574V20.8492H2.46909V25.2391H9.53574V27.4328H2.46909V31.8228H9.53574V34.0191H2.46909V38.4065H9.53574V40.6027H2.46909V44.9902H9.53574V47.1864H2.46909V51.5764H9.53574V53.7701H2.46909V66.9375H0.115234V0" fill="#1226AA"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_1295_117">
                                                    <rect width="73.0051" height="68" fill="white"/>
                                                  </clipPath>
                                                </defs>
                                              </svg>

                                            <span>
                                                <p>At the rate of consumption, your 30 year cost of not switching to solar is:</p>
                                                <h3>
                                                    $63951</h3>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>






                @if ($deal->lender =='Sunnova')
                <div class="mySlides fade">
                    <section class="secton-25">
                        <div class="main-section-25">





                 <div class="section-25-part-box">


                    <div class="section-25-part-1">


                        <div class="logo-section-25">
                            <img src="/images/sunno.png" alt="">
                        </div>
                        <div class="part-25-card">
                            <h2 >Proposed Financial Plan</h2>

                            <div class="part-25-box">
                                <div class="part-25-list">
                                    <h3>Cash Down Payment</h3>

                                    <h3 class="doler">{{$deal->cash ?? 0}}</h3>
                                </div>



                                <div class="part-25-list">
                                    <h3>Financed Amount</h3>

                                    <h3 class="doler">{{$deal->system_cost - ($deal->rebate * $basic->size) * 1000 }}</h3>
                                </div>


                                @if ($basic->state =='NY')
                                <div class="part-25-list go">
                                    <h3>Total Tax Credit</h3>

                                    <h3 class="doler">{{ ($deal->rebate * $basic->size) * 1000 }}</h3>
                                </div>
                                @endif



                                <div class="part-25-list">
                                    <h3>Net Cost</h3>

                                    <h3 class="doler">{{$deal->total_finance * 0.3}}</h3>
                                </div>

                            </div>

                     <div class="part-25-box-2">
                        <div class="part-25-listing">
                            <p>Plan Provider</p>
                            <img src="/images/a-logo.png" alt="">
                        </div>

                        <div class="part-25-listing-2">
                            <span>
                                <p>Loan Term</p>
                                <h3>{{$deal->loan_term}} Years</h3>
                            </span>

                            <span>
                                <p>APR</p>
                                <h3>{{$deal->apr}}%</h3>
                            </span>
                        </div>
                     </div>

                        </div>
                    </div>

                    <div class="section-25-part-2">

                        <div class="Solar-card">
                            <div class="solar-lilst-1">
                                <h2>Today</h2>
                                <h2>Solar</h2>
                            </div>

                            <div class="solar-box">
                                <div class="solar-list">
                                    <h2 class="with">Average Utility Payment</h2>
                                    <h2>${{$basic->average}}</h2>
                                    <h2 class="color-change">$27</h2>
                                </div>


                                <div class="solar-list">
                                    <h2 class="with">Loan Payment</h2>
                                    <h2>$0</h2>
                                    <h2 class="color-change">${{$month->Reamorization}}</h2>
                                </div>



                                <div class="solar-list color">
                                    <h2 class="with">Average Monthly Payment</h2>
                                    <h2>${{$basic->average}}</h2>
                                    <h2 class="color-change">${{$month->Reamorization + $basic->packeage}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                 </div>

                        </div>
                    </section>
                </div>
                @endif




                @if ($deal->lender =='Goodleap')
                <div class="mySlides fade">
                    <section class="secton-25">
                        <div class="main-section-25">





                 <div class="section-25-part-box">


                    <div class="section-25-part-1">


                        <div class="logo-section-25">
                            <img src="/images/a-logo.png" alt="">
                        </div>
                        <div class="part-25-card">
                            <h2 >Proposed Financial Plan</h2>

                            <div class="part-25-box">
                                <div class="part-25-list">
                                    <h3>Cash Down Payment</h3>

                                    <h3 class="doler">{{$deal->cash ?? 0}}</h3>
                                </div>



                                <div class="part-25-list">
                                    <h3>Financed Amount</h3>

                                    {{-- <h3 class="doler">{{$deal->total_finance }}</h3> --}}
                                    <h3 class="doler">{{$deal->system_cost - ($deal->rebate * $basic->size) * 1000 }}</h3>



                                </div>


                                @if ($basic->state =='NY')
                                <div class="part-25-list go">
                                    <h3>Total Tax Credit</h3>

                                    <h3 class="doler">{{ ($deal->rebate * $basic->size) * 1000 }}</h3>
                                </div>
                                @endif


                                <div class="part-25-list">
                                    <h3>Net Cost</h3>

                                    <h3 class="doler">{{$deal->total_finance * 0.3}}</h3>
                                </div>

                            </div>

                     <div class="part-25-box-2">
                        <div class="part-25-listing">
                            <p>Plan Provider</p>
                            <img src="/images/a-logo.png" alt="">
                        </div>

                        <div class="part-25-listing-2">
                            <span>
                                <p>Loan Term</p>
                                <h3>{{$deal->loan_term}} Years</h3>
                            </span>

                            <span>
                                <p>APR</p>
                                <h3>{{$deal->apr}}%</h3>
                            </span>
                        </div>
                     </div>

                        </div>
                    </div>

                    <div class="section-25-part-2">

                        <div class="Solar-card">
                            <div class="solar-lilst-1">
                                <h2>Today</h2>
                                <h2>Solar</h2>
                            </div>

                            <div class="solar-box">
                                <div class="solar-list">
                                    <h2 class="with">Average Utility Payment</h2>
                                    <h2>${{$basic->average}}</h2>
                                    <h2 class="color-change">$27</h2>
                                </div>


                                <div class="solar-list">
                                    <h2 class="with">Loan Payment</h2>
                                    <h2>$0</h2>
                                    <h2 class="color-change">${{$month->Reamorization}}</h2>
                                </div>



                                <div class="solar-list color">
                                    <h2 class="with">Average Monthly Payment</h2>
                                    <h2>${{$basic->average}}</h2>
                                    <h2 class="color-change">${{$month->Reamorization + $basic->packeage}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                 </div>

                        </div>
                    </section>
                </div>
                @endif



                @if ($deal->lender =='Dividend')
                <div class="mySlides fade">
                    <section class="secton-25">
                        <div class="main-section-25">





                 <div class="section-25-part-box">


                    <div class="section-25-part-1">


                        <div class="logo-section-25">
                            <img src="/images/divide.png" alt="">
                        </div>
                        <div class="part-25-card">
                            <h2 >Proposed Financial Plan</h2>

                            <div class="part-25-box">
                                <div class="part-25-list">
                                    <h3>Cash Down Payment</h3>

                                    <h3 class="doler">{{$deal->cash ?? 0}}</h3>
                                </div>



                                <div class="part-25-list">
                                    <h3>Financed Amount</h3>

                                    <h3 class="doler">{{$deal->system_cost - ($deal->rebate * $basic->size) * 1000 }}</h3>
                                </div>



                                @if ($basic->state =='NY')
                                <div class="part-25-list go">
                                    <h3>Total Tax Credit</h3>

                                    <h3 class="doler">{{ ($deal->rebate * $basic->size) * 1000 }}</h3>
                                </div>
                                @endif



                                <div class="part-25-list">
                                    <h3>Net Cost</h3>

                                    <h3 class="doler">{{$deal->total_finance * 0.3}}</h3>
                                </div>

                            </div>

                     <div class="part-25-box-2">
                        <div class="part-25-listing">
                            <p>Plan Provider</p>
                            <img src="/images/a-logo.png" alt="">
                        </div>

                        <div class="part-25-listing-2">
                            <span>
                                <p>Loan Term</p>
                                <h3>{{$deal->loan_term}} Years</h3>
                            </span>

                            <span>
                                <p>APR</p>
                                <h3>{{$deal->apr}}%</h3>
                            </span>
                        </div>
                     </div>

                        </div>
                    </div>

                    <div class="section-25-part-2">

                        <div class="Solar-card">
                            <div class="solar-lilst-1">
                                <h2>Today</h2>
                                <h2>Solar</h2>
                            </div>

                            <div class="solar-box">
                                <div class="solar-list">
                                    <h2 class="with">Average Utility Payment</h2>
                                    <h2>${{$basic->average}}</h2>
                                    <h2 class="color-change">$27</h2>
                                </div>


                                <div class="solar-list">
                                    <h2 class="with">Loan Payment</h2>
                                    <h2>$0</h2>
                                    <h2 class="color-change">${{$month->Reamorization}}</h2>
                                </div>



                                <div class="solar-list color">
                                    <h2 class="with">Average Monthly Payment</h2>
                                    <h2>${{$basic->average}}</h2>
                                    <h2 class="color-change">${{$month->Reamorization + $basic->packeage}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                 </div>

                        </div>
                    </section>
                </div>
                @endif









                <div class="mySlides fade">
                    <section class="section-sixty">
                        <div class="main-dasborad-site">

                            <div class="dash-site-list-1">
                                <div class="logo-section-25">
                                    <img src="/images/a-logo.png" alt="">
                                </div>

                                <div class="site-1-dash-p">
                                    <h3>Purchase
                                        <br>

                                        <span>Plan</span>
                                        </h3>
                                </div>
                            </div>


                            <div class="dash-site-list-2">
                                <div class="site-box-card">

                                    <div class="Cost-btn-box ">
                                        <img src="/images//freedowm.png" alt="">
                                        <button>Solar Cost Breakdown</button>
                                    </div>

                                    <div class="Cost-list-box">
                                        <span>
                                            <h2>Total Project Cost</h2>
                                            <h2>$19,168</h2>
                                        </span>

                                        <span>
                                            <h2>Federal Tax Credit</h2>
                                            <h2>$19,168</h2>
                                        </span>

                                        <span>
                                            <h2>State Tax Credit</h2>
                                            <h2>$19,168</h2>
                                        </span>

                                        <span>
                                            <h2>Total Tax Credit</h2>
                                            <h2>$19,168</h2>
                                        </span>
                                    </div>

                                    <div class="cost-btn-listing">
                                        <button><h2>NET Cost</h2> <h2>$19,168</h2></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>






                <div class="mySlides fade">
                    <section class="expectional_service">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="expectional_logo">
                                        <img src="images/expectional-logo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="expectional_txt">
                                        <h3>Expectional Service and Warranty</h3>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="upfront-cost-box">
                                                <h4>Get Your System Installed At No  UpFront Cost</h4>
                                                <p>We take care of the entire installation process from beginning to end, so you can rest assured that everything is taken care of.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="upfront-cost-box">
                                                <h4>Save Money with IGS's Low Monthly Billing</h4>
                                                <p>Your ICS bill will never exprience an increase of more than 2.9% unlike your utility bill.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="work-contract-box">
                                                <div class="lifetime-logo">
                                                    <img src="images/sunnova.png" alt="">
                                                    <h5>100% Lifetime Guarantee</h5>
                                                </div>
                                                <h6>Your System Works Throughout thee Contract!</h6>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio cupiditate sequi numquam omnis. Nostrum omnis, quod corrupti temporibus rem laudantium deleniti fugit reiciendis, atque minus sequi dicta dignissimos nihil facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti obcaecati modi porro, exercitationem perferendis dignissimos, possimus at assumenda sed minus, ducimus quia dolor eligendi odit. Vero possimus expedita voluptas amet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </section>
                </div>


                <div class="mySlides fade">
                    <section class="expectional_service">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="expectional_logo">
                                        <img src="images/expectional-logo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="expectional_txt">
                                        <h3>Expectional Service and Warranty</h3>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="upfront-cost-box">
                                                <h4>Get Your System Installed At No  UpFront Cost</h4>
                                                <p>We take care of the entire installation process from beginning to end, so you can rest assured that everything is taken care of.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="upfront-cost-box">
                                                <h4>Save Money with IGS's Low Monthly Billing</h4>
                                                <p>Your ICS bill will never exprience an increase of more than 2.9% unlike your utility bill.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="work-contract-box">
                                                <div class="lifetime-logo">
                                                    <img src="images/igs-logo.PNG" alt="">
                                                    <h5>100% Lifetime Guarantee</h5>
                                                </div>
                                                <h6>Your System Works Throughout thee Contract!</h6>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio cupiditate sequi numquam omnis. Nostrum omnis, quod corrupti temporibus rem laudantium deleniti fugit reiciendis, atque minus sequi dicta dignissimos nihil facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti obcaecati modi porro, exercitationem perferendis dignissimos, possimus at assumenda sed minus, ducimus quia dolor eligendi odit. Vero possimus expedita voluptas amet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </section>
                </div>


                <div class="mySlides fade">

                </div>
    </div>



            <div class="salider-group ">
                <a class="prev" onclick="plusSlides(-1)" >❮</a>
                <a class="next" onclick="plusSlides(1)"  >❯</a>
               </div>
           </div>











    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>



           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
           integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
           crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
               integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
               crossorigin="anonymous"></script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>


            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                }
                </script>
</body>


</html>
