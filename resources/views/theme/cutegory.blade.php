@extends('theme.master')

@section('title','cutegory')
@section('cutegory','active')



@section('content')

@include('theme.partials.hero',['titel' =>  $categoryName  ])
       


  <!--================ Start Blog Post Area =================-->
  <section class="blog-post-area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            @if (isset($blo) && count($blo) > 0)
              @foreach ($blo as $blog)
              <div class="col-md-6">
                <div class="single-recent-blog-post card-view">
                  <div class="thumb">
                    <img class="card-img rounded-0" src="{{asset("storage/blog/$blog->image")}}" alt="">
                    <ul class="thumb-info">
                      <li><a href="#"><i class="ti-user"></i>{{$blog->user->name}}</a></li>
                      <li><a href="#"><i class="ti-themify-favicon"></i>{{count($blog->comments)}} Comments</a></li>
                    </ul>
                  </div>
                  <div class="details mt-20">
                    <a href="{{route('blogs.show', ['blog'=>$blog])}}">
                      <h3>{{$blog->name}}</h3>
                    </a>
                    <p>{{$blog->description}}</p>
                    <a class="button" href="{{route('blogs.show', ['blog'=>$blog])}}">Read More <i class="ti-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              @endforeach  
            @endif
          </div>



          

          <div class="row">
            <div class="col-lg-12">
                <nav class="blog-pagination justify-content-center d-flex">
                  @if (isset($blo) && count($blo) > 0)
                  {{ $blo->render("pagination::bootstrap-4") }}
                  @endif
                </nav>
            </div>
          </div>
        </div>

@include('theme.partials.sidebar')
      </div>
  </section>
  <!--================ End Blog Post Area =================-->


  @endsection