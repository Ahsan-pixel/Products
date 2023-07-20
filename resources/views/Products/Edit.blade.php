@section('content')

<h1>Edit Product</h1>
{!! Form::open(['action' => ['ProductController@update',$Product->id]])!!}

    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$Product->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div><br><br>

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$Product->body,['class'=>'form-control','placeholder'=>'Body'])}}
    </div><br><br>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}<br><br>
{!! Form::close() !!}
@endsection
