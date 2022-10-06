@extends('layouts.app', ['title' => $post->gen_seo_title()])

@section('blog-custom-css')
    <link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- contact-area  -->
    <div class="contact-area padding-top-180 padding-bottom-120">

        @if (config('binshopsblog.reading_progress_bar'))
            <div id="scrollbar">
                <div id="scrollbar-bg"></div>
            </div>
        @endif
        <div class="container">
            <div class='row'>
                <div class='col-sm-12 col-md-12 col-lg-12'>

                    @include('binshopsblog::partials.show_errors')
                    @include('binshopsblog::partials.full_post_details')


                    @if (config('binshopsblog.comments.type_of_comments_to_show', 'built_in') !== 'disabled')
                        <div class="" id='maincommentscontainer'>
                            <h2 class='text-center' id='binshopsblogcomments'>Comments</h2>
                            @include('binshopsblog::partials.show_comments')
                        </div>
                    @else
                        {{-- Comments are disabled --}}
                    @endif


                </div>
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

        .small {
            font-size: 95%;
            font-weight: 700;
        }

        .error {
            font-size: 30px;
            font-weight: 500;
            text-align-last: center;
        }

        .spinner {
            width: 40px;
            height: 40px;

            position: relative;
            margin: 100px auto;
        }

        .double-bounce1,
        .double-bounce2 {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #ff6661;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;

            -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
            animation: sk-bounce 2.0s infinite ease-in-out;
        }

        .double-bounce2 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        @-webkit-keyframes sk-bounce {

            0%,
            100% {
                -webkit-transform: scale(0.0)
            }

            50% {
                -webkit-transform: scale(1.0)
            }
        }

        @keyframes sk-bounce {

            0%,
            100% {
                transform: scale(0.0);
                -webkit-transform: scale(0.0);
            }

            50% {
                transform: scale(1.0);
                -webkit-transform: scale(1.0);
            }
        }
    </style>
@endsection

@section('blog-custom-js')
    <script src="{{ asset('binshops-blog.js') }}"></script>
@endsection
