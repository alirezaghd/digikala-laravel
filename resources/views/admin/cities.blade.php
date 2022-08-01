@extends('admintemplate')

@section('content')

    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">لیست شهرها</h4>

            </div>
        </div>
    </div>


                <a class="btn btn-success mt-3 " href="{{ url('/admin/cities/add') }}">افزودن شهر جدید</a>
                <div class="table-responsive text-center">
                    <table class="table table-editable table-nowrap align-middle table-edits mt-3">
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th># </th>
                        </tr>
                        @foreach($cities as $city)
                            <tr>
                                <td> {{$i++}} </td>
                                <td>{{$city->name}}</td>
                                <td>
                                    <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit{{ $city->id }}"> ویرایش</a>


                                    <!-- Modal -->
                                    <div class="modal fade" id="edit{{ $city->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">  ویرایش  شهر </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" id="form_city" action="{{ url('/admin/cities/edit') }}">
                                                        <div class="mb-3">
                                                            <label  class="form-label">نام</label>
                                                            <input type="text" name="name" value="{{ $city->name }}" class="form-control" >
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <input type="hidden" name="id" value="{{ $city->id }}">
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" form="form_city" class="btn btn-primary">ذخیره</button>

                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">بستن</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn-danger" href="{{ url("/admin/cities/delete/$city->id") }}"> حذف</a>

                                </td>
                            </tr>



                        @endforeach
                    </table>

                </div>

    </div>

@endsection
