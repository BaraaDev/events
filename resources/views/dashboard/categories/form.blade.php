<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'ar') show active @endif" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="col-md-12">
        <label class="form-label">{{__('admin/category.category')}}: </label>
        <input class="form-control @error('name_ar') is-invalid @enderror" value="{{Request::old('name_ar') ? Request::old('name_ar') : $model->getTranslation('name','ar')}}" type="text" name="name_ar" placeholder="{{__('admin/home.Enter_name_ar')}}" autocomplete="off">
        @error('name_ar')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="col-md-12">
        <label class="form-label">{{__('admin/category.content')}}: </label>
        <textarea class="form-control @error('content_ar') is-invalid @enderror" type="text" name="content_ar">{{Request::old('content_ar') ? Request::old('content_ar') : $model->getTranslation('content','ar')}}</textarea>
        @error('content_ar')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'en') show active @endif" id="en" role="tabpanel" aria-labelledby="en-tab">
    <div class="col-md-12">
        <label class="form-label">{{__('admin/category.category')}}: </label>
        <input class="form-control @error('name_en') is-invalid @enderror" value="{{Request::old('name_en') ? Request::old('name_en') : $model->getTranslation('name','en')}}" type="text" name="name_en" placeholder="{{__('admin/home.Enter_name_en')}}" autocomplete="off">
        @error('name_en')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-12">
        <label class="form-label">{{__('admin/category.content')}}: </label>
        <textarea class="form-control @error('content_en') is-invalid @enderror" type="text" name="content_en">{{Request::old('content_en') ? Request::old('content_en') : $model->getTranslation('content','en')}}</textarea>
        @error('content_en')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'fr') show active @endif" id="fr" role="tabpanel" aria-labelledby="fr-tab">
    <div class="col-md-12">
        <label class="form-label">{{__('admin/category.category')}}: </label>
        <input class="form-control @error('name_fr') is-invalid @enderror" value="{{Request::old('name_fr') ? Request::old('name_fr') : $model->getTranslation('name','fr')}}" type="text" name="name_fr" placeholder="{{__('admin/home.Enter_name_fr')}}" autocomplete="off">
        @error('name_fr')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-12">
        <label class="form-label">{{__('admin/category.content')}}: </label>
        <textarea class="form-control @error('content_fr') is-invalid @enderror" type="text" name="content_fr">{{Request::old('content_fr') ? Request::old('content_fr') : $model->getTranslation('content','fr')}}</textarea>
        @error('content_fr')
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
