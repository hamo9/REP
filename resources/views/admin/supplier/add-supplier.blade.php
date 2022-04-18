@extends('layouts.master')

@section('title')
    اضافه مورد
@endsection


@section('content')
    <div class="container-fluid">

        <div class="mb-2">
            <a href="{{ url('/suppliers') }}" class="btn btn-danger">رجوع</a>
        </div>

        <div class="card shadow">
            <div class="card-header">
                <h5>إضافة مورد</h5>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group mb-2 mt-0 pt-0">
                            <label for="">اسم المورد</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>

                        <div class="form-group mb-2">
                            <label for="">رقم الاتصال الأساسي</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">رقم الاتصال الثانوي</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">البريد الإلكتروني الأساسي</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">البريد الإلكتروني الثانوي</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">اسم المنشأة</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">الموقع الالكتروني</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">الرقم الضريبي</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">الحالة</label>
                            <select class="form-control" name="" id="">
                                <option value="">نشط</option>
                                <option value="">غير نشط</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="mr-md-4">

                            <div class="card mt-2">
                                <div class="card-header">
                                    <h5 class="text-primary">عنوان الفاتوره</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-2">
                                        <label for="">اسم الشارع</label>
                                        <input class="form-control" type="text" name="" id="">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="">المدينه</label>
                                        <input class="form-control" type="text" name="" id="">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">المنطقه</label>
                                        <input class="form-control" type="text" name="" id="">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="">الرمز البريدي</label>
                                        <input class="form-control" type="text" name="" id="">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">الدوله</label>
                                        <select class="form-control" name="" id="">
                                            <option value="">مصر</option>
                                            <option value="">فلسطين</option>

                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 mt-5">
                        <div class="card card-body">
                            <h6 class="text-primary">المرفقات</h6>
                            <hr>
                        </div>
                    </div>


                    <div class="col-12 mt-4">
                        <button class="btn btn-primary">حفظ</button>
                        <button class="btn btn-dark mr-2">اعادة تعيين</button>

                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection
