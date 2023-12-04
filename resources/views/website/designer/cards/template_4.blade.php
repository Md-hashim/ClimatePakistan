<!DOCTYPE html>
<html lang="en">
<head>
    <title> Card Preview- WETDAP</title>
    {{--    @include("partials.web_styles")--}}
    <style>
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/raleway/v29/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrQ.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 700;
            src: url(https://fonts.gstatic.com/s/raleway/v29/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVs9pbCIPrQ.ttf) format('truetype');
        }
        .business-card {
            width: 390px;
            height: 220px;
            display: grid;
            overflow: hidden;
            position: relative;
            line-height: 1.6;
            font-size: 1.5vmin;
            /*width: 100vmin;*/
            /*height: 60vmin;*/
            padding: 7vmin;
            border-radius: 6px;
            box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.4);
            margin-left: 37%;
        }
        .content {
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr 1fr;
            font-family: "Raleway", sans-serif;
            color: #58242a;
        }
        .top {
            display: grid;
            grid-column: 0.33333333;
            grid-row: 1;
            align-content: start;
            grid-gap: 1.5vmin;
            animation: inLeft;
            animation-duration: 1s;
        }
        .name {
            font-size: 2em;
            font-weight: 300;
            line-height: 1;
        }
        .profession {
            color: #732d35;
            text-transform: uppercase;
            font-size: 1em;
            font-weight: 300;
        }
        .bottom {
            display: grid;
            grid-column: 0.33333333;
            grid-row: 3;
            grid-template-columns: 1fr 1fr 1fr;
            align-content: end;
        }
        .bottom .left {
            font-weight: 700;
            font-size: 0.9em;
            grid-column: 1;
            animation: inLeft;
            animation-duration: 1s;
        }
        .bottom .right {
            grid-column: 3;
            align-self: end;
            animation: inRight;
            animation-duration: 1s;
        }
        .website {
            color: #732d35;
            font-weight: 400;
        }
        .location {
            white-space: nowrap;
            text-align: right;
            color: #ee473b;
            text-transform: uppercase;
            font-size: 0.9em;
        }
        .background {
            z-index: 1;
            background-color: #ffffff;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }
        .slice {
            top: -59vmin;
            position: absolute;
            width: 50vmin;
            height: 110vmin;
            background: #ef473a;
            background: -webkit-linear-gradient(to right, #ef473a, #cb2d3e);
            background: linear-gradient(to right, #ef473a, #cb2d3e);
            transform: rotate(38deg);
            animation: inRotate;
            animation-duration: 1s;
        }
        @keyframes inRotate {
            0% {
                transform: translateX(-100vmin) rotate(15deg);
            }
            100% {
                transform: translateX(0) rotate(38deg);
            }
        }
        @keyframes inLeft {
            0% {
                transform: translateX(-100vmin);
            }
            100% {
                transform: translateX(0);
            }
        }
        @keyframes inRight {
            0% {
                transform: translateX(100vmin);
            }
            100% {
                transform: translateX(0);
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

    </style>
</head>
<body>
{{--@include("partials.web_header")--}}
<div class="row">
    <div class="row text-center">
        <h2 class="text-center" style="text-align: center; color:black">Card Preview</h2>
    </div>
    <div id="image" class="col-lg-6">
        <div class='col-lg-6 business-card'>
            <div class='content'>
                <div class='top'>
                    <div class='name' style=" color:white">{{ $userData["name"] }}</div>
                    <div class='profession' style=" color:white">{{ $userData["tagline"] ?? "" }}</div>
                </div>
                <div class='bottom'>
                    <div class='left'>
                        <div class='email' style=" color:white" >{{ $userData["email"] }}</div>
                        <div class='phone' style=" color:white">{{ $userData["contact_number"] }}</div>
                        <div class='website' style=" color:white">{{ $userData["website"] ?? "" }}</div>
                    </div>
                    <div class='right'>
                        <div class='location' style=" color:black;margin-top: 60px;">{{ $userData["address"] }}</div>
                    </div>
                </div>
            </div>



            <div class='background'>
                <div class='slice'></div>
            </div>
        </div>

        <div class='col-lg-6 business-card text-center' style="margin-top: 20px;    background: linear-gradient(to right, #ef473a, #cb2d3e);" >
            <div class='content '>
                <div class='top ' style="margin-top: 50px">
                    <h1 class='' style="text-align: center; margin-top: 15px; color:white">{{ $userData["name"] }}</h1>
                    <h6  style="text-align: center; font-size: 16px; margin-top: 0px; color:white">{{ $userData["tagline"] ?? "" }}</h6>
                </div>
            </div>




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
