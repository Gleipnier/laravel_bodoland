@extends('layouts.bookapp')

@extends('layouts.bookcss')

@section('title', 'Book Collection')

@section('content')

    <style>
        table td,
        table th {
            padding: 20px !important;
        }
    </style>

    <section class="sep_blk_t bread-crumb mt-10">
        <div class="container">
            <h1 class="fz42 text-center fw800">Book Collection </h1>
        </div>
    </section>

    <section id="main_inner" class="about_pg sec01 sep_blk">
        <div class="container">
            <div class="row iitgx-6">
                <div class="col-sm-12 col-lg-12 abt_cnt">

                    <div class="row">
                        <div class="col-sm-12">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Name of Library</th>
                                        <th>No. of Books (upto 18/09/2024)</th>
                                        <th>Average Daily Reading Response (No. of persons)</th>
                                        <th>No. of Registered Members (upto 18/09/2024)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Directorate of Library Services (Bodoland Central Library), BTC, Kokrajhar</td>
                                        <td>40,957</td>
                                        <td>30</td>
                                        <td>Register (issue system is not available from Directorate office)</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>District Library, Kokrajhar</td>
                                        <td>80,000 Nos. of Books</td>
                                        <td>50</td>
                                        <td>5113</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>District Library, Chirang</td>
                                        <td>12,549 Nos. of Books</td>
                                        <td>50</td>
                                        <td>62</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>District Library, Baksa</td>
                                        <td>15,000 Nos. of Books</td>
                                        <td>30</td>
                                        <td>340</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>District Library, Udalguri</td>
                                        <td>25,303 Nos. of Books</td>
                                        <td>25</td>
                                        <td>1340</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Sub-Divisional Library, Gossaigaon</td>
                                        <td>21,941 Nos. of Books</td>
                                        <td>35</td>
                                        <td>988</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Sub-Divisional Library, Tamulpur</td>
                                        <td>15,000 Nos. of Books</td>
                                        <td>50</td>
                                        <td>1107</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Sub-Divisional Library, Bijni</td>
                                        <td>8257 Nos. of Books</td>
                                        <td>60</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Sub-Divisional Library, Bhergaon</td>
                                        <td>5000 Nos. of Books</td>
                                        <td>25</td>
                                        <td>102</td>
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
