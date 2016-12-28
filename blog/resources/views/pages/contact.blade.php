@extends('main')

@section('title', '| Contact')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Me</h1>
            <hr>
            <form action="">
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label name="email">Subject:</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label name="message">Message:</label>
                    <input type="text" id="message" name="message" class="form-control">
                </div>

                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
