@extends('baselayout')

@section('content')
<div class="row">
<div class="col-md-12">
      <ul>
          @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
      @if(Session::has('message'))
          <div class="alert alert-info">
            {{Session::get('message')}}
          </div>
      @endif

      {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

      <div class="form-group">
          {!! Form::label('Your Name') !!}
          {!! Form::text('name', null, 
              array('required', 
                    'class'=>'form-control width-50px', 
                    'placeholder'=>'Your name')) !!}
      </div>

      <div class="form-group">
          {!! Form::label('Your E-mail Address') !!}
          {!! Form::text('email', null, 
              array('required', 
                    'class'=>'form-control width-50px', 
                    'placeholder'=>'Your e-mail address')) !!}
      </div>

      <div class="form-group">
          {!! Form::label('Your Message') !!}
          {!! Form::textarea('message', null, 
              array('required', 
                    'class'=>'form-control width-50px', 
                    'placeholder'=>'Your message')) !!}
      </div>

      <div class="form-group">
          {!! Form::submit('Contact Us!', 
            array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close() !!}
</div>
</div>
@stop