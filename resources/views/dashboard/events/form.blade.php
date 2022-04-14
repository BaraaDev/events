<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'ar') show active @endif" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.event')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('title_ar') is-invalid @enderror" value="{{Request::old('title_ar') ? Request::old('title_ar') : $model->getTranslation('title','ar')}}" type="text" name="title_ar" placeholder="{{__('admin/home.Enter_title_ar')}}" autocomplete="off">
            @error('title_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.location')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('location_ar') is-invalid @enderror" value="{{Request::old('location_ar') ? Request::old('location_ar') : $model->getTranslation('location','ar')}}" type="text" name="location_ar" placeholder="{{__('admin/home.Enter_location_ar')}}" autocomplete="off">
            @error('location_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'en') show active @endif" id="en" role="tabpanel" aria-labelledby="en-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.event')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('title_en') is-invalid @enderror" value="{{Request::old('title_en') ? Request::old('title_en') : $model->getTranslation('title','en')}}" type="text" name="title_en" placeholder="{{__('admin/home.Enter_title_en')}}" autocomplete="off">
            @error('title_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.location')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('location_en') is-invalid @enderror" value="{{Request::old('location_en') ? Request::old('location_en') : $model->getTranslation('location','en')}}" type="text" name="location_en" placeholder="{{__('admin/home.Enter_location_en')}}" autocomplete="off">
            @error('location_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'fr') show active @endif" id="fr" role="tabpanel" aria-labelledby="fr-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.event')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('title_fr') is-invalid @enderror" value="{{Request::old('title_fr') ? Request::old('title_fr') : $model->getTranslation('title','fr')}}" type="text" name="title_fr" placeholder="{{__('admin/home.Enter_title_fr')}}" autocomplete="off">
            @error('title_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.location')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('location_fr') is-invalid @enderror" value="{{Request::old('location_fr') ? Request::old('location_fr') : $model->getTranslation('location','fr')}}" type="text" name="location_fr" placeholder="{{__('admin/home.Enter_location_fr')}}" autocomplete="off">
            @error('location_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/event.time')}} <span class="text-danger">*</span> </label>
    <div class="col-lg-9">
        <input class="form-control @error('time') is-invalid @enderror" value="{{Request::old('time') ? Request::old('time') : $model->time}}" type="time" name="time" autocomplete="off">
        @error('time')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/event.date')}} <span class="text-danger">*</span> </label>
    <div class="col-lg-9">
        <input class="form-control @error('date') is-invalid @enderror" value="{{Request::old('date') ? Request::old('date') : $model->date}}" type="date" name="date" autocomplete="off">
        @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/event.budget')}} <span class="text-danger">*</span> </label>
    <div class="col-lg-9">
        <input class="form-control @error('budget') is-invalid @enderror" value="{{Request::old('budget') ? Request::old('budget') : $model->budget}}" type="number" name="budget" placeholder="{{__('admin/event.enter_budget')}}" autocomplete="off">
        @error('budget')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/event.category')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('category','App\Models\Category')

        {!! Form::select('category_id',$category->pluck('name','id'),Request::old('category_id') ? Request::old('category_id') : $model->category_id,[
            'placeholder' => __('admin/home.select'),
            'class'       => 'form-control select'
        ]) !!}
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/home.user')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('user','App\Models\User')

        {!! Form::select('user_id',$user->pluck('name','id'),Request::old('user_id') ? Request::old('user_id') : $model->user_id,[
            'placeholder' => __('admin/home.select'),
            'class'       => 'form-control select'
        ]) !!}
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/home.country')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('country','App\Models\Country')

        {!! Form::select('country_id',$country->pluck('name','id'),Request::old('country_id') ? Request::old('country_id') : $model->country_id,[
            'placeholder' => __('admin/home.select'),
            'class'       => 'form-control select'
        ]) !!}
    </div>
</div>
