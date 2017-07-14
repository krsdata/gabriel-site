
<div class="col-md-10">

    
     <div class="form-group{{ $errors->first('page_title', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Menu Title <span class="error">*</span></label>
        <div class="col-lg-8 col-md-8"> 
            {!! Form::text('menu_title',null, ['class' => 'form-control form-cascade-control input-small'])  !!} 
            <span class="label label-danger">{{ $errors->first('menu_title', ':message') }}</span>
        </div>
    </div>  


    <div class="form-group{{ $errors->first('page_sub_title', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label"> Page Sub Title <span class="error">*</span></label>
        <div class="col-lg-8 col-md-8"> 
            {!! Form::text('page_sub_title',null, ['class' => 'form-control form-cascade-control input-small'])  !!} 
            <span class="label label-danger">{{ $errors->first('page_sub_title', ':message') }}</span>
        </div>
    </div> 
 

     <div class="form-group{{ $errors->first('description', ' has-error') }}">
        <label class="col-lg-4 col-md-4 control-label">Page Description</label>
        <div class="col-lg-8 col-md-8"> 
            {!! Form::textarea('description',null, ['class' => 'form-control ckeditor form-cascade-control input-small'])  !!}
            <span class="label label-danger">{{ $errors->first('description', ':message') }}</span>
            @if(Session::has('flash_alert_notice')) 
            <span class="label label-danger">

                {{ Session::get('flash_alert_notice') }} 

            </span>@endif
        </div>
    </div> 

  <div class="form-group">
        <label class="col-lg-4 col-md-4 control-label"></label>
        <div class="col-lg-8 col-md-8">

            {!! Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']) !!}

            <a href="{{route('menu')}}">
            {!! Form::button('Back', ['class'=>'btn btn-warning text-white']) !!} </a>
        </div>
    </div>

</div> 
