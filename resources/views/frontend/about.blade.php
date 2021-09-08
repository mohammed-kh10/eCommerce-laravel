@extends('master')

@section('title' , 'About Me')

@section('content')
    <section class="about container margin">
        <div class="row">
            <div class="col-6 left">
                <h1>About Us</h1>
                <p class="ap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit eius dolorem quidem doloribus cumque expedita cupiditate nobis labore nihil perferendis, necessitatibus voluptatibus quae ullam ea repellat veritatis. Quibusdam alias ipsam vel eius magni corporis dicta, omnis suscipit quos vitae nemo.</p>
                <div class="row">
                    <div class="col-6">
                        <i class="fa fa-laptop"></i>
                        <h3>Wep & Mobile Specialties
                        </h3>
                        <p class="app">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ea rerum est itaque, dignissimos quia debitis nesciunt eveniet consequatur, aliquam tempore iusto veniam?</p>
                        <a href="#">Learn More</a>
                    </div><!-- col-6-1 -->
                    <div class="col-6">
                        <i class="fas fa-puzzle-piece"></i>
                        <h3>Intuitive Thinkers</h3>
                        <p class="app">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ea rerum est itaque, dignissimos quia debitis nesciunt eveniet consequatur, aliquam tempore iusto veniam?</p>
                        <a href="#">Learn More</a>
                    </div><!-- col-6-2 -->
                </div><!-- inside row -->
            </div> <!-- col-6 left side -->
            <div class="col-5 right">
                <img src="" alt="team image">
            </div> <!-- right side -->
        </div><!-- row -->
    </section> <!-- end of secttion about -->

    <section class="team container margin">
        <h1>Our Team</h1>
        <div class="row">
            <div class="col-4">
                <a href="#"><img src="" alt="team image"></a>
                <cite></cite>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente asperiores saepe illum unde, ab repellat, voluptate officiis blanditiis harum in eaque voluptas dignissimos consequatur vero. Harum nobis eaque earum?</p>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div> <!-- team social -->
            </div><!-- col-4 1 -->
            <div class="col-4">
                <a href="#"><img src="" alt="team image"></a>
                <cite>Paolo Lionel</cite>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente asperiores saepe illum unde, ab repellat, voluptate officiis blanditiis harum in eaque voluptas dignissimos consequatur vero. Harum nobis eaque earum?</p>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div> <!-- team social -->
            </div><!-- col-4 2 -->
            <div class="col-4">
                <a href="#"><img src="" alt="team image"></a>
                <cite>John Andreas</cite>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, sapiente asperiores saepe illum unde, ab repellat, voluptate officiis blanditiis harum in eaque voluptas dignissimos consequatur vero. Harum nobis eaque earum?</p>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div> <!-- team social -->
            </div><!-- col-4 3 -->
        </div><!-- row -->
    </section><!-- end of section our team -->
@endsection
