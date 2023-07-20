@section('content')
<h1>Products</h1>
    @if (is_Countable($Products) && count($Products) > 1)
        <div class="card">
            <ul class="List-group list-group-flush">
                @foreach ($Products as $Products )
                        <li class="list-group-item">
                            <h3><a href="/Posts/{{$Product->id}}">{{$Product->title}}</a></h3>
                            <small>Written on {{$Product->created_at}}</small>
                        </li>
                @endforeach
            </ul>
        </div>
    @else

    @endif
@endsection



{{-- <a href=" url('Post', $Posts)">Post one</a><br><br> --}}
