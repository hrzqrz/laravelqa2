@csrf
<div class="form-group">
    <label for="question-title">Question title</label>
<input type="text" name="title" value="{{old('title', $question->title)}}" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}">

    {{-- Showing error for title --}}
    @if( $errors->has('title') )
        <div class="invalid-feedback">
            <strong>{{$errors->first('title')}}</strong>
        </div>
    @endif
    {{-- Showing error for title --}}
</div>

<div class="form-group">
    <label for="question-body">Explain your question</label>
<textarea name="body" id="question-body" class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}" cols="30" rows="10">{{old('body', $question->body)}}</textarea>

    {{-- Showing error for body --}}
    @if( $errors->has('body') )
        <div class="invalid-feedback">
            <strong>{{ $errors->first('body') }}</strong>
        </div>
    @endif
    {{-- Showing error for body --}}
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{$buttonText}}</button>
</div>