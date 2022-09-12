@extends('layouts.app')
@section('content')
    <!-- contact-area  -->
    <div class="contact-area padding-top-180 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title startup padding-bottom-25">
                        <h4 class="title">Salary Tax Calculator</h4>
                        <p>Apart from compliance, signing up with our online tax return portal allows you to access an easy
                            to use tax return calculator that lays out all figures for you, in a comprehensible manner. Our
                            salary tax calculator is constantly updated with the latest regulations and tax rates in
                            Pakistan.</p>
                    </div>
                    <div class="contact-img bg-image-02"></div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <form class="contact-page-form d-flex">
                                <div class="form-group salary-input mr-2 mb-2">
                                    <input type="text" class="form-control" id="salary"
                                        placeholder="Enter Your Monthly Salary">
                                </div>
                            </form>

                            <table class="mt-5 table">
                                <tbody>
                                    <tr>
                                        <td class="border-bottom-0 border-top-0 pb-0 border-left-0"><span>Monthly
                                                Salary</span></td>
                                        <td class="border-bottom-0 border-top-0 pb-0 border-left border-right"><span>Monthly
                                                Tax</span></td>
                                        <td class="border-bottom-0 border-top-0 pb-0 border-right-0"><span>Salary After
                                                Tax</span></td>
                                    </tr>
                                    <tr>
                                        <td class="border-top-0 pt-0 border-left-0">
                                            <h2 class="sub-heading" id="monthlySalary">0</h2>
                                        </td>
                                        <td class="border-top-0 pt-0 border-left border-right">
                                            <h2 class="sub-heading" id="monthlyTax">0</h2>
                                        </td>
                                        <td class="border-top-0 pt-0 border-right-0">
                                            <h2 class="sub-heading" id="monthlySalaryAfterTax">0</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0 pb-0 border-left-0"><span>Yearly Salary</span></td>
                                        <td class="border-bottom-0 pb-0 border-left border-right"><span>Yearly Tax</span>
                                        </td>
                                        <td class="border-bottom-0 pb-0 border-right-0"><span>Salary After Tax</span></td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0 border-top-0 pt-0 border-left-0">
                                            <h2 class="sub-heading" id="yearlySalary">0</h2>
                                        </td>
                                        <td class="border-bottom-0 border-top-0 pt-0 border-left border-right">
                                            <h2 class="sub-heading" id="yearlyTax">0</h2>
                                        </td>
                                        <td class="border-bottom-0 border-top-0 pt-0 border-right-0">
                                            <h2 class="sub-heading" id="yearlySalaryAfterTax">0</h2>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    </style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            let input = document.getElementById("salary");
            input.addEventListener("keyup", function(event) {
                // skip for arrow keys
                if (event.which >= 37 && event.which <= 40) {
                    event.preventDefault();
                }
                var $this = $(this);
                var num = $this.val().replace(/,/gi, "");
                var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");
                // the following line has been simplified. Revision history contains original.
                $this.val(num2);

                let yearly = num * 12;
                let yearlyTax = 0;
                let monthlyTax = 0;
                let afterTax = 0;
                let yearlyAfterTax = num * 12


                if (yearly > 600000 && yearly <= 1200000) {
                    let slab = yearly - 600000
                    yearlyTax = (slab / 100) * 2.5;
                    monthlyTax = yearlyTax / 12;
                    yearlyAfterTax = yearly - yearlyTax
                    afterTax = num - monthlyTax
                }

                if (yearly > 1200000 && yearly <= 2400000) {
                    let slab = yearly - 1200000
                    yearlyTax = (slab / 100) * 12.5 + 15000;
                    monthlyTax = yearlyTax / 12;
                    yearlyAfterTax = yearly - yearlyTax
                    afterTax = num - monthlyTax
                }

                if (yearly > 2400000 && yearly <= 3600000) {
                    let slab = yearly - 2400000
                    yearlyTax = (slab / 100) * 20 + 165000;
                    monthlyTax = yearlyTax / 12;
                    yearlyAfterTax = yearly - yearlyTax
                    afterTax = num - monthlyTax
                }

                if (yearly > 3600000 && yearly <= 6000000) {
                    let slab = yearly - 3600000
                    yearlyTax = (slab / 100) * 25 + 405000;
                    monthlyTax = yearlyTax / 12;
                    yearlyAfterTax = yearly - yearlyTax
                    afterTax = num - monthlyTax
                }

                if (yearly > 6000000 && yearly <= 12000000) {
                    let slab = yearly - 6000000
                    yearlyTax = (slab / 100) * 32.5 + 1005000;
                    monthlyTax = yearlyTax / 12;
                    yearlyAfterTax = yearly - yearlyTax
                    afterTax = num - monthlyTax
                }

                if (yearly > 12000000) {
                    let slab = yearly - 12000000
                    yearlyTax = (slab / 100) * 35 + 2955000;
                    monthlyTax = yearlyTax / 12;
                    yearlyAfterTax = yearly - yearlyTax
                    afterTax = num - monthlyTax
                }

                document.getElementById("monthlySalary").innerHTML = num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                document.getElementById("monthlyTax").innerHTML = monthlyTax.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                document.getElementById("monthlySalaryAfterTax").innerHTML = afterTax.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                document.getElementById("yearlySalary").innerHTML = num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                document.getElementById("yearlyTax").innerHTML = yearlyTax.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                document.getElementById("yearlySalaryAfterTax").innerHTML = yearlyAfterTax.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")

            });
        });
    </script>
@endsection
