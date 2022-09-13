@extends('layouts.app')
@section('content')
    <!-- contact-area  -->
    <div class="contact-area padding-top-180 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title startup padding-bottom-25">
                        <form name="search_form" onsubmit="event.preventDefault(); search();" class="contact-page-form"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="cnic"><span class="text-danger">NTN</span> STATUS FINDER</label>
                                        <input type="text" id="cnic" name="cnic" placeholder="0000-0000000-0"
                                            class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" id='submit' value="Submit" class="submit-btn style-01">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="contact-img bg-image-02"></div>
                </div>
                <div class="col-lg-7">
                    <div class="spinner" id='loader'>
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                    <div id="result">

                    </div>
                    <div class="text-danger error" id="search-error">
                    </div>
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
@section('script')
    <script>
        const cnic = document.getElementById("cnic");
        let result = document.getElementById("result");
        let searchError = document.getElementById("search-error");

        var loader = document.getElementById("loader");
        var submit = document.getElementById("submit");

        loader.style.display = "none";
        submit.style.display = "block";

        function search() {

            if (loader.style.display === "none") {
                loader.style.display = "block";
            }

            if (submit.style.display === "block") {
                submit.style.display = "none";
            }

            result.innerHTML = '';
            searchError.innerHTML = '';
            const xhttp = new XMLHttpRequest();
            const respose = null;
            xhttp.onload = function() {

                let responseText = JSON.parse(this.responseText);

                if (loader.style.display === "block") {
                    loader.style.display = "none";
                }

                if (submit.style.display === "none") {
                    submit.style.display = "block";
                }

                if (responseText.code === 0) {
                    searchError.innerHTML += `<span>${responseText.message}</span>`
                    return;
                }

                let main = responseText.response[0];

                result.innerHTML += ` 
                <div class="card">
                <div class="card-body">
    <h5 class="card-title">Your NTN Details</h5>
    <table class="table">
        <tbody class="row mx-0">
            <tr class="col-md-6">
                <td class="border-0"><strong class="small">Registration No</strong> <span class="d-block"
                        id="registrationNo">${main.registrationNo}</span></td>
            </tr>
            <tr class="col-md-6">
                <td class="border-0"><strong class="small">Reference No</strong> <span class="d-block"
                        id="referenceNo">${main.referenceNo}</span></td>
            </tr>
            <tr class="col-md-6">
                <td class="border-0"><strong class="small">STRN</strong> <span class="d-block" id="strn">${main.strn}</span>
                </td>
            </tr>
            <tr class="col-md-6">
                <td class="border-0"><strong class="small">Name</strong> <span class="d-block" id="name">${main.name}</span></td>
            </tr>
            <tr class="col-md-6">
                <td class="border-0"><strong class="small">Category</strong> <span class="d-block"
                        id="category">${main.category}</span></td>
            </tr>
            <tr class="col-md-6">
                <td class="border-0"><strong class="small">Registered On</strong> <span class="d-block"
                        id="registeredOn">${main.registeredOn}</span></td>
            </tr>
            <tr class="col-md-6">
                <td class="border-0"><strong class="small">Tax Office</strong> <span class="d-block" id="taxOffice">${main.taxOffice}</span></td>
            </tr>
            <tr class="col-md-6">
                <td class="border-0"><strong class="small">Registration Status</strong> <span class="d-block"
                        id="registrationStatus">${main.registrationStatus}</span></td>
            </tr>
            <tr class="col-md-12">
                <td class="border-0"><strong class="small">Address</strong> <span class="d-block" id="address">${main.address}</span></td>
            </tr>
        </tbody>
    </table>
</div> </div>`;
            }
            xhttp.open("GET",
                "https://193b473c-06e8-4371-ae7c-89a318953d11-prod.e1-us-east-azure.choreoapis.dev/deqi/ats-ntn/1.0.0/?param=" +
                cnic.value);
            xhttp.send();
        }
    </script>
@endsection
