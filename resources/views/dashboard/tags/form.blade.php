<div class="tab-pane fade mt-4 show active " id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="col-md-12">
        <input class="form-control @error('name_ar') is-invalid @enderror" value="{{Request::old('name_ar') ? Request::old('name_ar') : $model->getTranslation('name','ar')}}" type="text" name="name_ar" placeholder="{{__('admin/tag.Enter_tag_name_ar')}}" autocomplete="off">
        @error('name_ar')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="tab-pane fade mt-4" id="en" role="tabpanel" aria-labelledby="en-tab">
    <div class="col-md-12">
        <input class="form-control @error('name_en') is-invalid @enderror" value="{{Request::old('name_en') ? Request::old('name_en') : $model->getTranslation('name','en')}}" type="text" name="name_en" placeholder="{{__('admin/tag.Enter_tag_name_en')}}" autocomplete="off">
        @error('name_en')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="tab-pane fade mt-4" id="fr" role="tabpanel" aria-labelledby="fr-tab">
    <div class="col-md-12">
        <input class="form-control @error('name_fr') is-invalid @enderror" value="{{Request::old('name_fr') ? Request::old('name_fr') : $model->getTranslation('name','fr')}}" type="text" name="name_fr" placeholder="{{__('admin/tag.Enter_tag_name_fr')}}" autocomplete="off">
        @error('name_fr')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>