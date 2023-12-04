<!DOCTYPE html>
<html lang="en">
<head>
    <title> Card Preview- WETDAP</title>
    {{--    @include("partials.web_styles")--}}
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Brochure Styling */
        .brochure {
            display: flex;
            min-height: 800px;
            max-width: 1100px;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .brochure-image {
            flex: 1;
            overflow: hidden;
        }

        .brochure-image img {
            height: 100%; /* Make image full height */
            width: auto;
            object-fit: cover; /* Cover the full area without stretching */
        }

        .brochure-content {
            flex: 1;
            background: linear-gradient(90deg, rgba(69,204,137,1) 29%, rgba(226,208,4,1) 100%);
            position: relative;
            padding: 40px;
            overflow: hidden;

        }

        /* Responsive Decorative Dot Pattern for Top and Bottom */
        .brochure-content::before,
        .brochure-content::after {
            content: '';
            position: absolute;
            right: 40px; /* Space from right edge */
            width: 60%; /* Width of the dot pattern, adjust as needed */
            height: 80px; /* Height to accommodate four lines of dots */
            background-image: radial-gradient(circle, #000 1px, transparent 1px);
            background-size: 10px 10px;
            z-index: 10;
        }

        /* Dot pattern adjustments */
        .brochure-content::before {
            content: '';
            position: absolute;
            top: 40px; /* Top left */
            left: 40px;
            width: 80px; /* Adjusted width for the dot pattern */
            height: 80px; /* Height to accommodate four lines of dots */
            background-image: radial-gradient(circle, #fff 1px, transparent 1px);
            background-size: 10px 10px;
        }

        .brochure-content::after {
            content: '';
            position: absolute;
            bottom: 10px; /* Bottom right */
            right: 10px;
            width: 30%; /* Adjusted width for the dot pattern */
            height: 80px; /* Height to accommodate four lines of dots */
            background-image: radial-gradient(circle, #fff 1px, transparent 1px);
            background-size: 10px 10px;
        }

        /* Text Styles */
        .centered-title {
            display: flex;
            justify-content: center;
            align-items: center;

            text-align: center;

            border-radius: 50px;
        }
        .business-name {
            color: #fff;
            font-size: 2.5em;
            /*margin-bottom: 0.5em;*/
            justify-content: center;
            font-family: "Arial", sans-serif;
        }

        .owner-tagline {
            color: #fff;
            font-size: 1.5em;
            margin-bottom: 1em;
            margin-top: 1em;
            font-family: "Arial", sans-serif;
        }

        .description {
            font-size: 1.2em;
            line-height: 1.8;
            color: #fff;
            margin-bottom: 1em;
            font-family: "Arial", sans-serif;
        }
        .owner-email {
            font-size: 1.2em;
            line-height: 1.8;
            color: #fff;
            margin-bottom: 1em;
            font-family: "Arial", sans-serif;
        }
        .owner-contact {
            font-size: 1.2em;
            line-height: 1.8;
            color: #fff;
            margin-bottom: 1em;
            font-family: "Arial", sans-serif;
        }
        .owner-address{
            font-size: 1.2em;
            line-height: 1.8;
            color: #fff;
            margin-bottom: 1em;
            font-family: "Arial", sans-serif;
        }
        .owner-website{
            font-size: 1.2em;
            line-height: 1.8;
            color: #fff;
            margin-bottom: 1em;
            font-family: "Arial", sans-serif;
        }

        /* Decorative Shape */
        .brochure-content:before {
            content: '';
            position: absolute;
            top: 0;
            left: -30px;
            width: 60px;
            height: 100%;
            background: linear-gradient(90deg, rgba(69,204,137,1) 100%, rgba(226,208,4,1) 100%);
            border-radius: 0 5px 5px 0;
        }

        /* Responsiveness */
        @media screen and (max-width: 768px) {
            .brochure {
                flex-direction: column;
            }

            .brochure-image, .brochure-content {
                width: 100%;
            }
            .brochure-cover
            {
                flex-direction: column;
            }

            .brochure-content::before,
            .brochure-content::after {
                /*width: 40px; !* Smaller pattern on mobile *!*/
                /*height: 40px; !* Smaller pattern on mobile *!*/
                /*background-size: 5px 5px;*/
                top: 20px; /* Adjust for mobile */
                bottom: 0px; /* Adjust for mobile */
                /*left: 20px; !* Adjust for mobile *!*/
                right:0px; /* Adjust for mobile */

            }

            .brochure-content {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        }

        .col-lg-2 {
            width: 100%; /* Ensure the column takes up the full width of its container */
            display: flex;
            justify-content: center; /* Center horizontally within the container */
            align-items: center; /* Center vertically within the container */
        }

        .button {
            background-color: #007BFF; /* Button background color */
            color: #fff; /* Text color */
            padding: 10px 20px; /* Padding around the text */
            border: none; /* Remove the default button border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Add a pointer cursor on hover */
            margin-top: 20px;
        }

        .button:hover {
            background-color: #0056b3; /* Change background color on hover */
        }

        .brochure-cover {
            position: relative;
            /*width: 100%; !* Set the width of your brochure cover *!*/
            /*height: 100%; !* Set the height of your brochure cover *!*/
            background: #2d3436; /* Base color */
            flex: 1;
            overflow: hidden;
        }

        .triangle {
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
        }

        .t1 {
            border-width: 340.5px 235.5px 0 230.5px;
            border-color: #55efc4 transparent transparent transparent;
            top: 0;
            left: 0;

        }

        .t2 {
            border-width: 415.5px 0 185.5px 283px;
            border-color: transparent transparent #00b894 #00b894;
            top: 185.5px;
            left: 0;
        }

        .t3 {
            border-width: 0 160.5px 900.5px 400.5px;
            border-color: transparent #5d5f71 #5d5f71 transparent;
            top: 0;
            right: 0;
        }
        .t4 {
            border-width:375px 600px 60px 510px;
            border-color: #f06d62 transparent transparent transparent;
            bottom: 0;
            left: 0;

        }

        /* ... additional triangles as needed */

        .cover-content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            text-align: left;
        }

        .cover-content h1, .cover-content p, .cover-content .ipsum-logo {
            margin: 0;
            padding: 0;
            color: #fff; /* Adjust as needed */
        }

        .ipsum-logo {
            font-weight: bold;
            position: absolute;
            bottom: 10px;
            left: 20px;
        }

        /* Responsive adjustments if needed */
        @media (max-width: 768px) {
            /* Adjust sizes and positions for mobile */
        }


    </style>
</head>
<body>
{{--@include("partials.web_header")--}}
<div id="image">
    <div class="brochure">
        <div class="brochure-image" role="img" aria-label="Business related image">
          <img src="{{$imageData}}" style="height: 100%;width: 100%" alt="user">
        </div>
{{--        <div class="brochure-cover">--}}
{{--            <div class="triangle t1"></div>--}}
{{--            <div class="triangle t2"></div>--}}
{{--            <div class="triangle t3"></div>--}}
{{--            <div class="triangle t4"></div>--}}
{{--            <!-- ... more triangles as needed -->--}}
{{--            <div class="cover-content">--}}
{{--                <h1>Brochure Cover</h1>--}}
{{--                <p class="tagline">Cras Euismod Egestas</p>--}}
{{--                <p>Inceptos Tortor Nibh Lorem Mollis Tortor</p>--}}
{{--                <p class="ipsum-logo">IPSUM CO</p>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="brochure-content">
            <div class="centered-title">
                <h1 class="business-name">{{ $userData["name"] }}</h1>
            </div>
            <h2 class="owner-tagline">{{ $userData["tagline"] }}</h2>
            <h2 class="owner-tagline">{{ $userData["title"] }}</h2>
            <p class="description">{{ $userData["description"] }}</p>
            <h2 class="owner-email">{{ $userData["email"] }}</h2>
            <h2 class="owner-email">{{ $userData["website"] }}</h2>
            <h2 class="owner-contact">{{ $userData["contact_number"] }}</h2>
            <h2 class="owner-address">{{ $userData["address"] }}</h2>
            <h2 class="owner-website"> {{ $userData["email"] }}</h2>
            <!-- Additional content here -->
        </div>
    </div>
</div>

<div class="col-lg-2">
    <div class="col-sm-12 wow fadeInLeft heading-space mt-1 text-center">
        <button type="submit" class="button" id="downloadBtn">Download</button>
    </div>
</div>


{{--@include("partials.web_footer")--}}
{{--@include("partials.web_scripts")--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
<script>
    document.getElementById('downloadBtn').addEventListener('click', function() {
        const node = document.getElementById('image');

        domtoimage.toPng(node)
            .then(function (dataUrl) {
                const link = document.createElement('a');
                link.href = dataUrl;
                link.download = 'Business Card.png';
                link.click();
            })
            .catch(function (error) {
                console.error('Oops, something went wrong!', error);
            });
    });
</script>
</body>

</html>
