@extends('layouts.admin.master')

@section('title') {{__('admin/tag.all_tags')}} @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/tag.tags')}}</h3>
        @endslot
        <li class="breadcrumb-item active">{{__('admin/tag.tags')}}</li>
        @slot('bookmark')
            <a href="{{route('tags.create')}}" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="{{__('admin/tag.addTag')}}">{{__('admin/tag.addTag')}}</a>
        @endslot
    @endcomponent

    @include('layouts.admin.partials.messages.message')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        <h5>{{__('admin/tag.showTag')}} - <span class="b-b-success badge-dark">{{App\Models\Tag::count()}}</span></h5>
                        <span>{{__('admin/tag.DescriptionTag')}}</span>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">{{__('admin/tag.NameTag')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($tags as $tag)
                                    <tr>
                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$tag->name}}</td>
                                        <td class="text-center">{{$tag->created_at->format('Y-D-M')}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                                'route' => ['tags.destroy',$tag->id],
                                                'method' => 'delete'
                                            ])!!}
                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirm')}}');" type="submit" title="{{__('admin/home.delete')." ($tag->name)"}}">{{__('admin/home.delete')}} </button>

                                            <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.edit')." ($tag->name)"}}"><li class="icon-pencil"></li> {{__('admin/home.edit')}}</a>
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
                        {!! $tags->links('pagination::bootstrap-4') !!}
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
