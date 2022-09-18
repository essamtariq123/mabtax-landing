<?php

namespace Database\Seeders;

use App\Models\Requirement;
use App\Models\Service;
use App\Models\SubService;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_services = [
            //Income Tax

            'Income Tax Return' => [
                [
                    'price' => 400,
                    'time' => '1 - 2 Working Days',
                    'title' => 'NTN Registration – Salaried',
                    'requirements' => [
                        'Color copy of CNIC',
                        'Latest paid electricity bill',
                        'Phone Number',
                        'Email address',
                    ]
                ],

                [
                    'price' => 2500,
                    'time' => '1 - 2 Working Days',
                    'title' => 'NTN Registration – Business',
                    'requirements' => [
                        'Color copy of CNIC',
                        'Latest paid electricity bill',
                        'Phone Number',
                        'Email address',
                        'Rent agreement/ownership docs of Office premises',
                        'Letterhead'
                    ]

                ],
                [
                    'price' => 7000,
                    'time' => '2 - 3 Working Days',
                    'title' => 'NTN Registration – Partnership or AOP
                    ',
                    'requirements' => [
                        'Color copy of CNIC',
                        'Latest paid electricity bill',
                        'Phone Number',
                        'Email address',
                        'Rent agreement/ownership docs of Office premises',
                        'Letterhead',
                        'Partnership Deed',
                        'Partnership registration certificate',
                        'Authorization of principal Officer',

                    ]
                ],

                [
                    'price' => 10000,
                    'time' => '2 - 3 Working Days',
                    'title' => 'NTN Registration – Company',
                    'requirements' => [
                        'Color copy of CNIC',
                        'Latest paid electricity bill',
                        'Phone Number',
                        'Email address',
                        'Rent agreement/ownership docs of Office premises',
                        'Letterhead',
                        'Partnership Deed',
                        'Partnership registration certificate',
                        'Authorization of principal Officer',
                        'Incorporation Certificate',
                        'Memorandum & Articles of Association',
                    ]


                ],
                [
                    'price' => 15000,
                    'time' => '2 - 3 Working Days',
                    'title' => 'NTN Registration – NPO',
                    'requirements' => [
                        'Color copy of CNIC',
                        'Latest paid electricity bill',
                        'Phone Number',
                        'Email address',
                        'Authorization of principal Officer',
                        'Letterhead',
                        'Rent agreement/ownership docs of Office premises',
                        'Constitution of NPO',
                        'Incorporation Certificate',
                        'Any other document as required by the concerned authority',
                        'NTN of all members',


                    ]
                ],

                [
                    'price' => 5000,
                    'time' => '3 - 4 Working Days',
                    'title' => 'Quarterly Withholding Statements Tax Filing',
                    'requirements' => [
                        'Details of Taxes deducted at source during each quarter',
                        'Other information as required',




                    ]

                ],


                [
                    'price' => 2650,
                    'time' => '3 - 5 Working Days',
                    'title' => 'Annual Income Tax Filing- Salaried',
                    'requirements' => [
                        'Annual Salary certificates',
                        'Other Income sources if any',
                        'Annual personal expense',
                        'Details of all owned assets',
                        'Investments during the year',
                        'Disposals during the year',
                        'Other inflows/outflows during the year',
                        'Other information as required',






                    ]


                ],

                [
                    'price' => 5000,
                    'time' => '3 - 5 Working Days',
                    'title' => 'Annual Income Tax Filing- Sole Proprietor',
                    'requirements' => [
                        'Annual Accounts',
                        'Other Income sources if any',
                        'Annual personal expense',
                        'Details of all owned assets',
                        'Investments during the year',
                        'Disposals during the year',
                        'Other inflows/outflows during the year',
                        'Other information as required',






                    ]


                ],

                [
                    'price' => 10000,
                    'time' => '3 - 5 Working Days',
                    'title' => 'Annual Income Tax Filing- Partnership/PVT Company',
                    'requirements' => [

                        'Annual Accounts',
                        'Taxes deducted at source',
                        'Other information as required',

                    ]



                ],


                [
                    'price' => 15000,
                    'time' => '3 - 5 Working Days',
                    'title' => 'Annual Income Tax Filing- NPO/Charitable Trusts',
                    'requirements' => [

                        'Annual Accounts',
                        'Taxes deducted at source',
                        'Other information as required',

                    ]




                ],



                //Sales Tax 


            ],


            'Sales Tax Registration' => [
                [
                    'price' => 18000,
                    'other_price' => 15000,
                    'time' => '2 - 3 Working Days',
                    'title' => 'GST Registration',
                    'requirements' => [

                        'Bank Account Certificate',
                        'Acquisition Date, Capacity and Business Activity',
                        'Particulars of all branches (if any)',
                        'Authorization of principal Officer',
                        'GPS-tagged photographs of the business premises',
                        'Consumer number with the gas and electricity supplier along with pictures of utilities meter',
                        'GPS-tagged photographs of machinery and industrial electricity or gas meter installed (Manufacturer only)',
                        'Color copy of CNICs of Partners',
                        'Rent agreement/ownership docs of Office premises',
                        'Latest paid electricity bill',
                        'Biometric Verification',
                        'Post Verification (Manufacturer only)',
                    ]
                ],

                [
                    'price' => 5000,
                    'time' => '3 - 4 Working Days',
                    'title' => 'Monthly Federal / Provincial Sales Tax Return Filing',
                    'requirements' => [

                        'Copies of Sales Invoices',
                        'Copies of Purchse Invoices',
                        'Bank Statements',
                        'Other Information As Required',

                    ]

                ],

                [
                    'price' => 15000,
                    'time' => '7 - 10 Working Days',
                    'title' => 'PST Registration (Individual)',
                    'requirements' => [

                        'Colored Copy of CNIC',
                        'Rent agreement/ownership docs of Office premises',
                        'Letterhead',
                        'Latest Electricity Bill',
                        'Phone Number',
                        'Email Address',
                        'Bank Account Certificate',
                        'Acquisition Date, Capacity & Business Activity',
                        'Particulars of all branches (if applicable)',
                        'Autorization of Principal Officer',
                        'Signed Application Form',

                    ]

                ],

                [
                    'price' => 15000,
                    'time' => '7 - 10 Working Days',
                    'title' => 'PST Registration (Company)',
                    'requirements' => [

                        'Incorporation Certificate',
                        'Memorandum of Association',
                        'Articles of Association',
                        'Incorporation form A & 29',
                        'Colored Copy of CNIC',
                        'Rent agreement/ownership docs of Office premises',
                        'Letterhead',
                        'Latest Electricity Bill',
                        'Phone Number',
                        'Email Address',
                        'Bank Account Certificate',
                        'Acquisition Date, Capacity & Business Activity',
                        'Particulars of all branches (if applicable)',
                        'Autorization of Principal Officer',
                        'Signed Application Form',

                    ]

                ],

                [
                    'price' => 15000,
                    'time' => '7 - 10 Working Days',
                    'title' => 'PST Registration (Partnership)',
                    'requirements' => [

                        'Partnership Certificate',
                        'Partnership Deed',
                        'Colored Copy of CNIC',
                        'Rent agreement/ownership docs of Office premises',
                        'Letterhead',
                        'Latest Electricity Bill',
                        'Phone Number',
                        'Email Address',
                        'Bank Account Certificate',
                        'Acquisition Date, Capacity & Business Activity',
                        'Particulars of all branches (if applicable)',
                        'Autorization of Principal Officer',
                        'Signed Application Form',

                    ]


                ],




            ],











            //Company Registration



            "Company's Registration" => [
                [
                    'price' => 12000,
                    'time' => '3 - 4 Working Days',
                    'title' => 'Private Limited Company Registration (Non-Lisenced)',
                    'requirements' => [

                        'Three Names of the proposed company',
                        'Neat and Clear Scanned copies of CNICs of all the proposed Directors / subscribers',
                        'NTN of the proposed directors / subscribers',
                        'Registered address / correspondence address of the proposed Company',
                        'The principal business of the proposed company',
                        'Nature of the business activity',
                        'Authorized Capital Value',
                        'Paid up Capital',
                        'Value per share e.g.Rs. 10, Rs. 50 or Rs. 100 etc',
                        'Combination of Shares agreed to be subscribed by each director / subscriber',
                        'Name of the Chief Executive of the Proposed Company',
                        'Authorization from other subscribers. (For Offline only)',
                        'Telephone numbers and email ID of all the proposed directors',
                        'Telephone numbers and email ID of all the proposed directors of the Company',
                        'Name of declarant person',
                        'SECP login details of the proposed directors / subscribers(if any)',

                    ]

                ],

                [
                    'price' => 12000,
                    'time' => '2 - 3 Working Days',
                    'title' => 'Single Member Company Registration (Non-Lisenced)',
                    'requirements' => [

                        'Three Names of the proposed company',
                        'Neat and Clear Scanned copies of CNICs of all the proposed Directors / subscribers',
                        'NTN of the proposed directors / subscribers',
                        'Registered address / correspondence address of the proposed Company',
                        'The principal business of the proposed company',
                        'Nature of the business activity',
                        'Authorized Capital Value',
                        'Paid up Capital',
                        'Value per share e.g.Rs. 10, Rs. 50 or Rs. 100 etc',
                        'Name of the Chief Executive of the Proposed Company',
                        'Telephone numbers and email ID of all the proposed directors',
                        'Telephone numbers and email ID of all the proposed directors of the Company',
                        'Name of declarant person',
                        'SECP login details of the proposed directors / subscribers(if any)',

                    ]

                ],

                [
                    'price' => 15000,
                    'time' => '7 - 10 Working Days',
                    'title' => 'LLP Limited Liability Partnership Registration (Non-Lisenced)',
                    'requirements' => [

                        'Three Names of the proposed company',
                        'Neat and Clear Scanned copies of CNICs of all the proposed Directors / subscribers',
                        'NTN of the proposed directors / subscribers',
                        'Registered address / correspondence address of the proposed Company',
                        'The principal business of the proposed company',
                        'Nature of the business activity',
                        'Authorized Capital Value',
                        'Paid up Capital',
                        'Value per share e.g.Rs. 10, Rs. 50 or Rs. 100 etc',
                        'Combination of Shares agreed to be subscribed by each director / subscriber',
                        'Name of the Chief Executive of the Proposed Company',
                        'Authorization from other subscribers. (For Offline only)',
                        'Telephone numbers and email ID of all the proposed directors',
                        'Telephone numbers and email ID of all the proposed directors of the Company',
                        'Name of declarant person',
                        'SECP login details of the proposed directors / subscribers(if any)',

                    ]


                ],
                [
                    'price' => 15000,
                    'time' => '5 - 7 Working Days',
                    'title' => 'Partnership or AOP Registration',
                    'requirements' => [

                        'Partnership Deed',
                        'Signed Partnership Form',
                        'Authorization of principal officer',
                        'Color Copy of CNICs of partners',
                        'Rent Agreement and Ownership Documents of Office Premises',
                        'Letterhead',
                        'Latest Paid Electricity Bill',
                        'Phone Number',
                        'Email Address',

                    ]



                ],
                [
                    'price' => 200000,
                    'time' => '5 - 7 Working Days',
                    'title' => 'NPO Registration',
                    'requirements' => [

                        'Memorandum and articles of Association',
                        'Authorization of principal officer',
                        'Color Copy of CNICs of partners',
                        'Rent Agreement and Ownership Documents of Office Premises',
                        'Letterhead',
                        'Latest Paid Electricity Bill',
                        'Phone Number',
                        'Email Address',
                        'NOC from Home Department',
                    ]




                ],

            ],





            //Intellectual property

            "Intellectual Property" => [
                [
                    'price' => 45000,
                    'time' => null,
                    'title' => 'Trademark Registration',
                    'requirements' => [

                        'TM-1 in duplicates',
                        'Six representations affixed on a durable paper of 13x8 inch',
                        'CNIC of the Trademark Holder/partners',
                        'Specification of goods or services sought to be protected in any class',
                        'Residential address of holder or Letterhead of the Business',
                        'Other Information or Documents as required',

                    ]


                ],

                [
                    'price' => 45000,
                    'time' => null,
                    'title' => 'Copyright Registration',
                    'requirements' => [

                        'Two Copies of Work',
                        'Demand Draft / Pay order of fee as applicable per work',
                        'CNIC of the Copyrights Holder / partners',
                        'NOC from publisher if work has been published and publisher is different from applicant',
                        'Search certificate from trademark Office if the work is capable of being used on goods',
                        'Residential address of holder or Letterhead of the Business',
                        'Power of attorney',
                        'Other Information or Documents as required',

                    ]
                ],

                [
                    'price' => 50000,
                    'time' => null,
                    'title' => 'Patent Registration',
                    'requirements' => [
                        'Form P - 1 or Form P - 1A application without priority',
                        'Form P - 2 or Form P - 2A application with priority',
                        'Form P - 3 for provisional or Form P - 3A for complete specification',
                        'Patent Specification',
                        'Drawings, if any',
                        'Demand Draft / Pay order of fee as applicable per work ',
                        'Form P - 28 - power of Attorney - if any',
                        'Priority document - for conventional applications - ',
                        'CNIC of the Copyrights applicant',
                        'Other Information or Documents as required',

                    ]
                ],

            ],
        ];

        foreach($sub_services as $key => $service) {
            $service = Service::where('title', $key)->first();

            foreach($sub_services[$key] as $sub) {
                $sub_service = SubService::create([
                    'title' => $sub['title'],
                    'price' => $sub['price'],
                    'other_price' => isset($sub['other_price']) ? $sub['other_price'] : null,
                    'time' => $sub['time'],
                    'service_id' => $service->id
                ]);

                foreach($sub['requirements'] as $require) {
                    $requirement = Requirement::where('title', $require)->first();
                    $sub_service->requirements()->attach($requirement->id);
                }
            }
            
        }
    }
}
