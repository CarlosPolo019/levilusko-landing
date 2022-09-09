@extends('layouts.default')
@section('content')
<section id="first" class="wow animate__animated animate__fadeInDown">
        <img src="{{URL::asset('icons/lightning.svg')}}" alt="lightning" height="63px" width="38px" />
        <span>LOREM IPSUM</span>
        <h1>LEVI <span>LUSKO</span></h1>
        <span>Pastor of Fresh Life Church. Best-Selling</span>
        <span>author. Father of five with his wife Jennie.</span>
      </section>
      <section id="second" class="parallax wow animate__animated animate__fadeIn"></section>
      <section id="third">
        <b class="wow animate__animated animate__bounceInLeft">
          Levi and Jennie Lusko pioneered Fresh Life Church in 2007. Under their leadership it has grown to include locations in
          Montana, Utah, Oregon, and Wyoming.
        </b>
        <div class="wow animate__animated animate__bounceInRight">
          <b>ABOUT</b>
          <span>
            Through television and online streaming the ministry reaches around the world. Levi and Jennie have one son: Lennox,
            and four daughters: Alivia, Daisy, Clover, and Lenya, who is in heaven. Levi is also the author of the bestselling
            books Through the Eyes of a Lion, Swipe Right and I Declare War.
          </span>
        </div>
      </section>
      <section id="fourth">
        <img
          class="wow animate__animated animate__slideInLeft"
          src="{{URL::asset('images/gallery-1.png')}}"
          alt="gallery-1"
          height="660px"
          width="440px"
        />
        <img
          class="wow animate__animated animate__slideInLeft"
          src="{{URL::asset('images/gallery-2.png')}}"
          alt="gallery-2"
          height="660px"
          width="440px"
        />
        <img
          class="wow animate__animated animate__slideInLeft"
          src="{{URL::asset('images/gallery-3.png')}}"
          alt="gallery-3"
          height="660px"
          width="440px"
        />
        <img
          class="wow animate__animated animate__slideInLeft"
          src="{{URL::asset('images/gallery-4.png')}}"
          alt="gallery-4"
          height="660px"
          width="440px"
        />
        <img
          class="wow animate__animated animate__slideInLeft"
          src="{{URL::asset('images/gallery-5.png')}}"
          alt="gallery-5"
          height="660px"
          width="440px"
        />
        <img
          class="wow animate__animated animate__slideInLeft"
          src="{{URL::asset('images/gallery-6.png')}}"
          alt="gallery-6"
          height="660px"
          width="440px"
        />
      </section>
      <section id="fifth" class="wow animate__animated animate__fadeIn">
        <img id="books" class="books" src="{{URL::asset('images/books.png')}}" alt="books" width="100%" />
        <div class="typewriter">
          <b>Books</b>
        </div>
        <a class="arrow wow animate__animated animate__heartBeat animate__infinite" href="#">
          <img src="{{URL::asset('icons/arrow.svg')}}" alt="arrow" height="10px" width="36px" />
        </a>
      </section>
@stop