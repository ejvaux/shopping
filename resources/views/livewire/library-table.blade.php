<div>
    <ul class="list-group">
        @if ($library->count() > 0)
            @foreach ($library as $song)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col">
                            {{$song->product->title}}
                        </div><div class="col">
                            {{$song->product->artist}}
                        </div>
                        <div class="col text-right">
                            <a href="{{url('download')}}/{{$song->product->id}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-download"></i> Download</a>
                        </div>
                    </div>
                </li>
            @endforeach
        @else
            <li class="list-group-item">No songs</li>
        @endif

    </ul>
</div>
