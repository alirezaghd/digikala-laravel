@extends('admintemplate')

@section('content')

    <h4>افزودن شهر جدید</h4>


    <form method="post" action="{{ url('/admin/cities/add') }}">
        <div class="mb-3">
            <label  class="form-label">نام</label>
            <input type="text" name="name" class="form-control" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>

        <button type="submit" class="btn btn-primary">ذخیره</button>
    </form>
@endsection
