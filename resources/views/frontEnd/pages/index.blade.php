@extends('frontEnd.layouts.app')

@section('content')
<div class="slide__carosel owl-carousel owl-theme">
    <div class="slider__area slider--two bg-pngimage--4 d-flex slider__fixed--height justify-content-end align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 offset-md-3 col-md-9 col-sm-12">
                    <div class="slider__activation">
                        <div class="slide">
                            <div class="slide__inner">
                                <h6>Create New Things</h6>
                                <h1>Cocoon Promises</h1>
                                <p>Innovation, Cohesive Development</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider__area slider--two bg-pngimage--5 d-flex slider__fixed--height justify-content-end align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 offset-md-3 col-md-9 col-sm-12">
                    <div class="slider__activation">
                        <div class="slide">
                            <div class="slide__inner">
                                <h6>Create New Things</h6>
                                <h1>Cocoon Values</h1>
                                <p>Communication, Love, Adventure and nurturing of fearless explorers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider__area slider--two bg-pngimage--1 d-flex slider__fixed--height justify-content-end align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 offset-md-3 col-md-9 col-sm-12">
                    <div class="slider__activation">
                        <div class="slide">
                            <div class="slide__inner">
                                <h6>Create New Things</h6>
                                <h1>Cocoon Mission</h1>
                                <p>Transforming Pre-school to Fun school</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- You can duplicate the above block to create multiple slides -->
</div>

    <section class="junior__welcome__area section-padding--md bg-pngimage--2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">Welcome To Cocoon Pre School</h2>
                        <p>Cocoon –We’re your child’s first step towards its educational journey. A bridge between home,
                            daycare, and formal schooling is what we aim to create. At Cocoon, we aim to foster lifelong
                            learning in your little one.</p>
                    </div>
                </div>
            </div>
            <div class="row jn__welcome__wrapper align-items-center">
                <div class="col-md-12 col-lg-6 col-sm-12">
                    <div class="welcome__juniro__inner">


                        <p class="text-justify">At Cocoon, we attempt to nurture a child’s soul – not just their mind and
                            body. We encourage children to become independent and self-confident and develop a positive
                            relationship with everyone around them.</p>
                        <div class="wel__btn">
                            <a class="dcare__btn" href="https://www.cocoonpreschool.org/about-us.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-sm-12 md-mt-40 sm-mt-40">
                    <div class="jnr__Welcome__thumb">
                        <img src="{{ asset('frontEnd/assets/images/bg/19.jpg') }}" alt="bradcaump images">
                        <a class="play__btn" href="https://www.youtube.com/watch?v=MCJEkZtqlBk"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="junior__service bg-image--1 service--2 section-padding--bottom section--padding--xlg--top">
        <div class="container">
            <div class="row">
                <!-- Start Single Service -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service border__color border__color--5 bg__cat--4">
                        <div class="service__icon">
                            <img src="{{ asset('frontEnd/assets/images/service/icon/1.png') }}" alt="bradcaump images">
                             
                        </div>
                        <div class="service__details">
                            <h6 class="min62"><a href="#">Pre-Nursery / Play-Group</a></h6>

                            <div class="service__btn">
                                <a class="dcare__btn btn__f1f1f1 hover__444  min__height-btn"
                                    href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 xs-mt-60">
                    <div class="service border__color border__color--6 bg__cat--5">
                        <div class="service__icon">
                            <img src="{{ asset('frontEnd/assets/images/service/icon/2.png') }}" alt="bradcaump images">
                        </div>
                        <div class="service__details">
                            <h6 class="min62"><a href="#">Nursery / Montessori-1</a></h6>
                            <div class="service__btn">
                                <a class="dcare__btn btn__f1f1f1 hover__444 min__height-btn"
                                    href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
                    <div class="service border__color border__color--7 bg__cat--6">
                        <div class="service__icon">
                            <img src="{{ asset('frontEnd/assets/images/service/icon/3.png') }}" alt="bradcaump images">
                        
                        </div>
                        <div class="service__details">
                            <h6 class="min62"><a href="#">LKG / Montessori-2</a></h6>
                            <div class="service__btn">
                                <a class="dcare__btn btn__f1f1f1 hover__444 min__height-btn"
                                    href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
                    <div class="service border__color border__color--8 bg__cat--7">
                        <div class="service__icon">
                            <img src="{{ asset('frontEnd/assets/images/service/icon/4.png') }}" alt="bradcaump images">
       
                        </div>
                        <div class="service__details">
                            <h6 class="min62"><a href="#">UKG / Montessori-3</a></h6>
                            <div class="service__btn">
                                <a class="dcare__btn btn__f1f1f1 hover__444 min__height-btn"
                                    href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </section>


    <section class="jnr__call__to__action bg-pngimage--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div
                        class="jnr__call__action__wrap d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between align-items-center">
                        <div class="callto__action__inner">
                            <h2>How To Enroll Your Child In A class ?</h2>

                        </div>
                        <div class="callto__action__btn">
                            <a class="dcare__btn btn__white" href="{{route('contactpage')}}">Contact
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="junior__testimonial__area bg-image--2 section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <div class="testimonial__container">

                        <div class="tes__activation--1 owl-carousel owl-theme">
                            <!-- Single Testimonial Slide -->
                            <div class="testimonial__bg">
                                <div class="testimonial text-center">
                                    <div class="testimonial__inner">
                                        <div class="test__icon">
                                            <img src="{{ asset('frontEnd/assets/images/testimonial/icon/1.png') }}" alt="icon images">
                                        </div>
                                        <div class="client__details">
                                            <p>It was our first time enrolling our son in preschool so we were nervous at first, but the teachers and the rest of the staff at SpringStone are so incredible that they soon made us feel comfortable.</p>
                                            <div class="client__info">
                                                <h6>James K P</h6>
                                                <span>Doctor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Duplicate this block to add more testimonials -->
                            <div class="testimonial__bg">
                                <div class="testimonial text-center">
                                    <div class="testimonial__inner">
                                        <div class="test__icon">
                                            <img src="{{ asset('frontEnd/assets/images/testimonial/icon/1.png') }}" alt="icon images">
                                        </div>
                                        <div class="client__details">
                                            <p>It was our first time enrolling our son in preschool so we were nervous at first, but the teachers and the rest of the staff at SpringStone are so incredible that they soon made us feel comfortable.</p>
                                            <div class="client__info">
                                                <h6>Sarah M</h6>
                                                <span>Engineer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- x --}}


    <section class="junior__gallery__area bg--white section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">Our Gallery</h2>

                    </div>
                </div>
            </div>
            <div class="row galler__wrap mt--40">

                @foreach ($imageGallery as $gallery)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="gallery wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="gallery__thumb">
                                <a href="#">
                                    <img src="{{ asset('uploads/'.$gallery->image) }}"
                                        alt="gallery images">
                                </a>
                            </div>
                            <div class="gallery__hover__inner">
                                <div class="gallery__hover__action">
                                    <ul class="gallery__zoom">
                                        <li><a href="{{ asset('uploads/'.$gallery->image) }}"
                                                data-lightbox="grportimg" data-title="My caption"><i
                                                    class="fa fa-search"></i></a></li>

                                    </ul>
                                    <h4 class="gallery__title"><a href="#">Cocoon Pre School</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
