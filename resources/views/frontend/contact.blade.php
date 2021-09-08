@extends('master')

@section('title' , $pageName )

@section('sidebar')
    @parent
    {{-- any thing to add after the parent part --}}
@endsection

@section('content')
    <section class="contact margin">
        <h1>{{$pageDescription}}</h1>
        <div class="row">
            <div class="cform col-7">
                <h2>Contact Form</h2>
                <form action="">
                    <div class="name">
                        <div style="margin-right: 140px;">
                            <label for="">First Name</label>
                            <input width="140%" type="text" placeholder="Enter First Name">
                        </div><!-- class first name -->
                        <div>
                            <label for="">Last Name</label>
                            <input width="140%" type="text" placeholder="Enter Last Name">
                        </div><!-- class last name -->
                    </div><!-- class names -->
                    <label for="">Email</label>
                    <input type="email" placeholder="Enter Email">
                    <label for="">Subject</label>
                    <input type="text" placeholder="Enter Subject">
                    <label for="">Message</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Write Your Message"></textarea>
                    <input type="submit" value="Send Message">
                </form>
            </div><!-- col-7 -->
        </div><!-- row -->
    </section><!-- end of section contact -->
@endsection
