@extends('layouts.master')

@section('title')
العملاء
@endsection

@section('style')
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="d-flex mb-2">

        <a href="{{ url('/add-client') }}" class="btn btn-success ml-3">اضافة عميل</a>

        <a href="#" class="btn btn-info ml-3">تصدير قائمة العملاء</a>

        <a href="#" class="btn btn-warning">استيراد قائمة العملاء</a>

    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-right">العملاء</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>
                            <td>2008/11/13</td>
                            <td>$183,000</td>
                        </tr>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>29</td>
                            <td>2011/06/27</td>
                            <td>$183,000</td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

             {{-- start message whene no data available --}}
             <div class="col-md-6 m-auto text-center">
                <img src="assets/img/undraw_Empty_re_opql.png" alt="" class="img-fluid">
                <h2>ليس لديك أي عملاء</h2>
                <p class="lead">
                    يوفر قيود صفحة خاصة بالموردين للمساهمة في تسهيل التعاملات مع الموردين وملخص لبياناتهم.
                </p>
                <a href="{{ url('/addclient') }}" class="btn btn-primary">اضافة عميل</a>
            </div>
            {{-- End message whene no data available --}}
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
@endsection
