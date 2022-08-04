@extends('template')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" action="{{ url("/login") }}">
                    <div class="mb-3">
                        <label  class="form-label">ایمیل یا موبایل</label>
                        <input type="text" name="email" class="form-control" >

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">گذرواژه</label>
                        <input type="password" name="password" class="form-control" >
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}" >

                    <button type="submit" class="btn btn-primary">ورود</button>
                </form>
            </div>
        </div>
    </div>

@endsection
