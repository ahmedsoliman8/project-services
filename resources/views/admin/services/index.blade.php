@extends('admin.master')
@section('title',__('keywords.services'))
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{__('keywords.services')}}</h2>

                <div class="card shadow">
                    <div class="card-body">

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Address</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>3224</td>
                                <td>Keith Baird</td>
                                <td>Enim Limited</td>
                                <td>901-6206 Cras Av.</td>
                                <td>Apr 24, 2019</td>
                                <td><span class="badge badge-pill badge-warning">Hold</span></td>
                            </tr>
                            <tr>
                                <td>3218</td>
                                <td>Graham Price</td>
                                <td>Nunc Lectus Incorporated</td>
                                <td>Ap #705-5389 Id St.</td>
                                <td>May 23, 2020</td>
                                <td><span class="badge badge-pill badge-success">Success</span></td>
                            </tr>
                            <tr>
                                <td>2651</td>
                                <td>Reuben Orr</td>
                                <td>Nisi Aenean Eget Limited</td>
                                <td>7425 Malesuada Rd.</td>
                                <td>Nov 4, 2019</td>
                                <td><span class="badge badge-pill badge-warning">Hold</span></td>
                            </tr>
                            <tr>
                                <td>2636</td>
                                <td>Akeem Holder</td>
                                <td>Pellentesque Associates</td>
                                <td>896 Sodales St.</td>
                                <td>Mar 27, 2020</td>
                                <td><span class="badge badge-pill badge-danger">Danger</span></td>
                            </tr>
                            <tr>
                                <td>2757</td>
                                <td>Beau Barrera</td>
                                <td>Augue Incorporated</td>
                                <td>4583 Id St.</td>
                                <td>Jan 13, 2020</td>
                                <td><span class="badge badge-pill badge-success">Success</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

@endsection
