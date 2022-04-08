@extends('layouts.admin.master')

@section('title') {{__('admin/tag.edit')}} ({{$model->getTranslation('name','ar')}}) @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/tag.create')}}</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{route('tags.index')}}">{{__('admin/tag.tags')}}</a> </li>
        <li class="breadcrumb-item active">{{__('admin/tag.create')}}</li>
        @slot('bookmark')
            <a href="{{route('tags.create')}}" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="{{__('admin/tag.addTag')}}">{{__('admin/tag.addTag')}}</a>
        @endslot
    @endcomponent
    @include('layouts.admin.partials.validation-errors')
    <div class="col-sm-12 col-xl-6 xl-100">
        <div class="card">
            <div class="card-header pb-0">
                <h5>{{__('admin/tag.addTag')}}</h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="ar-tab" data-bs-toggle="pill" href="#ar" role="tab" aria-controls="ar" aria-selected="true">{{__('admin/home.arabic')}}<div class="media"></div></a></li>
                    <li class="nav-item"><a class="nav-link" id="en-tab" data-bs-toggle="pill" href="#en" role="tab" aria-controls="en" aria-selected="false">{{__('admin/home.english')}}</a></li>
                    <li class="nav-item"><a class="nav-link" id="fr-tab" data-bs-toggle="pill" href="#fr" role="tab" aria-controls="fr" aria-selected="false">{{__('admin/home.french')}}</a></li>
                </ul>
                <div class="tab-content " id="pills-tabContent">
                    <form action="{{route('tags.update',$model->id)}}" method="post">
                        @csrf
                        {{ method_field('put') }}
                        @include('dashboard.tags.form')
                        <button class="btn btn-success mt-4 d-block me-auto" type="submit">{{__('admin/tag.add_new')}}</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection