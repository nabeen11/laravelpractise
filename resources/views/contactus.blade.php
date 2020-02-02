@extends('layouts.main')
@section('content')

<div class="container">
    <!-- @if($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{$error}}
    </div>
@endforeach
@endif -->

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form method="get" action="/insertData">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="formGroupExampleInput">Fullname</label>
                    <input type="text" class="form-control" id="fname" name="fullnamesss" placeholder="Enter Fullname">
                    @if($errors->any())
                    <div class="alert alert-danger mt-1" role="alert">
                        {{$errors->first('fullnamesss')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Address</label>
                    <input type="text" class="form-control" id="address" name="add" placeholder="Enter address">
                    @if($errors->any())
                    <div class="alert alert-danger mt-1" role="alert">
                        {{$errors->first('add')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Phone.no</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone.no">
                    @if($errors->any())
                    <div class="alert alert-danger mt-1" role="alert">
                        {{$errors->first('phone')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="message" name="msg" placeholder="Enter your message here"
                    rows="3"></textarea>

                        @if($errors->any())
                    <div class="alert alert-danger mt-1" role="alert">
                        {{$errors->first('msg')}}
                    </div>
                    @endif
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Send Message"></button>
                </div>
        </div>
        <div class="col-2"></div>

    </div>

</div>


</form>

@endsection
