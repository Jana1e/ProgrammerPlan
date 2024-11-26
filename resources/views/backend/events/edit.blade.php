@extends('backend.layouts.app')

@section('content')

@php
    CoreComponentRepository::instantiateShopRepository();
    CoreComponentRepository::initializeCache();
@endphp

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Event Information')}}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
            
                	@csrf
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Name')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $event->name }}" required>
                        </div>
                    </div>
                   
                  
                  
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Category')}}</label>
                        <div class="col-md-9">
                            <select class="select2 form-control aiz-selectpicker" name="category_id" data-toggle="select2" data-placeholder="Choose ..."data-live-search="true" data-selected="{{ $event->category_id }}">
                                @include('backend.product.categories.categories_option_edit', ['categories' => $categories])
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('image')}}</label>
                        <div class="col-md-9">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="image" class="selected-files" value="{{ $event->image }}">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                            <small class="text-muted">{{ translate('Minimum dimensions required: 16px width X 16px height.') }}</small>
                        </div>
                    </div>
                 
               
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Location')}}</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Location')}}" id="location" name="location"   value="{{ $event->location }}"  class="form-control" required>
                        </div>
                    </div>
                 

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Start Date & Time')}}</label>
                        <div class="col-md-9">
                            <input type="datetime-local" placeholder="{{translate('Start Date & Time')}}" id="start_date" name="start_date"  value="{{ $event->start_date->format('Y-m-d\TH:i') }}" class="form-control" required>
                        </div>
                    </div>   

                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Registration Link')}}</label>
                        <div class="col-md-9">
                            <input type="url" placeholder="{{translate('Registration Link')}}" id="registration_link" name="registration_link" value="{{ $event->registration_link }}"  class="form-control" required>
                        </div>
                    </div>
       
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Description')}}</label>
                        <div class="col-md-9">
                            <textarea name="description" rows="5" class="form-control">{{ $event->description }}</textarea>
                        </div>
                    </div>
                  
                 
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary">{{translate('Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script type="text/javascript">
    function categoriesByType(val){
        $('select[name="parent_id"]').html('');
        AIZ.plugins.bootstrapSelect('refresh');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:"POST",
            url:'{{ route('categories.categories-by-type') }}',
            data:{
               digital: val
            },
            success: function(data) {
                $('select[name="parent_id"]').html(data);
                AIZ.plugins.bootstrapSelect('refresh');
            }
        });
    }
</script>

@endsection
