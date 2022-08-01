@extends('admintemplate')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">افزودن محصول جدید</h4>

                </div>
            </div>
        </div>

    <form class="row g-3" action="{{ url('/admin/product/add') }}" method="post">
        <div class="col-12">
            <label  class="form-label">نام محصول</label>
            <input type="text" name="name" class="form-control" >
        </div>
        <div class="col-md-6">
            <label  class="form-label">قیمت</label>
            <input type="number" name="price" class="form-control" >
        </div>
        <div class="col-md-6">
            <label  class="form-label">تعداد</label>
            <input type="number" name="count" class="form-control" >
        </div>

        <div class="col-12">
            <label  class="form-label">توضیحات</label>
            <textarea class="form-control" name="description"  rows="3"></textarea>
        </div>
{{--        <div class="col-md-6">--}}
{{--            <label  class="form-label">عکس</label>--}}
{{--            <input type="text" name="image" class="form-control" >--}}
{{--        </div>--}}
        <div class="col-md-4">
            <label  class="form-label">دسته بندی</label>
            <select  name="category_id" class="form-select">
                <option selected>Choose...</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">
                    {{$category->title}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label  class="form-label">تخفیف</label>
            <input type="text" name="priceOff"  class="form-control" >
        </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="col-12">
            <button type="submit" class="btn btn-primary">افزودن</button>
        </div>
    </form>

    </div>

@endsection
