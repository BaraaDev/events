@extends('layouts.website.master')

@section('content')
    <div class="content-wrapper">
        <!-- Start Header -->
        <div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left custom-color c-white fill-white">
            <div class="container">
                <div class="stunning-header-content">
                    <h6 class="category-link c-yellow-light">{{$event->category->name ?? ''}}</h6>
                    <h4 class="stunning-header-title">{{$event->title}}</h4>
                    <div class="icon-text-item display-flex">
                        <svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
                        <div class="text">June 25-27, {{$event->country->name ?? ''}} {{$event->governorate->name ?? ''}} {{$event->city->name ?? ''}}</div>
                    </div>

                    <div class="breadcrumbs-wrap inline-items">
                        <a href="{{route('home')}}" class="btn btn--black btn--round breadcrumbs-custom">
                            <svg class="utouch-icon utouch-icon-home-icon-silhouette breadcrumbs-custom">
                                <use xlink:href="#utouch-icon-home-icon-silhouette"></use>
                            </svg>
                        </a>

                        <ul class="breadcrumbs breadcrumbs--rounded">
                            <li class="breadcrumbs-item">
                                <a href="{{route('allEvents')}}" class="breadcrumbs-custom">Events</a>
                                <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom">
                                    <use xlink:href="#utouch-icon-media-play-symbol"></use>
                                </svg>
                            </li>
                            <li class="breadcrumbs-item active">
                                <span class="breadcrumbs-custom">{{$event->title}}</span>
                                <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom">
                                    <use xlink:href="#utouch-icon-media-play-symbol"></use>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="overlay-standard overlay--yellow"></div>
        </div>
        <!-- end Header -->


        <!-- Start Event-->
        <section class="medium-padding100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="block-rounded-shadow">
                            <h3>{{$event->title}}</h3>
                            <p>
                                Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
                                humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                parum clari, fiant sollemnes in futurum. Claritas est etiam processus dynamicus, qui sequitur mutationem
                                consuetudium.
                            </p>

                        </div>
                        <div class="comments">

                            <form class="form-validate contact-form leave-reply" method="post">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3>Add your offer now</h3>
                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input name="name" placeholder="Your Name" type="text">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input name="email" placeholder="Email Adress" type="text">

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="with-icon">
                                            <textarea name="message" class="" required="" placeholder="Offer details" style="min-height: 160px;"></textarea>
                                            <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
                                        </div>
                                    </div>

                                    <div class="submit-block">
                                        <div class="col-lg-12">
                                            <button class="btn btn--large btn--green btn--with-shadow full-width">
                                                <span class="text">Submit</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="d-flex--content-inline">
                                <h3>Provided Offers</h3>


                            </div>

                            <ol class="comments__list">
                                <li class="comments__item">
                                    <div class="comment-entry comment comments__article">
                                        <div class="comments__avatar">
                                            <img src="{{asset('admin/images/dashboard/1.png')}}" alt="avatar">
                                        </div>


                                        <div class="comments__body">
                                            <div class="d-flex--content-inline">
                                                <header class="comment-meta comments__header">
                                                    <cite class="fn url comments__author">
                                                        <a href="#" rel="external" class="h6">Susan Simpson</a>
                                                    </cite>
                                                    <div class="comments__time">
                                                        <time class="published" datetime="2017-03-19 10:07:00">19th March 2017, 10:07 am</time>
                                                    </div>
                                                </header>
                                            </div>

                                            <div class="comment-content comment">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                                    lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                                    anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                        <aside aria-label="sidebar" class="sidebar sidebar-right">

                            <aside class="widget w-category">
                                <h5 class="widget-title">Event Card</h5>
                                <ul class="category-list">
                                    <li>
                                        <a href="#">Status
                                            <span class="cat-count c-yellow">{{$event->status}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>Date Publication
                                            <span class="cat-count">{{$event->created_at->format('Y-d-h')}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>Budget
                                            <span class="cat-count">{{$event->budget}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Number Of Applicants
                                            <span class="cat-count">24</span>
                                        </a>
                                    </li>

                                </ul>
                            </aside>

                            <aside class="widget w-author">
                                <div class="testimonial-img-author">
                                    <img src="{{$event->user->photo ?? ''}}" alt="author">
                                    <div class="socials">

                                        <a href="http://facebook.com/{{$event->user->facebook ?? ''}}" target="_blank" rel="nofollow" class="social__item">
                                            <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/>
                                            </svg>
                                        </a>

                                        <a href="http://twitter.com/{{$event->user->twitter ?? ''}}" target="_blank" rel="nofollow" class="social__item">
                                            <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <a href="#" class="h5 title">{{$event->user->name ?? ''}}</a>
                                <p class="contacts-text">{{$event->user->address ?? ''}}</p>

                                <div class="contact-item display-flex">
                                    <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
                                    <span class="info"><a href="tel://{{$event->user->phone ?? ''}}">{{$event->user->phone ?? ''}}</a> </span>
                                </div>

                                <div class="contact-item display-flex">
                                    <svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
                                    <span class="info"><a href="mailto://{{$event->user->email ?? ''}}">{{$event->user->email ?? ''}}</a> </span>
                                </div>
                            </aside>

                            <aside class="widget w-tags">
                                <h5 class="widget-title">Required skills</h5>
                                <ul class="tags-list">
                                    @forelse($event->tags as $tag)
                                        <li>
                                            <a href="#">{{$tag->name}}</a>
                                        </li>
                                    @empty

                                    @endforelse
                                </ul>
                            </aside>
                        </aside>
                    </div>
                </div>
            </div>
        </section><!-- end Event-->
    </div>
@endsection
