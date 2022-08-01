@extends('admintemplate')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">لیست محصولات</h4>

                </div>
            </div>
        </div>




        <a class="btn btn-success mt-3 " href="{{ url('/admin/product/add') }}">افزودن محصول جدید</a>
        <div class="table-responsive text-center">
            <table class="table table-editable table-nowrap align-middle table-edits mt-3">
                <tr>
                    <th>#</th>
                    <th>عکس</th>
                    <th>نام</th>
                    <th>دسته بندی</th>
                    <th>تعداد </th>
                    <th>قیمت </th>
                    <th>  </th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td> {{$product->id}} </td>
                        <td>  <img src="{{$product->images->first()->url}}" style="" class="avatar-sm"> </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->title}}</td>
                        <td>{{$product->count}}</td>
                        <td>{{$product->price}}</td>

                        <td>
{{--                            <a  class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top"  data-bs-original-title="Edit" aria-label="Edit"><i class="mdi mdi-pencil font-size-18" data-bs-toggle="modal" data-bs-target="#edit{{ $product->id }}"></i></a>--}}



{{--                            <!-- Modal -->--}}
{{--                            <div class="modal fade" id="edit{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">--}}
{{--                                <div class="modal-dialog">--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <div class="modal-header">--}}
{{--                                            <h5 class="modal-title" id="staticBackdropLabel">  ویرایش  شهر </h5>--}}
{{--                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                        </div>--}}
{{--                                        <div class="modal-body">--}}
{{--                                            <form method="post" id="form_city" action="{{ url('/admin/cities/edit') }}">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label  class="form-label">نام</label>--}}
{{--                                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" >--}}
{{--                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--                                                    <input type="hidden" name="id" value="{{ $product->id }}">--}}
{{--                                                </div>--}}

{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                        <div class="modal-footer">--}}
{{--                                            <button type="submit" form="form_city" class="btn btn-primary">ذخیره</button>--}}

{{--                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">بستن</button>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <a href="{{ url("/admin/product/edit/$product->id") }}" class="text-primary" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>

                            <a href="{{ url("/admin/product/delete/$product->id") }}" class="text-danger" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                        </td>
                    </tr>



                @endforeach
            </table>

        </div>

    </div>
@endsection
