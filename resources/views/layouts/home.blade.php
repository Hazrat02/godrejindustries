<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', "Godrej | Industries - Let's make Goodness")</title>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">


    <meta name="keywords"
        content="Godrej Industries,Godrej Industries limited,GIL,Godrej Industries Ltd,GCPL,GAVL,GPL,GIL Chemicals,Godrej Consumer Products,Godrej consumer products limited,Godrej consumer products ltd,Godrej Agrovet Limited,Godrej Agrovet ltd,Godrej Agrovet,Oleochemicals manufacturer,India&#39;s leading oleochemicals manufacturer,gourmet retailer, leading gourmet retailer, India&#39;s leading gourmet retailer, innovation and excellence to real estate, Godrej Properties, Godrej Properties limited, Godrej properties ltd, improve farm productivity, animal nutrition,processed poultry, agricultural inputs, oil palm, hybrid seeds, omni-channel gourmet retail chain, Chemical&#39;s manufacturer, 1.1 billion consumers, Godrej One, New Godrej headquarters, New Godrej HQ,FMCG, real estate, agriculture, agri business, 1.1 billion consumers globally,Fostering an inspiring workplace,over 115-year young Godrej Group,Why Godrej,poem by Nadir Godrej,Godrej people philosophy,explore careers at Godrej,Actively champion social responsibility,more employable workforce,building greener India,innovating for good and green products,Godrej In the news,Godrej Industries limited and associate companies" />

    <!-- <meta name="description" content="Godrej Industries comprises of 5 major companies with interests in real estate, FMCG,agriculture, chemicals and gourmet retail" /> -->
    <meta name="description"
        content="Godrej Industries comprises 5 major companies with significant interests in consumer goods, real estate, agriculture, chemicals and financial services." />

    <link rel="shortcut icon" type="image/ico" href="https://www.godrejindustries.com/public/favicon.ico" />





    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/column.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">



    @stack('styles')
</head>

<body>





    {{-- Header --}}
    @include('partials.header')

    {{-- Main Content --}}
    @yield('content')

<section class="ourstorydib seperator">&nbsp;</section>
    {{-- Footer --}}
    @include('partials.footer')




    <script type="text/javascript" src="https://www.godrejindustries.com/public/js/jquery.min.js"
        nonce="w1ZuG4VnMwLmpBEjpqo3t35vmewO2OHO"></script>
    <script src="https://www.youtube.com/iframe_api" nonce="w1ZuG4VnMwLmpBEjpqo3t35vmewO2OHO"></script>
    <script type="text/javascript" src="https://www.godrejindustries.com/public/js/owl.carousel.min.js"
        nonce="w1ZuG4VnMwLmpBEjpqo3t35vmewO2OHO"></script>
    <script type="text/javascript" src="https://www.godrejindustries.com/public/js/wow.min.js"
        nonce="w1ZuG4VnMwLmpBEjpqo3t35vmewO2OHO"></script>
    <script type="text/javascript" src="https://www.godrejindustries.com/public/js/jquery.visible.min.js"
        nonce="w1ZuG4VnMwLmpBEjpqo3t35vmewO2OHO"></script>

    <script type="text/javascript" src="https://www.godrejindustries.com/public/js/common.js?v=24.01.2025"
        nonce="w1ZuG4VnMwLmpBEjpqo3t35vmewO2OHO"></script>
    <script type="text/javascript" src="https://www.godrejindustries.com/public/js/youtube.js"
        nonce="w1ZuG4VnMwLmpBEjpqo3t35vmewO2OHO"></script>





    @stack('scripts')

</body>

</html>
