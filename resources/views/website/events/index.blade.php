@extends('layouts.website.master')

@section('content')
    <div class="content-wrapper">
        <!-- Start Header -->
        <div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds">
            <div class="container">
                <div class="stunning-header-content">
                    @if(auth()->user())
                        @if(auth()->user()->user_type == 'customer')
                        <div class="inline-items">
                            <h4 class="stunning-header-title">{{__('website/event.your_latest_events')}}</h4>
                            <a href="{{route('event.create')}}" class="btn btn--green btn--with-shadow f-right">
                                {{__('website/event.add_event')}}
                            </a>
                        </div>
                        @endif
                    @endif
                    <div class="breadcrumbs-wrap inline-items">
                        @component('components.breadcrumbs-wrap')
                            @slot('breadcrumbs_item_active')
                                <li class="breadcrumbs-item active">
                                    <span class="breadcrumbs-custom">{{__('website/home.events')}}</span>
                                    <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                                </li>
                            @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
        </div><!-- end Header -->

        <!-- Start Events -->
        <section class="medium-padding100">
            <div class="container">
                <div class="row">
                    <div class="curriculum-event-wrap">
                        @forelse($events as $event)
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="curriculum-event c-primary" data-mh="curriculum">
                                <div class="curriculum-event-thumb">
                                    <img src="{{$event->photo}}" alt="{{$event->title}}">
                                    <div class="category-link c-yellow">{{$event->category->name ?? ''}}</div>

                                    <div class="curriculum-event-content">
                                        <div class="author-block inline-items">
                                            <div class="author-avatar">
                                                <img src="{{$event->user->photo}}" alt="{{$event->user->name ?? ''}}">
                                            </div>
                                            <div class="author-info">
                                                <a href="#" class="h6 author-name">{{$event->user->name ?? ''}}</a>
                                                <div class="author-prof">({{$event->user->user_type ?? ''}})</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay-standard overlay--primary"></div>
                                </div>
                                <div class="curriculum-event-content">
                                    <div class="icon-text-item display-flex">
                                        <svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
                                        <div class="text">
                                            {{$event->created_at->format('D d-Y')}} –
                                            <a href="{{route('event.country',$event->country_id)}}">{{$event->country->name ?? ''}}</a> ,
                                            <a href="{{route('event.governorate',$event->governorate_id)}}">{{$event->governorate->name ?? ''}}</a> ,
                                            <a href="{{route('event.city',$event->city_id)}}">{{$event->city->name ?? ''}}</a>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-sm-8 col-md-8">
                                            <div class="c-green">{{$event->status ?? ''}}</div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4">
                                            <div class="c-green" style="float: left; margin: 0 auto;">{{$event->budget}} USD</div>
                                        </div>
                                    </div>
                                    <a href="{{route('event.show',$event->id)}}" class="h5 title">{{$event->title}}</a>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="alert alert-danger" role="alert">
                                {{__('website/event.no_events')}}
                            </div>
                        @endforelse
                    </div>
                    {!! $events->links('pagination::simple-default') !!}
                </div>
            </div>
        </section><!-- end Events -->
    </div>
@endsection

