@extends('frontend.layouts.app')

@section('content')
<style>

  #forImages img{
    width: 100% !important;
    height: auto !important;
  }
</style>
<!-- main begin -->

<section class="main">
  <div class="my-container">
    <div class="row">
      <div class="col-md-9">
        <div class="contact-wrapper">
          <div class="my-container d-block" style="padding: 0 15px !important;">
            <div class="top p-3">
              <h4>{{$page['title_'.session('lang')]}}</h4>
            </div>
            <div class="py-3" id="forImages">
              {!! $page['content_'.session('lang')] !!}
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="links">
          <ul>
            @if (count($pages) > 0)
              @foreach ($pages as $news)
              <li>
                <a href="{{route('pagesSingle', $news->slug)}}" class="
                  @if ($page->id === $news->id)
                    active  
                  @endif 
                  ">
                  {{$news['title_'.session('lang')]}}
                </a>
              </li>
              @endforeach
            @else
              <li>
                <a href="Javascript:void(0);" class="h5">Foydali halovalar</a>
              </li>
              @foreach ($links as $link)
              <li>
                <a href="{{$link->link}}">
                  {{$link['title_'.session('lang')]}}
                </a>
              </li>
              @endforeach
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- main end -->
@endsection