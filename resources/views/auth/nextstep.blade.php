@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))

                    @endif
                    <form method="post" action="nextstep" enctype="multipart/form-data">
                      <input type="file" name="image" accept="image/jpeg|image/x-png" class="file" />
                      <input type="hidden" name="_token" value="{{csrf_token()}}" />
                      <input type="hidden" name="user" value="{{ Auth::user()->name }}" />
                      <input type="submit" name="submit" value="upload" class="submit" />

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
