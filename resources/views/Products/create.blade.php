@section('content')

<h1>Add Product</h1>
{!! Form::open(['action' => 'ProductController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div><br><br>

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body'])}}
    </div><br><br>

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}<br><br>
{!! Form::close() !!}
@endsection
