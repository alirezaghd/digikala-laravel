@extends('admintemplate')

@section('content')

    <h4>ویرایش شهر </h4>


    <form method="post" action="{{ url('/admin/cities/edit') }}">
        <div class="mb-3">
            <label  class="form-label">نام</label>
            <input type="text" name="name" value="{{ $city->name }}" class="form-control" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $city->id }}">
        </div>

        <button type="submit" class="btn btn-primary">ذخیره</button>
    </form>
@endsection
