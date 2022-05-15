<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'ar') show active @endif" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.slider')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('name_ar') is-invalid @enderror" value="{{Request::old('name_ar') ? Request::old('name_ar') : $model->getTranslation('name','ar')}}" type="text" name="name_ar" placeholder="{{__('admin/home.Enter_name_ar')}}" autocomplete="off">
            @error('name_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.title')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('title_ar') is-invalid @enderror" type="text" name="title_ar">{{Request::old('title_ar') ? Request::old('title_ar') : $model->getTranslation('title','ar')}}</textarea>
            @error('title_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.content')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('content_ar') is-invalid @enderror" type="text" name="content_ar">{{Request::old('content_ar') ? Request::old('content_ar') : $model->getTranslation('content','ar')}}</textarea>
            @error('content_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.name_button')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('name_button_ar') is-invalid @enderror" type="text" name="name_button_ar">{{Request::old('name_button_ar') ? Request::old('name_button_ar') : $model->getTranslation('name_button','ar')}}</textarea>
            @error('name_button_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.link_button')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('link_button_ar') is-invalid @enderror" type="text" name="link_button_ar">{{Request::old('link_button') ? Request::old('link_button') : $model->getTranslation('link_button')}}</textarea>
            @error('link_button')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'en') show active @endif" id="en" role="tabpanel" aria-labelledby="en-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.slider')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('name_en') is-invalid @enderror" value="{{Request::old('name_en') ? Request::old('name_en') : $model->getTranslation('name','en')}}" type="text" name="name_en" placeholder="{{__('admin/home.Enter_name_en')}}" autocomplete="off">
            @error('name_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.title')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('title_en') is-invalid @enderror" type="text" name="title_en">{{Request::old('title_en') ? Request::old('title_en') : $model->getTranslation('title','en')}}</textarea>
            @error('title_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/slider.content')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <textarea class="form-control @error('content_en') is-invalid @enderror" type="text" name="content_en">{{Request::old('content_en') ? Request::old('content_en') : $model->getTranslation('content','en')}}</textarea>
        @error('content_en')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/slider.name_button')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <textarea class="form-control @error('name_button_en') is-invalid @enderror" type="text" name="name_button_en">{{Request::old('name_button_en') ? Request::old('name_button_en') : $model->getTranslation('name_button','en')}}</textarea>
        @error('name_button_en')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/slider.link_button')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <input class="form-control @error('link_button') is-invalid @enderror" type="text" name="link_button">{{Request::old('link_button') ? Request::old('link_button') : $model->getTranslation('link_button')}}</input>
        @error('link_button')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
</div>
</div>

<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'fr') show active @endif" id="fr" role="tabpanel" aria-labelledby="fr-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.slider')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('name_fr') is-invalid @enderror" value="{{Request::old('name_fr') ? Request::old('name_fr') : $model->getTranslation('name','fr')}}" type="text" name="name_fr" placeholder="{{__('admin/home.Enter_name_fr')}}" autocomplete="off">
            @error('name_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/home.status')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <select name="status" class="form-control select @error('status') is-invalid @enderror">
                <option>{{__('admin/home.select')}}</option>
                <option value="1" {{ isset($model) && $model->status == 1 ? 'selected'  : '' }}>{{__('admin/home.available')}}</option>
                <option value="0" {{ isset($model) && $model->status == 0 ? 'selected'  : '' }}>{{__('admin/home.stopped')}}</option>
            </select>
            @error('status')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>