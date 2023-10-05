<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js",
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-PLG6CGJ");
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-param" content="_csrf-frontend" />
    <meta name="csrf-token"
        content="yg1oTrIsJyptoErWULFmL_n944ZjoLszG1TbKI_oUneyY1oE6mgeUADnA5ATwQdsysmJ3xfp8GdTIpFjwq4HLQ==" />
    <title>
        3D Homes Limited
    </title>

    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="manifest" href="{{ asset('assets/img/manifest.json') }}" />
    <link rel="mask-icon" href="{{ asset('assets/img/safari-pinned-tab.svg') }}" color="#8b8232" />
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <meta name="msapplication-config" content="{{ asset('assets/img/browserconfig.xml') }}" />
    <meta name="theme-color" content="#ffffff" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="facebook-domain-verification" content="eawauaxf63dkgt76v5oramol1gma4r" />

    <meta name="keywords" content="" />
    <meta name="description"
        content="Shanta Holdings Ltd. aspires to weave an unprecedented experience of fine living cocooned in comfort for you. It’s the statement of prestige and elegant Architecture that sets us apart." />
    <!-- <link href="https://shantaholdings.com/" rel="canonical"> -->
    <link href="{{ asset('assets/css/lightbox/ekko-lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/home-map/map.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="preconnect" />
    <link href="{{ asset('assets/css/bundle.min.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('assets/css/layerslider.min.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('assets/css/yt-lazyload.css') }}" rel="stylesheet" media="all" />
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="application/ld+json">
        {
            "@context": "http://www.schema.org",
            "@type": "RealEstateAgent",
            "name": "Shanta Holdings",
            "url": "https://www.shantaholdings.com/",
            "logo": "https://www.shantaholdings.com/admin/settings_images/logo-1488715861.svg",
            "image": "https://www.shantaholdings.com/admin/settings_images/logo-1488715861.svg",
            "description": "A powerful portfolio of the country’s most distinctive and selective developments, with an excellent reputation in the Real Estate market, and enviable relationships that give our clients exclusive access to the ultimate in luxury apartments and exquisite commercial spaces, all in prime locations of Dhaka city",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Shanta Western Tower, Level 10 186, Bir Uttam Mir Shawkat Sharak Tejgaon I/A",
                "addressLocality": "Dhaka",
                "postalCode": "1208",
                "addressCountry": "Bangladesh"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "23.77025",
                "longitude": "90.4040915"
            },
            "openingHours": "Mo, Tu, We, Th, Su 09:00-18:00",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+88 02 8878759 - 68"
            },
            "sameAs": [
                "https://www.facebook.com/shantaholdings",
                "https://www.instagram.com/shantaholdings/",
                "https://www.youtube.com/channel/UCH2kciy0CmoAiI20rU9KR7A",
                "https://www.linkedin.com/company/shanta-properties-limited/"
            ]
        }
    </script>

    <style>
        .pt40 {
            padding-top: 40px;
        }

        .mission-vission .symble-holder {
            position: relative;
            bottom: 0;
            left: 0;
            top: unset;
            bottom: 0;
        }

        .yt-lazyload {
            width: 100%;
            position: absolute !important;
            overflow: hidden;
            cursor: pointer;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            height: 98%;
            top: 7px;
            left: 0;
        }

        .yt-lazyload-playbtn {
            background-size: 50px !important;
        }

        .soldout {
            position: absolute;
            top: 30px;
            z-index: 1;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            background: #bf0707;
            padding: 8px 50px;
            font-size: 18px;
            transform: rotate(317deg);
            margin: 0;
            left: -53px;
        }
    </style>
</head>

<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
</body>

</html>
