@extends('layouts.admin.master')

@section('title') {{__('admin/city.all_cities')}} @endsection

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>{{__('admin/city.cities')}}</h3>
@endslot
<li class="breadcrumb-item active">{{__('admin/city.cities')}}</li>
@slot('bookmark')
<a href="{{route('cities.create')}}" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="{{__('admin/city.addCity')}}">{{__('admin/city.addCity')}}</a>
@endslot
@endcomponent
@include('layouts.admin.partials.messages.message')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('admin/city.showCities')}}</h5>
                    <span>{{__('admin/city.cityDescription')}}</span>
                </div>
                <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">{{__('admin/city.cityNames')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/governorate.NameGovernorate')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/country.NameCountry')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.update_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($cities as $city)
                                    <tr>
                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$city->name}}</td>
                                        <td class="text-center">{{$city->governorate->name ?? 'Error - contact Dev'}}</td>
                                        <td class="text-center">{{$city->country->name ?? 'Error - contact Dev'}}</td>
                                        <td class="text-center">{{$city->created_at->format('Y-D-M')}}</td>
                                        <td class="text-center">{{$city->create_user->name ?? 'Error - contact Dev'}}</td>
                                        <td class="text-center">{{$city->update_user->name ?? 'Error - contact Dev'}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                            'route' => ['cities.destroy',$city->id],
                                            'method' => 'delete'
                                            ])!!}
                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirm')}}');" type="submit" title="{{__('admin/home.delete')." ($city->name)"}}">{{__('admin/home.delete')}} </button>
                                            <a href="{{route('cities.edit',$city->id)}}" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.edit')." ($city->name)"}}">
                                                <li class="icon-pencil"></li> {{__('admin/home.edit')}}
                                            </a>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>

                                    @empty
                                    <div class="alert alert-primary">
                                        {{__('admin/home.alert_no_data')}}
                                    </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="m-b-30" aria-label="Page navigation example">
                <ul class="pagination justify-content-center pagination-primary">
                    {!! $cities->links('pagination::bootstrap-4') !!}
                </ul>
            </nav>
        </div>
    </div>
</div>


@push('scripts')
<script src="{{asset('admin/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap/bootstrap.min.js')}}"></script>
@endpush

@endsection