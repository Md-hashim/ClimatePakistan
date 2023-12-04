@extends('layouts.wetdp_master')

@section('title', 'Card Form')

@section('main_content')

    <!-- Custom CSS to style the card and center it -->
    <style>
        @media (max-width: 768px) {
            .card-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh; /* taking the full viewport height */
            }

            .card-image {
                width: 336px; /* standard width for business card */
                height: 192px; /* standard height for business card */
                position: relative; /* so we can position name relative to it */
            }

            .user-name {
                /*position: absolute;*/
                top: {{ $card['name']['top'] }}px;
                left: {{ $card['name']['left'] }}px;
                color: {{ $card['name']['color'] }};
                font-size: 30px; /* adjust if needed */
            }

            .user-email {
                /*position: absolute;*/
                top: {{ $card['email']['top'] }}px;
                left: {{ $card['email']['left'] }}px;
                color: {{ $card['email']['color'] }};
                font-size: 25px; /* adjust if needed */
            }

            .user-contact {
                /*position: absolute;*/
                top: {{ $card['contact']['top'] }}px;
                left: {{ $card['contact']['left'] }}px;
                color: {{ $card['contact']['color'] }};
                font-size: 25px; /* adjust if needed */
            }

            .user-address {
                /*position: absolute;*/
                top: {{ $card['address']['top'] }}px;
                left: {{ $card['address']['left'] }}px;
                color: {{ $card['address']['color'] }};
                font-size: 25px; /* adjust if needed */
            }

            .image-container {
                /*position: absolute;*/
                width: {{ $card['imageContainer']['width'] }}px;
                height: {{ $card['imageContainer']['height'] }}px;
                top: {{ $card['image']['top'] }}px;
                left: {{ $card['image']['left'] }}px;
                overflow: hidden;
                border-radius: 50%; /* Makes the container circular */
            }

            .user-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }
        }
        img {
            max-width: 100%;
            height: auto;
        }

    </style>


    <section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth subpage-banner" style="background:url('{{asset('static/media/website-images/bg-1.jpg')}}')">
        <div class="overlay overlay-dark opacity-7"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="page-titles whitecolor text-center padding_top padding_bottom">
                        <h2 class="font-light">
                           Your Business Card
                        </h2>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="container-fluid mt-16" style="margin-top: 50px;margin-bottom: 50px">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8" id="image">
                <div class="item">
                    <div class="card-container" style="position: relative; width: 100%; height: auto;">
                        <img src="{{ asset($card['backgroundImage']) }}" width="100%" height="100%" alt="Card Background" style="display: block;">

                        <span class="user-name" style="position: absolute;">
                        {{ $userData['name'] }}
                    </span>
                        <span class="user-contact" style="position: absolute;">
                        {{ $userData['contact_number'] }}
                    </span>
                        <span class="user-email" style="position: absolute;">
                        {{ $userData['email'] }}
                    </span>
                        <span class="user-address" style="position: absolute; ">
                        {{ $userData['address'] }}
                    </span>
                        <span class="image-container" style="position: absolute;">
                        @if($imageData)
                                <img class="user-image" src="{{ $imageData }}" alt="user-image" />
                            @endif
                    </span>
                    </div>
                </div>

            </div>

            <div class="col-lg-2">
                <div class="col-sm-12 wow fadeInLeft heading-space mt-1">
                    <button type="submit" class="button gradient-btn" id="downloadBtn">Download</button>
                </div>
            </div>
        </div>
    </div>






                        <!--Item 1-->




@endsection

@section('extra_scripts')
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


@endsection
