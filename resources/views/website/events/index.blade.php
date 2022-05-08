@extends('layouts.website.master')

@section('content')
    <div class="content-wrapper">

        <!-- Stunning Header -->

        <div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds">
            <div class="container">
                <div class="stunning-header-content">
                    <div class="inline-items">
                        <h4 class="stunning-header-title">Our Latest Events</h4>

                        <a href="15_pricing_tables.html" class="btn btn--green btn--with-shadow f-right">
                            Get trial version
                        </a>
                    </div>
                    <div class="breadcrumbs-wrap inline-items">
                        <a href="#" class="btn btn--primary btn--round breadcrumbs-custom">
                            <svg class="utouch-icon utouch-icon-home-icon-silhouette breadcrumbs-custom"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
                        </a>

                        <ul class="breadcrumbs breadcrumbs--rounded">
                            <li class="breadcrumbs-item">
                                <a href="08_events.html" class="breadcrumbs-custom">Events</a>
                                <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                            </li>
                            <li class="breadcrumbs-item active">
                                <span class="breadcrumbs-custom">Presentation of the Utouch app</span>
                                <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- ... end Stunning Header -->


        <!-- Curriculum Events -->

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
                                                <div class="author-prof">Speaker</div>
                                                <a href="#" class="h6 author-name">{{$event->user->name ?? ''}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay-standard overlay--primary"></div>
                                </div>
                                <div class="curriculum-event-content">
                                    <div class="icon-text-item display-flex">
                                        <svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
                                        <div class="text">May 17-19, {{$event->country->name ?? ''}}</div>
                                    </div>
                                    <a href="#" class="h5 title">{{$event->title}}</a>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
                    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                        <div class="btn-slider-wrap pt80">

                            <div class="btn-prev btn--style">
                                <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                                <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                                <span>Prev Page</span>
                            </div>

                            <div class="btn-next btn--style">
                                <span>Next Page</span>
                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                                <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ... end Curriculum Events -->

    </div>
@endsection

