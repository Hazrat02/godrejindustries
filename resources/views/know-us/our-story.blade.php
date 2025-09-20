@extends('layouts.home')

@section('title',
    'Our Story - Godrej - over 125 years young.
    Our story began as part of')
    
    @push('styles')
    

           <link href="{{ asset('assets/css/storycss.css') }}" rel="stylesheet">
   
   
   
        @endpush

@section('content')



    <div class="fwp sticker" id="Our_Story_Wrapper">
        <div id="fullpage">

            <section class="title_desc_left our_story_section section" id="Our_Story_Landing" data-anchor="landing">
                <video id="myVideo" loop muted data-autoplay>
                    <source src="https://www.godrejindustries.com/public/videos/Make-in-India.mp4" type="video/mp4">
                </video>
                <div id="landing_screen">&nbsp;</div>
                <div class="fwpc">
                    <section class="topspace133 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row vhmin pr">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="fw txc">
                                            <p class="Avenir_Light"><span class="white">Godrej</span> - over 125 years
                                                young.<br>Our story began as part of<br><span class="white">India's
                                                    Swadeshi movement -</span><br>the original 'Make in India'<br>movement.
                                            </p>
                                            <div class="fw txc">
                                                <a><span class="playic">&nbsp;</span><span
                                                        class="learnmore opa1 pink play_video_popup"
                                                        data-youtube="LzIafPDliLM">Our Story</span></a>
                                            </div>
                                            <div class="fw txc" id="down_arrow">
                                                <a class="dropdown scroll_to" rel="Year_1897">&nbsp;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1897" id="Year_1897" data-anchor="1897">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row vhmin">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-7">
                                    <div class="fw">
                                        <div class="fw bigimg"><img
                                                src="https://www.godrejindustries.com/public/images/about/our-story/big/1897.jpg"
                                                class="fw" alt="Key to success"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <div class="container-fluid">
                        <section class="h64 fw">&nbsp;</section>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Key to success</h2>
                                    <div class="fw visible-xs bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1897.jpg"
                                            class="fw" alt="Key to success"></div>
                                    <p class="Avenir_Light">Ardeshir Godrej, after a few failed <br class="hidden-xs">
                                        ventures, sets up a lock company.
                                        <br class="hidden-xs"> For him, the key to success turns out<br class="hidden-xs">
                                        to be locks.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="title_desc_left our_story_section section color1918" id="Year_1918" data-anchor="1918">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row vhmin pr">
                            <div class="col-md-4 col-md-offset-7 col-xs-12 col-xs-offset-0">
                                <div class="fw txc">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1918.jpg"
                                            class="fw" alt="World's first vegetable oil soap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row vhmin pr">
                            <div class="col-md-5 col-md-offset-2 col-xs-12 col-xs-offset-0 pd">
                                <div class="fw">
                                    <h2 class="white">World's first<br class="visible-xs"> vegetable oil soap</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1918.jpg"
                                            class="fw" alt="World's first vegetable oil soap"></div>
                                    <p class="white Avenir_Light">We launch Chavi, the first soap in the world
                                        <br class="hidden-xs"> to be made without animal fat.
                                        <br class="hidden-xs"> We score for Swadeshi and ahimsa.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1919" id="Year_1919" data-anchor="1919">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row vhmin pr">
                            <div class="col-md-5 col-md-offset-7 col-xs-12 col-xs-offset-0 pd">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1919.jpg"
                                            class="no_shadow" width="65%" alt="It's all in a name"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row vhmin pr">
                            <div class="col-md-6 col-md-offset-2 col-xs-12 col-xs-offset-0 pd">
                                <div class="fw">
                                    <h2 class="white">It's all in a name</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1919.jpg"
                                            class="no_shadow" width="90%" alt="It's all in a name"></div>
                                    <p class="white Avenir_Light">Soon after, we launch another soap,<br
                                            class="hidden-xs"> Godrej No.2. Why the name? To borrow<br class="hidden-xs">
                                        Ardeshir Godrej's explanation, "If people<br class="hidden-xs"> find No.2 so good,
                                        they'll believe No.1 to<br class="hidden-xs"> be even better!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

            <section class="title_desc_left our_story_section section color1921" id="Year_1921" data-anchor="1921">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row vhmin pr">
                            <div class="col-md-5 col-md-offset-6 col-xs-12 col-xs-offset-0">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1921.jpg"
                                            class="fw" alt="Supporting India's freedom movement"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row vhmin pr">
                            <div class="col-md-5 col-md-offset-2 col-xs-12 col-xs-offset-0 pd">
                                <div class="fw">
                                    <h2 class="white">Supporting India's<br class="hidden-xs"> freedom movement</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1921.jpg"
                                            class="fw" alt="Supporting India's freedom movement"></div>
                                    <p class="white Avenir_Light">Ardeshir Godrej, an ardent nationalist,<br
                                            class="hidden-xs"> donates 3 lakh rupees to the Tilak Swaraj<br
                                            class="hidden-xs"> Fund, the largest single contribution<br class="hidden-xs">
                                        back then.</p>
                                    <!-- <div class="fw">
             <br><br><a class="learnmore h_white_txt play_video_popup" data-youtube="RxiHCMR64Hs">Watch</a>
            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1922" id="Year_1922" data-anchor="1922">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1922_letter_from_Gandhi.jpg"
                                            alt="A special letter from Gandhi" class="fw"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">A special letter from Gandhi</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1922_letter_from_Gandhi.jpg"
                                            class="fw" alt="A special letter from Gandhi"></div>
                                    <p class="white Avenir_Light">One of our most treasured moments:<br class="hidden-xs">
                                        Mahatma Gandhi, in a letter to a favour-seeking<br class="hidden-xs"> competitor,
                                        says: “I hold my brother Godrej in<br class="hidden-xs"> such high regard that if
                                        your enterprise is likely<br class="hidden-xs"> to harm him in any way, I regret
                                        very much that I<br class="hidden-xs"> cannot give you my blessings.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1922_1" id="Year_1922_1" data-anchor="1922_2">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="fw">
                                    <div class="fw txc bigimg">
                                        <!-- <img src="https://www.godrejindustries.com/public/images/about/our-story/big/1922.jpg" alt="Godrej No. 1" class="fw"> -->
                                        <div class="fw owl-carousel owl-theme our_story_sliders bgt"
                                            id="Godrej_soaps_Slider">
                                            <div class="fw txc">
                                                <img src="https://www.godrejindustries.com/public/images/about/our-story/big/1922_1.jpg"
                                                    class="no_shadow wd75" alt="Godrej No. 1">
                                            </div>
                                            <div class="fw txc">
                                                <img src="https://www.godrejindustries.com/public/images/about/our-story/big/1922.jpg"
                                                    class="no_shadow wd75" alt="Godrej No. 1">
                                            </div>
                                        </div>
                                        <section class="h30 fw">&nbsp;</section>
                                        <ul class='our_story_sliders_dots godrej_soaps_slider_dots owl-dots'></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Godrej soaps are endorsed by India’s freedom fighters</h2>
                                    <div class="fw bigimg txc visible-xs">
                                        <div class="fw owl-carousel owl-theme our_story_sliders bgt"
                                            id="Godrej_soaps_Slider_mo">
                                            <div class="fw txc">
                                                <img src="https://www.godrejindustries.com/public/images/about/our-story/big/1922_1.jpg"
                                                    class="no_shadow fw" alt="Godrej No. 1">
                                            </div>
                                            <div class="fw txc">
                                                <img src="https://www.godrejindustries.com/public/images/about/our-story/big/1922.jpg"
                                                    class="no_shadow fw" alt="Godrej No. 1">
                                            </div>
                                        </div>
                                        <section class="h20 fw">&nbsp;</section>
                                        <ul class='our_story_sliders_dots godrej_soaps_slider_dots_mo owl-dots'></ul>
                                    </div>
                                    <p class="white Avenir_Light">Godrej No.1 is born into swadeshi fervour<br
                                            class="hidden-xs"> and is fondly endorsed by many, including<br
                                            class="hidden-xs"> Rabindranath Tagore, Annie Besant and<br class="hidden-xs">
                                        C. Rajagopalachari. Today, it is one of India's<br class="hidden-xs"> biggest soap
                                        brands.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1938" id="Year_1938" data-anchor="1938">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1938.jpg"
                                            class="fw" alt="Securing futures"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Securing futures</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1938.jpg"
                                            class="fw" alt="Securing futures"></div>
                                    <p class="white Avenir_Light">Public Provident Fund is introduced at Godrej,<br
                                            class="hidden-xs"> 14 years before the Government of India<br
                                            class="hidden-xs"> mandates it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1943" id="Year_1943" data-anchor="1943">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1943.jpg"
                                            class="fw" alt="Key to success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Pirojshanagar</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1943.jpg"
                                            class="fw" alt="Key to success"></div>
                                    <p class="white Avenir_Light">
                                        The then Government of Bombay auctions<br class="hidden-xs"> Vikhroli village to
                                        Pirojsha Godrej. Over the<br class="hidden-xs"> years, Vikhroli transforms into a
                                        green,<br class="hidden-xs"> industrial township that cares for its people<br
                                            class="hidden-xs"> and the environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1943_1" id="Year_1943_1" data-anchor="1943_2">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1943_1.jpg"
                                            class="fw" alt="Going green"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Going green</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1943_1.jpg"
                                            class="fw" alt="Going green"></div>
                                    <p class="white Avenir_Light">
                                        We go green way before it is cool to do so<br class="hidden-xs">
                                        and decide to let mangroves be mangroves.<br class="hidden-xs">
                                        You will find a dense cover of mangroves,<br class="hidden-xs">
                                        nearly 3x the size of New York's Central Park,<br class="hidden-xs">
                                        owned and cared for by us,<br class="hidden-xs">
                                        in the heart of our estate in Mumbai.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.mangroves.godrej.com/" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1944" id="Year_1944" data-anchor="1944">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1944.jpg"
                                            class="fw no_shadow" alt="Safest safes"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Safest safes</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1944.jpg"
                                            class="fw no_shadow" alt="Safest safes"></div>
                                    <p class="white Avenir_Light">A devastating explosion at the Bombay<br
                                            class="hidden-xs"> docks leaves terrible carnage in its wake.<br
                                            class="hidden-xs"> Among the few things to survive the blast<br
                                            class="hidden-xs"> are Godrej safes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1951" id="Year_1951" data-anchor="1951">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1951.jpg"
                                            class="fw no_shadow" alt="Ballot boxes for free India's first elections">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Ballot boxes for free India's first elections</h2>
                                    <div class="fw bigimg visible-xs txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1951.jpg"
                                            width="75%" class="no_shadow"
                                            alt="Ballot boxes for free India's first elections"></div>
                                    <p class="white Avenir_Light">We were thrilled to make 1.7 million ballot boxes<br
                                            class="hidden-xs"> for India's first steps as a democracy. K. R.<br
                                            class="hidden-xs"> Thanewalla remembers, "I know that our best<br
                                            class="hidden-xs"> was around 22,000 ballot boxes per day!<br
                                            class="hidden-xs"> We would be at the plant from quarter to<br
                                            class="hidden-xs"> seven onwards and rarely left before midnight."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1952" id="Year_1952" data-anchor="1952">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1952.jpg"
                                            class="" width="60%" alt="Cinthol"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Cinthol</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1952.jpg"
                                            class="" width="60%" alt="Cinthol"></div>
                                    <p class="white Avenir_Light">Cinthol is launched on India's Independence Day.<br
                                            class="hidden-xs"> Together with Godrej No.1, Cinthol makes us<br
                                            class="hidden-xs"> the second largest soap player in India.</p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <!-- <div class="fw">
             <a href="https://awesomemen.cinthol.com/" target="_blank" class="learnmore h_white_txt">Read</a>
            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1963_new" id="Year_1963" data-anchor="1963">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="fw">
                                    <div class="fw"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1963.png"
                                            class="fw" alt="Godrej Industries Chemicals"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Godrej Industries Chemicals</h2>
                                    <div class="fw visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1963.png"
                                            class="fw" alt="Godrej Industries Chemicals"></div>
                                    <p class="white Avenir_Light">One of our oldest businesses, our <br
                                            class="hidden-xs">Chemicals division is a leading oleo-<br
                                            class="hidden-xs">chemicals, surfactants, derivates <br
                                            class="hidden-xs">manufacturer in India.</p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.godrejchemicals.com/" target="_blank"
                                            class="learnmore h_white_txt">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1974" id="Year_1974" data-anchor="1974">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1974.jpg"
                                            class="" width="80%" alt="Hair Colour"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Hair Colour</h2>
                                    <div class="fw txc bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1974.jpg"
                                            width="80%" alt="Hair Colour"></div>
                                    <p class="white Avenir_Light">
                                        Our first hair colour product, a liquid hair dye,<br class="hidden-xs">
                                        is a runaway success. We introduce a series of<br class="hidden-xs">
                                        innovative hair care products through the years,<br class="hidden-xs">
                                        becoming a leading player in Asia,<br class="hidden-xs">
                                        Africa and Latin America.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="title_desc_left our_story_section section color1974_1" id="Year_1974_1" data-anchor="1974_2">
       <div class="fwpc hidden-xs">
        <section class="h64 fw">&nbsp;</section>
        <div class="container-fluid">
         <div class="row">
          <div class="col-md-5 col-md-offset-6">
           <div class="fw txc">
            <div class="fw bigimg"><img src="https://www.godrejindustries.com/public/images/about/our-story/big/1974_1.jpg" class="fw" alt="Godrej Trusts"></div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="fwpc">
        <section class="h64 fw">&nbsp;</section>
        <div class="container-fluid">
         <div class="row">
          <div class="col-md-4 col-md-offset-2 pd">
           <div class="fw">
            <h2 class="white">Godrej Trusts</h2>
            <div class="fw bigimg visible-xs"><img src="https://www.godrejindustries.com/public/images/about/our-story/big/1974_1.jpg" class="fw" alt="Godrej Trusts"></div>
            <p class="white Avenir_Light">The Soonabai Pirojsha Godrej Foundation
             <br class="hidden-xs"> is founded. Today, approximately 23 per cent
             <br class="hidden-xs">of the promoter holding in the Group is
             <br class="hidden-xs"> held in trusts that invest in the environment,
             <br class="hidden-xs">health and education.
            </p>
            <div class="fw h40 h20m">&nbsp;</div>
            <div class="fw">
             <a href="https://www.udayachal.com" target="_blank" class="learnmore h_white_txt">Read</a>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </section> -->

            <section class="title_desc_left our_story_section section color1988" id="Year_1988" data-anchor="1988">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1988.jpg"
                                            class="fw" alt="Quality matters"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Quality matters</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1988.jpg"
                                            class="fw" alt="Quality matters"></div>
                                    <p class="white Avenir_Light">Total Quality Management is formally<br
                                            class="hidden-xs"> introduced at Godrej, grounding our<br class="hidden-xs">
                                        commitment to create amazing quality,<br class="hidden-xs"> world-class products.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1990_new" id="Year_1990" data-anchor="1990">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1990.png"
                                            class="fw" alt="Godrej Properties"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Godrej Properties</h2>
                                    <div class="fw visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1990.png"
                                            class="fw" alt="Godrej Properties"></div>
                                    <p class="white Avenir_Light">Godrej Properties is established,<br class="hidden-xs">
                                        bringing the Group's philosophy of<br class="hidden-xs"> innovation and excellence
                                        to the real<br class="hidden-xs"> estate industry in India.</p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.godrejproperties.com/" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1991_new" id="Year_1991" data-anchor="1991">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1991.png"
                                            class="fw" alt="Agri - business"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Godrej Agrovet</h2>
                                    <div class="fw visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1991.png"
                                            class="fw" alt="Agri - business"></div>
                                    <p class="white Avenir_Light">Godrej Agrovet is incorporated.<br class="hidden-xs"> A
                                        diversified, Research & Development<br class="hidden-xs"> backed agri-business
                                        company, it is<br class="hidden-xs"> dedicated to addressing India's key<br
                                            class="hidden-xs"> agricultural crises.</p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.godrejagrovet.com" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1994" id="Year_1994" data-anchor="1994">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1994.jpg"
                                            class="fw" alt="Mosquitos' the world's deadliest animals"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Mosquitos – the world's<br class="hidden-xs"> deadliest animals
                                    </h2>
                                    <div class="fw bigimg visible-xs txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1994.jpg"
                                            width="80%" alt="Mosquitos' the world's deadliest animals"></div>
                                    <p class="white Avenir_Light">
                                        We acquire Translektra. With leading brands<br class="hidden-xs">
                                        such as Goodknight and HIT, we protect<br class="hidden-xs">
                                        against vector borne diseases and are<br class="hidden-xs">
                                        the number one player in household<br class="hidden-xs">
                                        insecticides in India and Indonesia.</p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.goodknight.in" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color1997" id="Year_1997" data-anchor="1997">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1997.jpg"
                                            class="fw no_shadow" alt="Turning 100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Turning 100</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/1997.jpg"
                                            class="fw no_shadow" alt="Turning 100"></div>
                                    <p class="white Avenir_Light">
                                        We celebrate our 100th birthday<br class="hidden-xs">
                                        and remind ourselves that we are<br class="hidden-xs">
                                        only as good as what we do next.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2001_new" id="Year_2001" data-anchor="2001">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2001.png"
                                            class="fw" alt="Godrej Consumer Products"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Godrej Consumer Products</h2>
                                    <div class="fw visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2001.png"
                                            class="fw" alt="Godrej Consumer Products"></div>
                                    <p class="white Avenir_Light">
                                        Godrej Soaps is demerged into a<br class="hidden-xs">
                                        Chemicals business, Godrej Chemicals,<br class="hidden-xs">
                                        and a focused FMCG business,<br class="hidden-xs">
                                        Godrej Consumer Products.
                                        <!-- Godrej Soaps is demerged into a<br class="hidden-xs">
             Chemicals business, Godrej Chemicals,<br class="hidden-xs">
             and a focused FMCG business,<br class="hidden-xs">
             Godrej Consumer Products -<br class="hidden-xs">
             which is how we are now known. -->
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://godrejcp.com/" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2001_1" id="Year_2001_1" data-anchor="2001_2">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2001_1.jpg"
                                            class="fw" alt="Keyline Brands"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Keyline Brands</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2001_1.jpg"
                                            class="fw" alt="Keyline Brands"></div>
                                    <p class="white Avenir_Light">
                                        We start our global journey with our first<br class="hidden-xs">
                                        acquisition outside India - Keyline Brands,<br class="hidden-xs">
                                        a personal care player in the UK. In 2018, we<br class="hidden-xs">
                                        divested our stake in the business, sharpening our<br class="hidden-xs">
                                        strategic focus on emerging markets.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="title_desc_left our_story_section section color2008_1" id="Year_2008" data-anchor="2008">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2008_1.jpg"
                                            class="fw no_shadow" alt="It's time for Africa!"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">It's time for Africa</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2008_1.jpg"
                                            class="fw no_shadow" alt="It's time for Africa!"></div>
                                    <p class="white Avenir_Light">
                                        We make our first African acquisitions –<br class="hidden-xs">
                                        Rapidol and Kinky – opening up the<br class="hidden-xs">
                                        fascinating world of hair extensions and hair<br class="hidden-xs">
                                        care for women of African origin.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a><span class="playic gold">&nbsp;</span><span
                                                class="learnmore pink play_video_popup"
                                                data-youtube="1cH0BUSdxx4">Watch</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="title_desc_left our_story_section section color2010_1" id="Year_2010" data-anchor="2010">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg">
                                        <!-- <img src="https://www.godrejindustries.com/public/images/about/our-story/big/2010_1.jpg" class="fw" alt="Indonesia"> -->
                                        <img src="https://www.godrejindustries.com/public/images/about/our-story/big/2010_1.png"
                                            class="fw no_shadow" alt="Indonesia">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Indonesia</h2>
                                    <!-- <div class="fw bigimg visible-xs"><img src="https://www.godrejindustries.com/public/images/about/our-story/big/2010_1.jpg" class="fw" alt="Indonesia"></div> -->
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2010_1.png"
                                            class="fw no_shadow" alt="Indonesia"></div>
                                    <p class="white Avenir_Light">
                                        We enter the Indonesian market by<br class="hidden-xs">
                                        acquiring P.T. Megasari Makmur,<br class="hidden-xs">
                                        a leading home and personal care player.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.godrejindonesia.com/" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2010_2" id="Year_2010_1" data-anchor="2010_2">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2010_2.jpg"
                                            width="70%" class="no_shadow" alt="Keyline Brands"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Argentina</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2010_2.jpg"
                                            width="80%" class="no_shadow" alt="Keyline Brands"></div>
                                    <p class="white Avenir_Light">
                                        We enter the Argentinian market by<br class="hidden-xs">
                                        acquiring the leading hair colour players,<br class="hidden-xs">
                                        Issue and Argencos.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.godrejargentina.com/" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2011" id="Year_2011" data-anchor="2011">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2011.jpg"
                                            class="fw" alt="Good & Green"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Good & Green</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2011.jpg"
                                            class="fw" alt="Good & Green"></div>
                                    <p class="white Avenir_Light">
                                        Building on our legacy of sustainability<br class="hidden-xs">
                                        and making a commitment to build a<br class="hidden-xs">
                                        more employable and greener world.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.godrejindustries.com/sustainability" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2011_1_new" id="Year_2011_1"
                data-anchor="2011_2">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2011_1.png"
                                            width="80%" class="no_shadow" alt="Darling"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Darling</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2011_1.png"
                                            class="fw no_shadow" alt="Darling"></div>
                                    <p class="white Avenir_Light">
                                        We significantly ramp up our presence in<br class="hidden-xs">
                                        Africa and step into 14 new countries by<br class="hidden-xs">
                                        acquiring the Darling Group, a leader in<br class="hidden-xs">
                                        hair extensions.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <!-- <div class="fw">
             <a ><span class="playic voilet">&nbsp;</span><span class="learnmore pink play_video_popup" data-youtube="ByzbFRSFMJc">Watch</span></a>
            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2011_2" id="Year_2011_2" data-anchor="2011_3">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2011_2_new.jpg"
                                            class="fw" alt="Godrej India Culture Lab"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Godrej India Culture Lab</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2011_2_new.jpg"
                                            class="fw" alt="Godrej India Culture Lab"></div>
                                    <p class="white Avenir_Light">
                                        The Godrej India Culture Lab ran as a successful <br class="hidden-xs">10 year
                                        experiment that, through events, fellowships, <br class="hidden-xs">and public
                                        resources such as white papers and <br class="hidden-xs">websites, created a new
                                        exploratory cultural space <br class="hidden-xs">located within the Godrej
                                        headquarters in Vikhroli, <br class="hidden-xs">Mumbai. It subsequently evolved
                                        into the Godrej <br class="hidden-xs">DEI Lab.
                                        <!-- The Godrej India Culture Lab is set up<br class="hidden-xs">
             as a fluid, experimental space that<br class="hidden-xs">
             cross-pollinates ideas and people to<br class="hidden-xs">
             explore what it means to be modern<br class="hidden-xs">
             and Indian. -->
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <!-- <a href="https://indiaculturelab.org/" target="_blank" class="learnmore h_white_txt">Read</a> -->
                                        <a href="https://www.godrejdeilab.com/" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="title_desc_left our_story_section section color2011_3" id="Year_2011_3" data-anchor="2011_4">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2011_3.jpg"
                                            class="fw no_shadow" alt="Godrej Capability Factors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="blklight">Godrej Capability Factors</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2011_3.jpg"
                                            class="fw no_shadow" alt="Godrej Capability Factors"></div>
                                    <p class="blklight Avenir_Light">
                                        We introduce the Godrej Capability Factors<br class="hidden-xs">
                                        of ‘Leading Self’, ‘Leading Others’ and<br class="hidden-xs">
                                        ‘Leading Business’, to define and measure<br class="hidden-xs">
                                        leadership capability at Godrej. All our<br class="hidden-xs">
                                        people processes are based on this.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <!-- <a href="https://indiaculturelab.org/" target="_blank" class="learnmore h_white_txt">Read</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2012" id="Year_2012" data-anchor="2012">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw ">
                                    <!-- <div class="fw bigimg"><img src="https://www.godrejindustries.com/public/images/about/our-story/big/2012.jpg" class="fw" alt="Chile"></div> -->
                                    <div class="fw bigimg txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2012.png"
                                            class="no_shadow" width="85%" alt="Chile"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Chile</h2>
                                    <!-- <div class="fw bigimg visible-xs"><img src="https://www.godrejindustries.com/public/images/about/our-story/big/2012.jpg" class="fw" alt="Chile"></div> -->
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2012.png"
                                            class="no_shadow fw" alt="Chile"></div>
                                    <p class="white Avenir_Light">
                                        Our next stop – Chile – where we acquire<br class="hidden-xs">
                                        Cosmetica Nacional, a leading hair colour<br class="hidden-xs">
                                        and colour cosmetics company, to grow<br class="hidden-xs">
                                        our presence in Latin America.
                                    </p>
                                    <!-- <div class="fw h40 h20m">&nbsp;</div>
            <div class="fw">
             <a href="https://www.godrejchile.com/" target="_blank" class="learnmore h_white_txt">Read</a>
            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2012_2" id="Year_2012_2"
                data-anchor="2012_3">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw txc">
                                    <div class="fw bigimg">
                                        <div class="fw owl-carousel owl-theme our_story_sliders bgt" id="Loud_Slider">
                                            <div class="fw txc">
                                                <img src="https://www.godrejindustries.com/public/images/about/our-story/big/2012_2.jpg"
                                                    class="new__cls1 no_shadow" alt="Foray into air care">
                                            </div>
                                            <div class="fw txc">
                                                <img src="https://www.godrejindustries.com/public/images/about/our-story/big/2012_2_1.jpg"
                                                    class="new__cls1 no_shadow" alt="Foray into air care">
                                            </div>
                                            <div class="fw txc">
                                                <img src="https://www.godrejindustries.com/public/images/about/our-story/big/2012_2_2.jpg"
                                                    class="new__cls1 no_shadow" alt="Foray into air care">
                                            </div>
                                        </div>
                                        <section class="h30 fw">&nbsp;</section>
                                        <ul class='our_story_sliders_dots loudslider_dots owl-dots'></ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Godrej LOUD</h2>
                                    <div class="fw bigimg visible-xs">
                                        <!-- <img src="https://www.godrejindustries.com/public/images/about/our-story/big/2013.jpg" class="no_shadow" width="60%" alt="Foray into air care"> -->
                                        <div class="fw owl-carousel owl-theme our_story_sliders_mo" id="Loud_Slider_mo">
                                            <div class="fw">
                                                <img src="https://www.godrejindustries.com/public/images/about/our-story/big/2012_2.jpg"
                                                    width="100%" class="no_shadow" alt="Godrej LOUD">
                                            </div>
                                            <div class="fw">
                                                <img src="https://www.godrejindustries.com/public/images/about/our-story/big/2012_2_1.jpg"
                                                    width="100%" class="no_shadow" alt="Godrej LOUD">
                                            </div>
                                            <div class="fw">
                                                <img src="https://www.godrejindustries.com/public/images/about/our-story/big/2012_2_2.jpg"
                                                    width="100%" class="no_shadow" alt="Godrej LOUD">
                                            </div>
                                        </div>
                                        <section class="h20 fw">&nbsp;</section>
                                        <ul class='our_story_sliders_dots_mo loudslider_dots_mo owl-dots'></ul>
                                    </div>
                                    <p class="white Avenir_Light">
                                        Passionate people make for passionate<br class="hidden-xs">
                                        Godrejites! Godrej LOUD (Live Out Ur<br class="hidden-xs">
                                        Dream), our radically different take on<br class="hidden-xs">
                                        recruitment, launches in India,<br class="hidden-xs">
                                        kickstarting the hunt for people with<br class="hidden-xs">
                                        powerful personal dreams. Now we host <br class="hidden-xs">
                                        it in Africa and Indonesia too.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a><span class="playic pink">&nbsp;</span><span
                                                class="learnmore play_video_popup"
                                                data-youtube="y1eI0suP1lQ">Watch</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="title_desc_left our_story_section section color2013_2" id="Year_2013" data-anchor="2013">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2013_2.jpg"
                                            class="fw" alt="Padma Bhushan"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Padma Bhushan</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2013_2.jpg"
                                            class="fw" alt="Padma Bhushan"></div>
                                    <p class="white Avenir_Light">
                                        <!-- Adi Godrej, Chairman of the Godrej Group,<br class="hidden-xs">
             is awarded the Padma Bhushan,<br class="hidden-xs">
             the third-highest civilian award in India,<br class="hidden-xs">
             "distinguished service of a high order". -->
                                        Adi Godrej, Chairman of the Godrej Group,<br class="hidden-xs">
                                        is awarded the Padma Bhushan,<br class="hidden-xs">
                                        the third-highest civilian award in India,<br class="hidden-xs">
                                        for "distinguished service of a high order".
                                    </p>
                                    <!-- <div class="fw h40 h20m">&nbsp;</div>
            <div class="fw">
             <a class="learnmore h_white_txt">Read</a>
            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="title_desc_left our_story_section section color2015" id="Year_2015" data-anchor="2015">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw bigimg"><img
                                        src="https://www.godrejindustries.com/public/images/about/our-story/big/2015.jpg"
                                        class="fw" alt="Godrej One"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Godrej One</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2015.jpg"
                                            class="fw" alt="Godrej One"></div>
                                    <p class="white Avenir_Light">
                                        Godrej Properties and Pelli Clarke Pelli<br class="hidden-xs">
                                        Architects create Godrej One, our new<br class="hidden-xs">
                                        global headquarters at Vikhroli in Mumbai.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a><span class="playic blue">&nbsp;</span><span
                                                class="learnmore pink play_video_popup"
                                                data-youtube="8AkyjIichgI">Watch</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="title_desc_left our_story_section section color2015_1" id="Year_2015_1"
                data-anchor="2015_2">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw"><img
                                        src="https://www.godrejindustries.com/public/images/about/our-story/big/2015_1.png"
                                        class="fw" alt="People philosophy"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">People philosophy</h2>
                                    <div class="fw visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2015_1.png"
                                            class="fw" alt="People philosophy"></div>
                                    <p class="white Avenir_Light">
                                        Our employee value proposition and<br class="hidden-xs">
                                        efforts to build an inspiring place to work<br class="hidden-xs">
                                        are anchored in the 3 pillars of ‘Your <br class="hidden-xs">
                                        Canvas’, ‘Tough Love’ and ‘Whole Self’.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.godrejcareers.com/people-philosophy.aspx" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="title_desc_left our_story_section section color2016_1_new" id="Year_2016"
                data-anchor="2016">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2016_1.jpg"
                                            width="85%" class="no_shadow"
                                            alt="Godrej Investment Advisers Private Limited"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <!-- <h2 class="white">Godrej Investment<br class="hidden-xs"> Advisers Private Limited</h2> -->
                                    <h2 class="white">Godrej Fund Management</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2016_1.jpg"
                                            class="fw no_shadow" alt="Godrej Investment Advisers Private Limited"></div>
                                    <p class="white Avenir_Light">Creating our first investment platform <br
                                            class="hidden-xs">targeting residential real estate by <br
                                            class="hidden-xs">bringing together a group of <br
                                            class="hidden-xs">overseas institutional investors.

                                        <!-- Creating our first investment platform<br class="hidden-xs">  targeting residential real estate by<br class="hidden-xs">  bringing together a group of<br class="hidden-xs"> overseas institutional investors -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2017" id="Year_2017" data-anchor="2017">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw txc">
                                    <div class="fw bigimg"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2017.jpg"
                                            width="85%" class="no_shadow" alt="The Godrej Way"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="blklight">The Godrej Way</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2017.jpg"
                                            class="fw no_shadow" alt="The Godrej Way"></div>
                                    <p class="blklight Avenir_Light">
                                        We introduce The Godrej Way, our refreshed<br class="hidden-xs">
                                        purpose and values. It talks about why we<br class="hidden-xs">
                                        exist and how we add value together; how<br class="hidden-xs">
                                        we bring meaning to what we do, what will<br class="hidden-xs">
                                        guide our decisions.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a><span class="playic blklight">&nbsp;</span><span
                                                class="learnmore blklight play_video_popup"
                                                data-youtube="fK86CanhKfY">Watch</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2017_2" id="Year_2017_2"
                data-anchor="2017_3">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2011_2.jpg"
                                            width="85%" class="no_shadow" alt="Godrej Professional"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">UN Standards of Conduct</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2011_2.jpg"
                                            class="fw no_shadow" alt="Godrej Professional"></div>
                                    <p class="white Avenir_Light">
                                        We partner with the Office of the United<br class="hidden-xs">
                                        Nations High Commissioner for Human<br class="hidden-xs">
                                        Rights and launch an unprecedented set<br class="hidden-xs">
                                        of global corporate standards to support<br class="hidden-xs">
                                        the business community in tackling<br class="hidden-xs">
                                        discrimination against lesbian, gay, bi,<br class="hidden-xs">
                                        trans and intersex (LGBTI) people, at our<br class="hidden-xs">
                                        headquarters in Vikhroli, Mumbai.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://godrejcp.com/public/uploads/press_release/PressReleaseGodrejIndustriespartnerswiththeUnitedNationsHumanRightsOffice.pdf"
                                            target="_blank" class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="title_desc_left our_story_section section color2018_2" id="Year_2018" data-anchor="2018">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2018_2.jpg"
                                            width="85%" class="no_shadow"
                                            alt="World's first powder- to- liquid hand wash"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Manifesto for Trans Inclusion</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2018_2.jpg"
                                            width="100%" class="no_shadow"
                                            alt="World's first powder- to- liquid hand wash"></div>
                                    <p class="white Avenir_Light">
                                        We launch a ‘Manifesto for Trans Inclusion<br class="hidden-xs">
                                        in the Indian Workplace’ to highlight the<br class="hidden-xs">
                                        circumstances of trans people in India,<br class="hidden-xs">
                                        and how corporate India can take action<br class="hidden-xs">
                                        to improve them.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://indiaculturelab.org/assets/Uploads/Godrej-India-Culture-Lab-Trans-Inclusion-Manifesto-Paper3.pdf"
                                            target="_blank" class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="title_desc_left our_story_section section color2020_new" id="Year_2020"
                data-anchor="2020">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2020.png"
                                            width="85%" class="no_shadow" alt="Godrej Housing Finance"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <!-- <h2 class="white">Godrej Housing Finance</h2> -->
                                    <h2 class="white">Godrej Capital</h2>
                                    <div class="fw visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2020.png"
                                            class="fw no_shadow" alt="Godrej Housing Finance"></div>
                                    <p class="white Avenir_Light">
                                        The financial services arm of the Godrej <br class="hidden-xs"> Industries Group,
                                        Godrej Capital leverages <br class="hidden-xs"> a customer-centric approach to
                                        home <br class="hidden-xs"> loans, loans against property and <br
                                            class="hidden-xs"> business loans.
                                        <!-- Building an ambitious foray<br class="hidden-xs"> into financial services.  -->
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.godrejhf.com/" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2023_lab" id="Year_2023"
                data-anchor="2023">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2023_Lab.jpg"
                                            width="85%" class="shadow"
                                            alt="Godrej Diversity, Equity and Inclusion Lab"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Godrej Diversity, Equity and Inclusion Lab</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2023_Lab.jpg"
                                            class="fw shadow" alt="Godrej Diversity, Equity and Inclusion Lab"></div>
                                    <p class="white Avenir_Light">
                                        We set up the Godrej Diversity, Equity and Inclusion Lab to empower inclusion
                                        ecosystems through strategic guidance, building DEI ecosystems in corporate India,
                                        partnerships with universities, think tanks and industry bodies, and much more.
                                    </p>
                                    <div class="fw h40 h20m">&nbsp;</div>
                                    <div class="fw">
                                        <a href="https://www.godrejdeilab.com/" target="_blank"
                                            class="learnmore h_white_txt">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="title_desc_left our_story_section section color2024" id="Year_2024" data-anchor="2024">
                <div class="fwpc hidden-xs">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-6">
                                <div class="fw">
                                    <div class="fw bigimg txc"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2024.jpg"
                                            width="85%" class="shadow" alt="Godrej Industries Group"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fwpc">
                    <section class="h64 fw">&nbsp;</section>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2 pd">
                                <div class="fw">
                                    <h2 class="white">Godrej Industries Group</h2>
                                    <div class="fw bigimg visible-xs"><img
                                            src="https://www.godrejindustries.com/public/images/about/our-story/big/2024.jpg"
                                            class="fw shadow" alt="Godrej Industries Group"></div>
                                    <p class="white Avenir_Light">
                                        We announce an ownership realignment of the
                                        Godrej family shareholdings to maximise
                                        strategic direction, focus, agility, and create
                                        long-term value for shareholders and all other
                                        stakeholders. Godrej Industries Group (GIG) will
                                        include the listed companies, Godrej Industries,
                                        Godrej Consumer Products, Godrej Properties,
                                        Godrej Agrovet and Astec Lifesciences.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>
    </div>



    <section class="pr vhmin YearsWiseStory fw">
        <ul class="fw">
            <li class="din"><a href="#landing" class="landing" rel="Year_landing">Landing</a></li>
            <!-- Don't delete -->
            <li><a href="#1897" class="1897" rel="Year_1897">1897</a></li>
            <li><a href="#1918" class="1918" rel="Year_1918">1918</a></li>
            <li><a href="#1919" class="1919" rel="Year_1919">1919</a></li>
            <li><a href="#1921" class="1921" rel="Year_1921">1921</a></li>
            <li><a href="#1922" class="1922 1922_2" rel="Year_1922">1922</a></li>
            <li><a href="#1938" class="1938" rel="Year_1938">1938</a></li>
            <li><a href="#1943" class="1943 1943_2" rel="Year_1943">1943</a></li>
            <li><a href="#1944" class="1944" rel="Year_1944">1944</a></li>
            <li><a href="#1951" class="1951" rel="Year_1951">1951</a></li>
            <li><a href="#1952" class="1952" rel="Year_1952">1952</a></li>
            <li><a href="#1963" class="1963" rel="Year_1963">1963</a></li>
            <li><a href="#1974" class="1974 1974_2" rel="Year_1974">1974</a></li>
            <li><a href="#1988" class="1988" rel="Year_1988">1988</a></li>
            <li><a href="#1990" class="1990" rel="Year_1990">1990</a></li>
            <li><a href="#1991" class="1991" rel="Year_1991">1991</a></li>
            <li><a href="#1994" class="1994" rel="Year_1994">1994</a></li>
            <li><a href="#1997" class="1997" rel="Year_1997">1997</a></li>
            <li><a href="#2001" class="2001 2001_2" rel="Year_2001">2001</a></li>
            <li><a href="#2008" class="2008 2008_2 2008_3" rel="Year_2008">2008</a></li>
            <li><a href="#2010" class="2010 2010_2 2010_3" rel="Year_2010">2010</a></li>
            <li><a href="#2011" class="2011 2011_2 2011_3 2011_4" rel="Year_2011">2011</a></li>
            <li><a href="#2012" class="2012 2012_2 2012_3 2012_4" rel="Year_2012">2012</a></li>
            <li><a href="#2013" class="2013 2013_2 2013_3" rel="Year_2013">2013</a></li>
            <!-- <li><a href="#2014" class="2014" rel="Year_2014">2014</a></li> -->
            <li><a href="#2015" class="2015 2015_2" rel="Year_2015">2015</a></li>
            <li><a href="#2016" class="2016 2016_2" rel="Year_2016">2016</a></li>
            <li><a href="#2017" class="2017 2017_2 2017_3" rel="Year_2017">2017</a></li>
            <li><a href="#2018" class="2018 2018_2 2018_3 2018_4 2018_5 2018_7 2018_8" rel="Year_2018">2018</a></li>
            <!-- <li><a href="#2019" class="2019 2019_2 2019_3 2019_4 2019_5 2019_6" rel="Year_2019">2019</a></li> -->
            <li><a href="#2020" class="2020" rel="Year_2020">2020</a></li>
            <li><a href="#2023" class="2023" rel="Year_2023">2023</a></li>
            <li><a href="#2024" class="2024" rel="Year_2024">2024</a></li>
        </ul>

    </section>




@endsection
@push('scripts')



<script type="text/javascript" src="https://www.godrejindustries.com/public/js/scrollfix.js" nonce="hsQ8RjQpTqw347hnkdgjBhrx5Y8kjljb"></script>
<script type="text/javascript" src="https://www.godrejindustries.com/public/js/fullpage.js" nonce="hsQ8RjQpTqw347hnkdgjBhrx5Y8kjljb"></script>
<script type="text/javascript" src="https://www.godrejindustries.com/public/js/our-story.js" nonce="hsQ8RjQpTqw347hnkdgjBhrx5Y8kjljb"></script>

@endpush
