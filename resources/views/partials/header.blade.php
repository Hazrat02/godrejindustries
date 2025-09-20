<header class="hidden-xs">
    <div class="fw">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div id="logo" class="txc"><a href="{{ route('home') }}" class="dib"><img
                                src="https://www.godrejindustries.com/public/images/logo-new-black.png" height="75"
                                alt="Godrej Industries Logo"></a></div>
                </div>
                <div class="col-md-10">
                    <div class="mainheader fw pr header_home">
                        <div class="fw">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <nav class="menu txc fw">
                                            <ul>
                                                <li class="has_sub_menu">
                                                    <a href="{{ route('know-us.index') }}">Know Us</a>
                                                    <ul>
                                                        <li><a href="{{ route('know-us.story') }}">Our Story</a></li>
                                                        <li><a href="{{ route('know-us.about') }}">About Godrej
                                                                Industries Group</a></li>
                                                        <li><a href="{{ route('know-us.foundation') }}">Godrej
                                                                Foundation</a></li>
                                                        <li><a href="{{ route('know-us.leadership') }}">Leadership</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="has_sub_menu">
                                                    <a href="{{ route('businesses.index') }}">Businesses</a>
                                                </li>

                                                <li class="has_sub_menu">
                                                    <a href="{{ route('careers.index') }}">Careers</a>
    
                                                </li>

                                                {{-- <li class="has_sub_menu">
                                                    <a href="https://www.godrejindustries.com/sustainability"
                                                        data-title="Good & Green</a></li">Good & Green</a>
                                                    <ul>

                                                        <li><a href="https://www.godrejdeilab.com" target="_blank"
                                                                title="DEI Lab">DEI Lab</a></li>
                                                        <li><a href="https://www.godrejindustries.com/sustainability/10-years-of-sustainability"
                                                                title="10 years of sustainability">10 years of
                                                                sustainability</a></li>
                                                        <li><a href="https://www.godrejindustries.com/sustainability/csr"
                                                                title="CSR">CSR</a></li>
                                                        <li><a href="https://www.godrejindustries.com/sustainability/green-supply-chain"
                                                                title="Green Supply Chain">Green Supply Chain</a></li>
                                                        <li><a href="https://www.godrejindustries.com/sustainability/volunteering"
                                                                title="Volunteering">Volunteering</a></li>
                                                    </ul>
                                                </li> --}}
                                                <li class="has_sub_menu">
                                                    <a href="{{ route('sustainability.index') }}">Good & Green</a>
                                                    <ul>
                                                        <li><a href="{{ route('sustainability.10-years') }}">10 years of
                                                                sustainability</a></li>
                                                        <li><a href="{{ route('sustainability.csr') }}">CSR</a></li>
                                                        <li><a href="{{ route('sustainability.green-supply-chain') }}">Green
                                                                Supply Chain</a></li>
                                                        <li><a
                                                                href="{{ route('sustainability.volunteering') }}">Volunteering</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                {{-- <li class="has_sub_menu">
                                                    <a href="https://www.godrejindustries.com/investors"
                                                        data-title="Investors">Investors</a>
                                                    <ul>
                                                        <li><a href="https://www.godrejindustries.com/investors/annual-reports"
                                                                title="Annual Reports">Annual Reports</a></li>
                                                        <li><a href="https://www.godrejindustries.com/investors/financial-updates"
                                                                title="Financial Updates">Financial Updates</a></li>
                                                        <li><a href="https://www.godrejindustries.com/investors/shareholder-information"
                                                                title="Shareholder Information">Shareholder
                                                                Information</a></li>
                                                        <li><a href="https://www.godrejindustries.com/investors/investors-information"
                                                                title="Investor Information">Investor Information</a>
                                                        </li>
                                                        <li><a href="https://www.godrejindustries.com/investors/subsidiaries-accounts"
                                                                title="Subsidiaries Accounts">Subsidiaries Accounts</a>
                                                        </li>
                                                        <li><a href="https://www.godrejindustries.com/investors/listing-compliance"
                                                                title="Listing Compliance">Listing Compliance</a></li>
                                                        <li><a href="https://www.godrejindustries.com/investors/board-committees"
                                                                title="Board Committees">Board Committees</a></li>
                                                    </ul>
                                                </li> --}}

                                                <li class="has_sub_menu">
                                                    <a href="{{ route('investors.index') }}">Investors</a>
                                                    <ul>
                                                        <li><a href="{{ route('investors.annual-reports') }}">Annual
                                                                Reports</a></li>
                                                        <li><a href="{{ route('investors.financial-updates') }}">Financial
                                                                Updates</a></li>
                                                        <li><a href="{{ route('investors.shareholder-information') }}">Shareholder
                                                                Information</a></li>
                                                        <li><a href="{{ route('investors.investors-information') }}">Investor
                                                                Information</a></li>
                                                        <li><a href="{{ route('investors.subsidiaries-accounts') }}">Subsidiaries
                                                                Accounts</a></li>
                                                        <li><a href="{{ route('investors.listing-compliance') }}">Listing
                                                                Compliance</a></li>
                                                        <li><a href="{{ route('investors.board-committees') }}">Board
                                                                Committees</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="search_popup" class="search_popup">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="fw search_form" id="search_form">
                                            <form action="https://www.godrejindustries.com/search-results"
                                                method="GET">
                                                <input type="text" value="" name="q"
                                                    placeholder="What can we help you find?">
                                            </form>
                                            <div class="close"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>


    <div class="fw bg_white" id="godrej_group_menus">
        <div class="fw">

            <div class="col_gg_menu" id="country_menus">
                <ul>

                </ul>
                <ul>

                </ul>
                <ul>

                </ul>
                <ul>

                </ul>
            </div>

        </div>
    </div>

    <div id="menu_divider">&nbsp;</div>

</header>


<div id="Mobile_Header" class="visible-xs">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-8 pd">
                <a href="https://www.godrejindustries.com" class="logo_mobile"><img
                        src="https://www.godrejindustries.com/public/images/logo-new-black.png" height="50"
                        alt="Godrej Industries Logo"></a>
            </div>
            <div class="col-xs-4 pd">
            </div>
        </div>
    </div>
</div>



<div class="menu_icon visible-xs">
    <span>&nbsp;</span>
    <span>&nbsp;</span>
    <span>&nbsp;</span>
    <span>&nbsp;</span>
</div>


<div id="search_popup_mo" class="search_popup">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fw search_form" id="search_form_mo">
                    <form action="https://www.godrejindustries.com/search-results" method="GET">
                        <input type="text" value="" name="q" placeholder="What can we help you find?">
                    </form>
                    <div class="close"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="Mobile_Menu">
    <div id="menu_header" class="fw">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-8 pd">
                    <a class="fl godrej_webs" id="godrej_group_link_mo">
                        <!-- <span class="sprites web">&nbsp;</span> -->
                        <!-- <span class="fl">GODREJ GROUP</span> -->
                        <!-- <span class="sprites arrow_webs">&nbsp;</span> -->
                    </a>
                    <!-- <a href="https://www.godrejindustries.com" class="logo_mobile"><img src="https://www.godrejindustries.com/public/images/logo-black.png" height="30" alt="GCPL Logo"></a> -->
                </div>
            </div>
        </div>
    </div>

    <div class="header_space">&nbsp;</div>

    <div id="global_menus_mo">
        <!-- <p>You are now on the Global website</p>
  <p class="blk60">Select the region</p> -->
        <!-- <ul>
   <li>
    <a href="https://www.godrejagrovet.com/" target="_blank" data-title="Godrej Agrovet">Godrej Agrovet</a>
   </li>
   <li>
    <a href="https://www.godrejcp.com/" target="_blank" data-title="Godrej Consumer Products">Godrej Consumer Products</a>
   </li>
   <li>
    <a href="https://www.godrejchemicals.com/" target="_blank" data-title="Godrej Industries (Chemicals)">Godrej Industries (Chemicals)</a>
   </li>
   <li>
    <a href="https://www.godrejproperties.com/" target="_blank" data-title="Godrej Properties">Godrej Properties</a>
   </li>
  </ul> -->
        <!-- <div class="mo_seperator_menu">&nbsp;</div>
  <p class="blk60">Explore our products<br>in over 90 countries</p>
  <ul>
   <li><a href="https://godrejcp.com/exports/" target="_blank" data-title="EXPORTS">EXPORTS</a></li>
  </ul> -->
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 pd">




					<ul>
                                                <li class="has_dropdown">
                                                    <a href="{{ route('know-us.index') }}">Know Us</a><span></span>
                                                    <ul>
                                                        <li><a href="{{ route('know-us.story') }}">Our Story</a></li>
                                                        <li><a href="{{ route('know-us.about') }}">About Godrej
                                                                Industries Group</a></li>
                                                        <li><a href="{{ route('know-us.foundation') }}">Godrej
                                                                Foundation</a></li>
                                                        <li><a href="{{ route('know-us.leadership') }}">Leadership</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="has_sub_menu">
                                                    <a href="{{ route('businesses.index') }}">Businesses</a>
                                                </li>

                                                <li class="has_sub_menu">
                                                    <a href="{{ route('careers.index') }}">Careers</a>
    
                                                </li>


                                                <li class="has_dropdown">
                                                    <a href="{{ route('sustainability.index') }}">Good & Green</a><span></span>
                                                    <ul>
                                                        <li><a href="{{ route('sustainability.10-years') }}">10 years of
                                                                sustainability</a></li>
                                                        <li><a href="{{ route('sustainability.csr') }}">CSR</a></li>
                                                        <li><a href="{{ route('sustainability.green-supply-chain') }}">Green
                                                                Supply Chain</a></li>
                                                        <li><a
                                                                href="{{ route('sustainability.volunteering') }}">Volunteering</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                {{-- <li class="has_sub_menu">
                                                    <a href="https://www.godrejindustries.com/investors"
                                                        data-title="Investors">Investors</a>
                                                    <ul>
                                                        <li><a href="https://www.godrejindustries.com/investors/annual-reports"
                                                                title="Annual Reports">Annual Reports</a></li>
                                                        <li><a href="https://www.godrejindustries.com/investors/financial-updates"
                                                                title="Financial Updates">Financial Updates</a></li>
                                                        <li><a href="https://www.godrejindustries.com/investors/shareholder-information"
                                                                title="Shareholder Information">Shareholder
                                                                Information</a></li>
                                                        <li><a href="https://www.godrejindustries.com/investors/investors-information"
                                                                title="Investor Information">Investor Information</a>
                                                        </li>
                                                        <li><a href="https://www.godrejindustries.com/investors/subsidiaries-accounts"
                                                                title="Subsidiaries Accounts">Subsidiaries Accounts</a>
                                                        </li>
                                                        <li><a href="https://www.godrejindustries.com/investors/listing-compliance"
                                                                title="Listing Compliance">Listing Compliance</a></li>
                                                        <li><a href="https://www.godrejindustries.com/investors/board-committees"
                                                                title="Board Committees">Board Committees</a></li>
                                                    </ul>
                                                </li> --}}

                                                <li class="has_dropdown">
                                                    <a href="{{ route('investors.index') }}">Investors</a> <span></span>
                                                    <ul>
                                                        <li><a href="{{ route('investors.annual-reports') }}">Annual
                                                                Reports</a></li>
                                                        <li><a href="{{ route('investors.financial-updates') }}">Financial
                                                                Updates</a></li>
                                                        <li><a href="{{ route('investors.shareholder-information') }}">Shareholder
                                                                Information</a></li>
                                                        <li><a href="{{ route('investors.investors-information') }}">Investor
                                                                Information</a></li>
                                                        <li><a href="{{ route('investors.subsidiaries-accounts') }}">Subsidiaries
                                                                Accounts</a></li>
                                                        <li><a href="{{ route('investors.listing-compliance') }}">Listing
                                                                Compliance</a></li>
                                                        <li><a href="{{ route('investors.board-committees') }}">Board
                                                                Committees</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
            </div>
        </div>
    </div>
</div>
<div class="top_arrow">
    <img src="https://www.godrejindustries.com/public/images/home/top_arrow.jpg" class="fw">
</div>
