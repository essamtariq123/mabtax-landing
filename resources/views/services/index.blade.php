@extends('layouts.app')
@section('content')
    <!-- contact-area  -->
    <div class="contact-area padding-top-180 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title startup padding-bottom-25">
                        <h4 class="title">{{$services->title}}</h4>
                        <p>Registering a business can be a quite stressful. Worry not! Get expert assistance on how and
                            which business structure to select and start your entrepreneurial journey with a bang!</p>
                    </div>
                    <div class="contact-img bg-image-02"></div>
                </div>
            </div>
            @foreach($services->sub_services as $service)
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="mabtax-card">
                        <div class="mabtax-row two-column">
                            <div class="left-column">
                                <div class="main__title">
                                    <h4>{{ $service->title }}</h4>
                                </div>
                            </div>
                            <div class="right-column">
                                <div class="title__price">
                                    <h4>Rs. {{ $service->price }}</h4>
                                </div>
                                @isset($service->other_price)
                                <div class="title__price">
                                    <h4>Rs. {{ $service->other_price }}</h4>
                                </div>
                                @endisset
                            </div>
                        </div>
                
                        @isset($service->time)
                        <div class="mabtax-row two-column">
                            <div class="left-column">
                                <div class="time__title">
                                    <p>Completion Time:</p>
                                </div>
                            </div>
                            <div class="right-column">
                                <div class="time-period">
                                    <p>{{ $service->time }}</p>
                                </div>
                            </div>
                        </div>
                        @endisset
                
                        <div class="mabtax-row">
                            <div class="check-list">
                                <h3>Requirements:</h3>
                                <ul>
                                    @foreach($service->requirements as $require)
                                    <li>✓ {{ $require->title}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="mabtax-row">
                            <div class="ctas">
                                <div class="btn-wrapper">
                                    <a href="#" class="boxed-btn btn-business">Get In Touch</a>
                                    <a style="width: 44px; padding:0" href="#" class="boxed-btn btn-business"><img src="{{ asset('img/whatsapp.png') }}" alt=""></a>
                                </div>
                                {{-- <a class="request-btn" href="#">Request to call</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
        *{
			padding: 0;
			margin:0;
			box-sizing: border-box;
		}
		.mabtax-row {
			padding: 6px 0px;
		}
		.mabtax-card{
			border:2px solid #ff6661;
			border-radius: 5px;
			padding: 20px 30px;
			width: 80%;
		}
		.two-column{
			display: flex;
			flex-wrap: wrap;
		}
		.two-column .left-column{
			width:50%;
			flex-basis: 50%;
		}
		.two-column .right-column{
			width:50%;
			flex-basis: 50%;
		}
		.title__price,
		.time-period{
			text-align: right;
		}
		.check-list h3{
			padding-bottom: 10px;
		}
		.check-list ul{
			list-style: none;
		}
		.ctas{
			text-align: right;
		}
		.ctas a{
			text-decoration: none;
			padding: 10px 20px;
			color:#000;
		}
    </style>
@endsection
@section('script')
    <script></script>
@endsection
