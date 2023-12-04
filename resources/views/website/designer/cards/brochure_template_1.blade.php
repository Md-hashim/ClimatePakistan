<!DOCTYPE html>
<html lang="en">
<head>
    <title> Card Preview- WETDAP</title>
    {{--    @include("partials.web_styles")--}}
    <style>

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

        .brochure {
            position: relative;
            width: 1150px;
            height: 866px;
            max-width: 100%;
            overflow: hidden;
            display: flex;
            left: 20%;
        }

        .brochure img {
            width: 100%;
            height: auto; /* Maintain the aspect ratio */
        }

        .name {
            position: absolute;color: #000;top: 32%; left: 67.5%;font-size: 30px;font-weight: bold
        }
        .tagline{position: absolute;color: #fff;top: 20%; left: 1.5%;font-size: 24px;width: 30%;height: auto;font-weight: bolder}
        .about{position: absolute;color: #fff;top: 50%; left: 1.5%;font-size: 22px;width: 30%;height: auto}
        .address{position: absolute;color: #fff;top:65%; left: 39.5%;font-size: 20px;}
        .email{position: absolute;color: #fff;top:69%; left: 39.5%;font-size: 20px;}
        .website{position: absolute;color: #fff;top:73%; left: 39.5%;font-size: 20px;}
        .contact_number{position: absolute;color: #fff;top:77%; left: 39.5%;font-size: 20px;}

        @media (max-width: 768px) {
            .brochure {
                height: auto; /* Adjust height based on the width */
            }

            .name {
                font-size: smaller; /* Example to make the text smaller */
            }
            .tagline
            {
                font-size: smaller;
            }
            .about
            {
                font-size: smaller;
            }
            .address
            {
                font-size: smaller;
            }
            .email
            {
                font-size: smaller;
            }
            .website
            {
                font-size: smaller;
            }
            .contact_number
            {
                font-size: smaller;
            }
        }
        @media (max-width: 1290px) {
            .brochure {
                height: auto; /* Adjust height based on the width */
            }

            .name {
                font-size: medium; /* Example to make the text smaller */
                left: 70%;
            }
            .tagline
            {
                font-size: smaller;
            }
            .about
            {
                font-size: smaller;
            }
            .address
            {
                font-size: smaller;
            }
            .email
            {
                font-size: smaller;
            }
            .website
            {
                font-size: smaller;
            }
            .contact_number
            {
                font-size: smaller;
            }
        }



    </style>
</head>
<body>
{{--@include("partials.web_header")--}}
<div id="image">


    <div class="brochure">
        <img src="{{ 'media/cardDesigns/brochure_2.png' }}" alt="Brochure Image">
        <span class="name">{{ $userData["title"] }}</span>
        <span class="tagline">{{ $userData["tagline"] }}</span>
        <span class="about">{{ $userData["description"] }}</span>
        <span class="address">{{ $userData["address"] }}</span>
        <span class="email">{{ $userData["email"] }}</span>
        <span class="website">{{ $userData["website"] }}</span>
        <span class="contact_number">{{ $userData["contact_number"] }}</span>

{{--        <div class="overlay-info" style="top: 10%; left: 20%;">Business Name</div>--}}
{{--        <div class="overlay-info" style="top: 20%; left: 25%;">+1 (555) 123-4567</div>--}}
{{--        <div class="overlay-info" style="top: 30%; left: 30%;">42 Apex Plaza, Suite 100</div>--}}
        <!-- More overlay info as needed -->
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
