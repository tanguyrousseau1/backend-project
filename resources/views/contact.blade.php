@extends('main')

@section('title')
    Contact
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact the Team</h1>
                <form action="#" method="post">
                    <label for="Name">Your Name</label>
                    <input type="text" name="Name" id="Name" required><br>

                    <label for="Email">Your Email</label>
                    <input type="text" name="Email" id="Email" required><br>

                    <label for="Message">Your Message</label>
                    <input type="text" name="Message" id="Message" required><br>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
