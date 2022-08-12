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
                        <td>  <img src="{{ url($product->images->first()->url) }}"  class="avatar-sm"> </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->title}}</td>
                        <td>{{$product->count}}</td>
                        <td>{{$product->price}}</td>

                        <td>




                            <a href="{{ url("/admin/product/edit/$product->id") }}" class="text-primary" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>

                            <a href="{{ url("/admin/product/delete/$product->id") }}" class="text-danger" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                        </td>
                    </tr>



                @endforeach
            </table>

        </div>

    </div>
@endsection
