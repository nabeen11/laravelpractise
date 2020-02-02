@extends('layouts.main')
@section('content')

<form method="get" action="/insertData">

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="form-group">
                    <label for="formGroupExampleInput">Fullname</label>
                    <input type="text" class="form-control" id="fname" name="fullnamesss" placeholder="Enter Fullname">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Address</label>
                    <input type="text" class="form-control" id="address" name="add" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Phone.no</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone.no">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="message" name="msg" placeholder="Enter your message here"
                        rows="3"></textarea>
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
