@extends('layouts.bookapp')

@extends('layouts.bookcss')

@section('title', 'Library')

@section('content')

    <style>
        table td,
        table th {
            padding: 12px !important;
        }
    </style>

    <section class="sep_blk_t bread-crumb mt-10">
        <div class="container">
            <h1 class="fz42 text-center fw800">Library </h1>
        </div>
    </section>

    <section id="main_inner" class="about_pg sec01 sep_blk">
        <div class="container">
            <div class="row iitgx-6">
                <div class="col-sm-12 col-lg-12 abt_cnt">

                    <h1 class="main-heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        Name of Library, Name of Librarian and Contact No.: </h1>

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered" cellpadding="5" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Name of Office</th>
                                        <th>Place of Library</th>
                                        <th>Name of Officer with designation</th>
                                        <th>Contact No. & Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center align-middle" rowspan="5">1</th>
                                        <td>CHD, Library Services Deptt., BTC, Kokrajhar</td>
                                        <td>Dimalgaon, Titaguri, Dist.- Kokrajhar</td>
                                        <td>Mr. Sansumwi Boro, CHD cum District Librarian</td>
                                        <td>7002480047 & Email: sansumwi@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Do</td>
                                        <td>Do</td>
                                        <td>Sri Bichitra Narzary, Reference Librarian</td>
                                        <td>7002974632 & Email: bichitra9@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Do</td>
                                        <td>Do</td>
                                        <td>Sri Dwijen Boro, Asstt. Librarian</td>
                                        <td>9101767373 & Email: dwijenboro2720@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>District Library, Kokrajhar</td>
                                        <td>Do</td>
                                        <td>Mr. Sansumwi Boro, District Librarian</td>
                                        <td>7002480047 & Email: sansumwi@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Sub-Divisional Library, Gossaigaon, Kokrajhar</td>
                                        <td>College Road, Gossaigaon Chariali, Dist.- Kokrajhar</td>
                                        <td>Mr. Swapan Kr. Muchahary, Sub-Divisional Librarian</td>
                                        <td>7086975822 & Email: s.k.mushahary69@gmail.com</td>
                                    </tr>

                                    <tr>
                                        <th class="text-center align-middle" rowspan="2">2</th>
                                        <td>District Library, Chirang</td>
                                        <td>Kajolgaon, Dist.- Chirang</td>
                                        <td>Mrs. Bijuli Narzary, District Librarian</td>
                                        <td>9101100670 / 9678438472 & Email: bijulinarzary54@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Sub-Divisional Library, Bijni, Chirang</td>
                                        <td>Bijni Town, Dist.- Chirang</td>
                                        <td>Mrs. Bijuli Narzary, i/c Sub-Divisional Librarian</td>
                                        <td>9101100670 / 9678438472 & Email: bijulinarzary54@gmail.com</td>
                                    </tr>

                                    <tr>
                                        <th class="text-center align-middle" rowspan="4">3</th>
                                        <td>District Library, Baksa</td>
                                        <td>Mushalpur, Dist.- Baksa</td>
                                        <td>Mrs. Jinti Das, District Librarian</td>
                                        <td>9101277412 & Email: districtlibrarybaksa123@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Sub-Divisional Library, Tamulpur, Baksa</td>
                                        <td>Bareigaon, Tamulpur Town, Dist.- Baksa</td>
                                        <td>Mrs. Kabita Kalita, Sub-Divisional Librarian</td>
                                        <td>9864315863 / 7002101345 & Email: sdltamulpur@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Sub-Divisional Library, Salbari, Baksa</td>
                                        <td>Salbari, Dist.- Baksa</td>
                                        <td>Mrs. Jinti Das, i/c Sub-Divisional Librarian</td>
                                        <td>9101277412 & Email: districtlibrarybaksa123@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Model Rural Library, Patkijuli, Baksa</td>
                                        <td>JB Ghyansali, Rural Library, Patkijuli, Dist.- Baksa</td>
                                        <td>Mrs. Kabita Kalita, i/c MR Librarian</td>
                                        <td>9864315863 / 7002101345 & Email: sdltamulpur@gmail.com</td>
                                    </tr>

                                    <tr>
                                        <th class="text-center align-middle" rowspan="3">4</th>
                                        <td>District Library, Udalguri</td>
                                        <td>Lalgodown Complex, Shanti Road, Udalguri Town, Dist.- Udalguri</td>
                                        <td>Mr. Jagat Nr. Baro, District Librarian</td>
                                        <td>7399047561 & Email: jagatbaro@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Sub-Divisional Library, Bhergaon, Udalguri</td>
                                        <td>Bhergaon Town, Dist.- Udalguri</td>
                                        <td>Mr. Brivosh Boro, Sub-Divisional Librarian</td>
                                        <td>6002524278</td>
                                    </tr>
                                    <tr>
                                        <td>Model Rural Library, Udalguri</td>
                                        <td>Borobazar, Dolakati, Rowta, Udalguri</td>
                                        <td>Mr. Jagat Nr. Baro, i/c MR Librarian</td>
                                        <td>7399047561 & Email: jagatbaro@gmail.com</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>


                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection
