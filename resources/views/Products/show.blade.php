@section('content')
<a href="/Products" class="btn btn-default">Go Back</a>
    <h1>{{$Product->title}}</h1>
    <p>{{$Product->body}}</p>
    <hr>{{$Product->title}}
    <small>Written on {{$Product->created_at}}</small>
    <hr>
    <a href="/Products/{{$Product->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action'=>['PostController@destroy',$Product->id],'method'=>'POST','class'=>'pull-right']) !!}
    <br>
    {{ Form::hidden('_method','DELETE')}}
    {{ Form::submit('Delete',['class'=>'btn btn-danger'])}}<br><br>
    {!! Form::close() !!}
@endsection
