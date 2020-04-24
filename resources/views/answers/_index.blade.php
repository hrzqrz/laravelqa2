<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h2>{{ $answerCount." ". str_plural('Answer', $question->answers_count) }}</h2>
                </div>
                <hr>
                @include('layouts._messages')
                @foreach( $answers as $answer )
                <div class="media">
                    <div class="d-flex flex-column vote-controls">
                        <a title="This answer is usefull" class="vote-up">
                            <i class="fa fa-caret-up fa-3x"></i>
                        </a>
                        <span class="votes-count">1230</span>
                        <a title="This answer is not useful" class="vote-down">
                            <i class="fa fa-caret-down fa-3x"></i>
                        </a>
                        <a title="Mark this answer as best answer"
                            class="vote-accetped mt-2 ">
                            <i class="fa fa-check fa-2x"></i>
                            <span class="favorites-count">123</span>
                        </a>
                    </div>
                    <div class="media-body">
                        {!! $answer->body_html !!}
                        <div class="float-right">
                            <span class="text-muted"> Answered: {{ $answer->created_date}}</span>
                            <div class="media mt-2">
                                <a href="{{$answer->user->url}}" class="pr-2">
                                    <img src="{{$answer->user->avatar}}" alt="">
                                </a>
                                <div class="media-body mt-1">
                                    <a href="{{$answer->user->url}}">{{$answer->user->name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>