<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'ar') show active @endif" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/service.service')}} <span class="text-danger">*</span></label>
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
        <label class="form-label col-lg-3">{{__('admin/service.description')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('description_ar') is-invalid @enderror" type="text" name="description_ar">{{Request::old('description_ar') ? Request::old('description_ar') : $model->getTranslation('description','ar')}}</textarea>
            @error('description_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/service.price')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('price_ar') is-invalid @enderror" type="text" name="price_ar">{{Request::old('price_ar') ? Request::old('price_ar') : $model->getTranslation('price','ar')}}</textarea>
            @error('price_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/service.address')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <textarea class="form-control @error('address_ar') is-invalid @enderror" type="text" name="address_ar">{{Request::old('address_ar') ? Request::old('address_ar') : $model->getTranslation('address','ar')}}</textarea>
        @error('address_ar')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
</div>
</div>



<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'en') show active @endif" id="en" role="tabpanel" aria-labelledby="en-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/service.service')}} <span class="text-danger">*</span></label>
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
        <label class="form-label col-lg-3">{{__('admin/service.description')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('description_en') is-invalid @enderror" type="text" name="description_en">{{Request::old('description_en') ? Request::old('description_en') : $model->getTranslation('description','en')}}</textarea>
            @error('description_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/service.price')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('price_en') is-invalid @enderror" type="text" name="price_en">{{Request::old('price_en') ? Request::old('price_en') : $model->getTranslation('price','en')}}</textarea>
            @error('price_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/service.address')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <textarea class="form-control @error('address_en') is-invalid @enderror" type="text" name="address_en">{{Request::old('address_en') ? Request::old('address_en') : $model->getTranslation('address','en')}}</textarea>
        @error('address_en')
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
        <label class="form-label col-lg-3">{{__('admin/service.service')}} <span class="text-danger">*</span></label>
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
        <label class="form-label col-lg-3">{{__('admin/service.description')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('description_fr') is-invalid @enderror" type="text" name="description_fr">{{Request::old('description_fr') ? Request::old('description_fr') : $model->getTranslation('description','fr')}}</textarea>
            @error('description_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/service.price')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('price_fr') is-invalid @enderror" type="text" name="price_fr">{{Request::old('price_fr') ? Request::old('price_fr') : $model->getTranslation('price','fr')}}</textarea>
            @error('price_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>


</div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/event.available_date')}} <span class="text-danger">*</span> </label>
    <div class="col-lg-9">
        <input class="form-control @error('available_date') is-invalid @enderror" value="{{Request::old('available_date') ? Request::old('available_date') : $model->available_date}}" type="date" name="available_date" autocomplete="off">
        @error('available_date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/category.category')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('category','App\Models\Category')
        {!! Form::select('category_id',$category->pluck('name','id'),Request::old('category_id') ? Request::old('category_id') : $model->category_id,[
        'placeholder' => __('admin/home.select'),
        'class' => 'form-control select'. ( $errors->has('category_id') ? ' is-invalid' : '' )
        ]) !!}
        @error('category_id')
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