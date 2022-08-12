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

        <div class="row">
            <div class="col-lg-12">
                <div id="addproduct-accordion" class="custom-accordion">
                    <div class="card">
                        <a href="#addproduct-billinginfo-collapse" class="text-dark collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="addproduct-billinginfo-collapse">
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-2">
                                            <div class="avatar-title-2 font-size-16 rounded-circle bg-soft-primary text-primary">
                                                01
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">اطلاعات محصول</h5>
                                        <p class="text-muted text-truncate mb-0">تمام اطلاعات  را وارد کنید</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                    </div>

                                </div>

                            </div>
                        </a>

                        <div id="addproduct-billinginfo-collapse" class="collapse" data-bs-parent="#addproduct-accordion" style="">
                            <div class="p-4 border-top">
                                <form class="row g-3" action="{{ url('/admin/product/add') }}" method="post" id="form1">

                                    <div class="row">
                                        <div class="col-lg-4">

                                            <div class="mb-3">
                                                <label class="form-label" for="manufacturername">نام محصول</label>
                                                <input id="manufacturername" name="name" placeholder="نام محصول را وارد کنین" type="text" class="form-control">
                                            </div>


                                        </div>
                                        <div class="col-lg-4">

                                            <div class="mb-3">
                                                <label class="form-label" for="manufacturerbrand">تعداد</label>
                                                <input id="manufacturerbrand" name="count" placeholder="تعداد را وارد کنید" type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="price">قیمت</label>
                                                <input id="price" name="price" placeholder="فیمت را وارد کنید" type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">

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
                                        <div class="col-md-6">
                                            <label  class="form-label">تخفیف</label>
                                            <input type="text" name="priceOff"  class="form-control" >


                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <label class="form-label" for="productdesc">توضیحات</label>
                                        <textarea class="form-control" id="productdesc" name="description" placeholder="توضیحات" rows="4"></textarea>
                                    </div>

                                    <label class="form-label" for="lfm">بارگزاری عکس</label>
                                    <div class="input-group">
                                       <span class="input-group-btn">
                                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                           <i class="fa fa-picture-o"></i> Choose
                                         </a>
                                       </span>
                                        <input id="thumbnail" class="form-control" type="text" name="image">
                                    </div>
                                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#addproduct-img-collapse" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-controls="addproduct-img-collapse">
                            <div class="p-4">

                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-2">
                                            <div class="avatar-title-2 font-size-16 rounded-circle bg-soft-primary text-primary">
                                                02
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">عکس محصول</h5>
{{--                                        <p class="text-muted text-truncate mb-0">Fill all information below</p>--}}
                                    </div>
                                    <div class="flex-shrink-0">
                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                    </div>

                                </div>

                            </div>
                        </a>

                        <div id="addproduct-img-collapse" class="collapse" data-bs-parent="#addproduct-accordion" style="">
                            <div class="p-4 border-top">
                                <form action="#" class="dropzone dz-clickable">


                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#addproduct-metadata-collapse" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-controls="addproduct-metadata-collapse">
                            <div class="p-4">

                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-2">
                                            <div class="avatar-title-2 font-size-16 rounded-circle bg-soft-primary text-primary">
                                                03
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Meta Data</h5>
                                        <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                    </div>

                                </div>

                            </div>
                        </a>

                        <div id="addproduct-metadata-collapse" class="collapse" data-bs-parent="#addproduct-accordion" style="">
                            <div class="p-4 border-top">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="metatitle">Meta Title</label>
                                                <input id="metatitle" name="metatitle" placeholder="Enter Title" type="text" class="form-control">
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="metakeywords">Meta Keywords</label>
                                                <input id="metakeywords" name="metakeywords" placeholder="Enter Keywords" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <label class="form-label" for="metadescription">Meta Description</label>
                                        <textarea class="form-control" id="metadescription" placeholder="Enter Description" rows="4"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row mb-4">
            <div class="col text-end">
                <a href="#" class="btn btn-danger"> <i class="mdi mdi-close me-1"></i> لغو </a>
                <button type="submit" form="form1" class="btn btn-success"><i class="mdi mdi-file-document-outline me-1"> <span>افزودن</span> </i></button>

            </div> <!-- end col -->
        </div> <!-- end row-->

    </div>

    <div class="container-fluid">





        <div class="col-12">
            <button type="submit" class="btn btn-primary">افزودن</button>
        </div>
    </form>

    </div>

@endsection
