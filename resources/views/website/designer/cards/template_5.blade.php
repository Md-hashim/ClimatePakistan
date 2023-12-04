<!DOCTYPE html>
<html lang="en">
<head>
    <title> Card Preview- WETDAP</title>
    {{--    @include("partials.web_styles")--}}
    <style>
        .card {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            display: grid;
            font-family: 'Trebuchet MS', sans-serif;
            height: 200px;
            margin: 20px auto;
            width: 350px;
        }
        .front {
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(4, 1fr);
        }
        .front .blue {
            background-color: #4cc9c8;
            grid-column: 8 / span 5;
            grid-row: 1 / span 4;
        }
        .front .yellow {
            background-color: #f1ef1c;
            grid-column: 1 / span 7;
            grid-row: 1 / span 4;
        }
        .front .pink {
            background-color: #fa001a;
            -webkit-clip-path: polygon(0% 0%, 100% 0%, 0% 100%);
            clip-path: polygon(0% 0%, 100% 0%, 0% 100%);
            grid-row: 1 / span 3;
            grid-column: 1 / span 11;
            position: relative;
            z-index: 2;
        }
        .front .dots {
            background: radial-gradient(#fa001a 20%, transparent 19%), radial-gradient(#fa001a 20%, transparent 19%), transparent;
            background-size: 6px 6px;
            background-position: 0 0, 3px 3px;
            grid-column: 1 / span 12;
            grid-row: 3 / span 2;
            margin: 0 0 15px 20px;
            z-index: 1;
        }
        .front .personal-intro {
            background: black;
            color: white;
            display: flex;
            flex-direction: column;
            grid-column: 4 / span 6;
            grid-row: 2 / span 2;
            justify-content: center;
            text-align: center;
            z-index: 3;
        }
        .front .personal-intro p {
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .front .personal-intro p:first-of-type {
            font-size: 18px;
        }
        .front .personal-intro p:last-of-type {
            font-size: 8px;
            margin-top: 1px;
        }
        .back {
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(12, 1fr);
        }
        .back .yellow {
            background-color: #f1ef1c;
            grid-column: 1 / span 9;
            grid-row: 1 / span 3;
        }
        .back .top.dots {
            background: radial-gradient(#4cc9c8 20%, transparent 19%), radial-gradient(#4cc9c8 20%, transparent 19%), transparent;
            background-size: 6px 6px;
            background-position: 0 0, 3px 3px;
            grid-column: 8 / span 6;
            grid-row: 2 / span 3;
        }
        .back .personal-info {
            grid-column: 2 / span 6;
            grid-row: 1 / span 6;
        }
        .back .personal-info p {
            font-size: 12px;
        }
        .back .personal-info p:first-of-type {
            font-size: 18px;
            font-weight: bold;
            /*letter-spacing: 1px;*/
            text-transform: uppercase;
        }
        .back .personal-info p:nth-of-type(1) {
            font-size: 14px;
            /*margin-bottom: 13px;*/
        }
        .back .bottom.dots {
            background: radial-gradient(#4cc9c8 20%, transparent 19%), radial-gradient(#4cc9c8 20%, transparent 19%), transparent;
            background-size: 6px 6px;
            background-position: 0 0, 3px 3px;
            grid-column: 1 / span 8;
            grid-row: 11 / span 2;
            z-index: 2;
        }
        .back .pink {
            background-color: #fa001a;
            grid-column: 8 / span 5;
            grid-row: 10 / span 3;
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
        }

        .button:hover {
            background-color: #0056b3; /* Change background color on hover */
        }

    </style>
</head>
<body>
{{--@include("partials.web_header")--}}
<div class="row text-center">
    <h2 class="text-center" style="text-align: center; color:black">Card Preview</h2>
</div>
<div id="image">
    <div class="card front">
        <div class="blue"></div>
        <div class="yellow"></div>
        <div class="pink"></div>
        <div class="dots"></div>
        <div class="personal-intro">
            <p>{{ $userData["name"] }}</p>
            <p>{{ $userData["tagline"] ?? "" }}</p>
        </div>
    </div>
    <div class="card back">
        <div class="yellow"></div>
        <div class="top dots"></div>
        <div class="personal-info">
            <p>{{ $userData["name"] }}</p>
            <p>{{ $userData["tagline"] ?? "" }}</p>
            <p>{{ $userData["address"] }}</p>
            <p>{{ $userData["contact_number"] }}</p>
            <p>{{ $userData["website"] ?? "" }}</p>
        </div>
        <div class="bottom dots"></div>
        <div class="pink"></div>
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
