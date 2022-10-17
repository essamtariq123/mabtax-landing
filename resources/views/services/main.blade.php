@extends('layouts.app')
@section('content')
    <!-- contact-area  -->
    <div class="contact-area padding-top-180 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title startup padding-bottom-25">
                        <h4 class="title">Services</h4>
                        <p>Registering a business can be a quite stressful. Worry not! Get expert assistance on how and
                            which business structure to select and start your entrepreneurial journey with a bang!</p>
                    </div>
                    <div class="contact-img bg-image-02"></div>
                </div>
            </div>
            <div class="row mb-4">
                @foreach ($services as $service)
                    @if ($loop->iteration <= 2)
                        <div class="col-lg-6">
                            <div class="mabtax-card">
                                <div class="mabtax-row two-column">
                                    <div class="left-column">
                                        <div class="main__title">
                                            <h3>{{ $service->title }}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="mabtax-row">
                                    <div class="check-list">
                                        <h4>{{ $service->description }}</h3>
                                    </div>
                                </div>
                                <div class="mabtax-row">
                                    <div class="ctas">
                                        <div class="btn-wrapper">
                                            <a href="services/{{ $service->slug }}" class="boxed-btn btn-business">Show more</a>
                                        </div>
                                        {{-- <a class="request-btn" href="#">Request to call</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($loop->iteration > 2)
                            <div class="col-lg-6">
                                <div class="mabtax-card">
                                    <div class="mabtax-row two-column">
                                        <div class="left-column">
                                            <div class="main__title">
                                                <h3>{{ $service->title }}</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mabtax-row">
                                        <div class="check-list">
                                            <h4>{{ $service->description }}</h3>
                                        </div>
                                    </div>
                                    <div class="mabtax-row">
                                        <div class="ctas">
                                            <div class="btn-wrapper">
                                                <a href="services/{{ $service->slug }}" class="boxed-btn btn-business">Show more</a>
                                            </div>
                                            {{-- <a class="request-btn" href="#">Request to call</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <style>
        .padding-top-180 {
            padding-top: 180px
        }

        .salary-input {
            width: 100%
        }

        .salary-input input {
            font-size: 2rem;
            font-weight: 500;
            padding: 15px;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .mabtax-row {
            padding: 6px 0px;
        }

        .mabtax-card {
            border: 2px solid #ff6661;
            border-radius: 5px;
            padding: 20px 30px;
            width: 80%;
            margin:25px
        }

        .two-column {
            display: flex;
            flex-wrap: wrap;
        }

        .two-column .left-column {
            width: 100%;
            flex-basis: 100%;
        }

        .two-column .right-column {
            width: 50%;
            flex-basis: 50%;
        }

        .title__price,
        .time-period {
            text-align: right;
        }

        .check-list h4 {
            padding-bottom: 10px;
            color: gray
        }

        .check-list ul {
            list-style: none;
        }

        .ctas {
            text-align: right;
        }

        .ctas a {
            text-decoration: none;
            padding: 10px 20px;
            color: #000;
        }

        .boxed-btn {
            width: 100%
        }
    </style>
@endsection
