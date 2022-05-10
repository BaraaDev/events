@extends('layouts.website.master')

@section('content')
    <div class="content-wrapper">
        <!-- Stunning Header -->
        <div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds">
            <div class="container">
                <div class="stunning-header-content">

                    <div class="inline-items">
                        <h4 class="stunning-header-title">{{$event->title}}</h4>

                    <h6 class="category-link c-black">{{$event->category->name ?? ''}}</h6>
                    <h4 class="stunning-header-title">{{$event->title}}</h4>
                    <div class="icon-text-item display-flex">
                        <svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
                        <div class="text">June 25-27, {{$event->country->name ?? ''}} {{$event->governorate->name ?? ''}} {{$event->city->name ?? ''}}</div>

                    </div>
                    <div class="breadcrumbs-wrap inline-items">
                    @component('components.breadcrumbs-wrap')
                        @slot('breadcrumbs_item')
                            <li class="breadcrumbs-item">
                                <a href="{{route('allEvents')}}" class="breadcrumbs-custom">{{__('website/home.events')}}</a>
                                <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                            </li>
                        @endslot

                        @slot('breadcrumbs_item_active')
                            <li class="breadcrumbs-item active">
                                <span class="breadcrumbs-custom">{{$event->title}}</span>
                                <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                            </li>
                        @endslot
                    @endcomponent
                    </div>
                </div>
            </div>
        </div>
        <!--end Header -->


        <!-- Start Event-->
        <section class="medium-padding100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="block-rounded-shadow">
                            <h3>{{$event->title}}</h3>
                            <img src="{{$event->photo}}" alt="{{$event->title}}">
                            <p>{!! $event->description !!}</p>
                        </div>

                        <div class="comments">
{{--                            @if(!$event->comments->where('user_id',auth()->user()->id)->where('commentable_id',$event->id) != true)--}}
                                <form class="contact-form" action="{{route('comment.add')}}" method="post">
                                    @csrf
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3>{{__('website/event.add_offer_now')}}</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input name="value" placeholder="{{__('website/event.offer_value')}}" type="number" autocomplete="off" onkeyup="$('#gain_value').val($(this).val()- ($(this).val()*15/100) );$('.gain_value').text($(this).val()- ($(this).val()*15/100) );">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input disabled placeholder="{{__('website/event.you_will_get')}}" id="gain_value" type="number" autocomplete="off">
                                        </div>

                                        <input name="event_id" value="{{ $event->id }}" type="hidden" autocomplete="off">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="with-icon">
                                                <textarea name="comment_body" required placeholder="{{__('website/event.offer_details')}}" style="min-height: 160px;"></textarea>
                                                <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
                                            </div>
                                        </div>

                                        <div class="submit-block">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn--large btn--green btn--with-shadow full-width">
                                                    <span class="text">{{__('website/event.add_offer')}}</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            <div class="d-flex--content-inline">
                                <h3>{{__('website/event.provided_offers')}}</h3>
                            </div>

                            @forelse($event->comments as $comment)
                            <ol class="comments__list" id="comments{{$comment->id}}">
                                <li class="comments__item">
                                    <div class="comment-entry comment comments__article">
                                        <div class="comments__avatar">
                                            <img src="{{$comment->user->photo ?? ''}}" alt="{{$comment->user->name ?? ''}}">
                                        </div>
                                        <div class="comments__body">
                                            <div class="d-flex--content-inline">
                                                <header class="comment-meta comments__header">
                                                    <cite class="fn url comments__author">
                                                        <a href="javascript:void(0)" rel="external" class="h6">{{$comment->user->name ?? ''}}</a>
                                                    </cite>
                                                    <div class="comments__time">
                                                        <time class="published" title="{{$comment->created_at->diffForHumans()}}" datetime="{{$comment->created_at}}">{{$comment->created_at->format('dD M Y, H:m a')}}</time>
                                                    </div>
                                                </header>
                                            </div>

                                            <div class="comment-content comment">
                                                <p>{{$comment->body ?? ''}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                            @empty
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{__('website/event.Oh_snap')}} </strong>{{__('website/event.no_offers')}}
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                        <aside aria-label="sidebar" class="sidebar sidebar-right">

                            <aside class="widget w-category">
                                <h5 class="widget-title">{{__('website/event.event_card')}}</h5>
                                <ul class="category-list">
                                    <li><a>{{__('website/home.status')}}<span class="cat-count c-yellow">{{$event->status}}</span></a></li>
                                    <li><a>{{__('website/home.date_publication')}}<span class="cat-count">{{$event->created_at->format('Y-d-h')}}</span></a></li>
                                    <li><a>{{__('website/home.budget')}}<span class="cat-count">{{$event->budget}}</span></a></li>
                                    <li><a>{{__('website/home.number_applicants')}}<span class="cat-count">24</span></a></li>
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
                                <h5 class="widget-title">{{__('website/event.required_skills')}}</h5>
                                <ul class="tags-list">
                                    @forelse($event->tags as $tag)
                                        <li><a href="#">{{$tag->name}}</a></li>
                                    @empty
                                        <div class="alert alert-danger" role="alert">{{__('website/event.no_tag')}}</div>
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
