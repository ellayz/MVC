@extends('templates.default')

@section('body')
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                @for ($i = 0, $j = $i + 1; $i <= 3; $i++, $j++)
                    <!-- Featured Project Row-->
                    <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                        <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{$img[$i]}}" alt="..." /></div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="featured-text text-center text-lg-left">
                                <h4>Model {{$j}}</h4>
                                <p class="text-black-50 mb-0">It is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </section>   
@endsection
     