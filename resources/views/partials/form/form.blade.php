@extends('layouts.app')

@section('content')
    <div class="my-3 p-3 bg-white rounded shadow-sm col-md-12">

        <form action="/threads" method="post" >
            @csrf
            <div class="col-md-4">
                <div class="form-group">
                    <label for="channel_id"> Pick A Channel :</label>
                    <select name="channel_id" id="channel_id" class="form-control">
    
                        <option value=""> Pick A Channel... </option>
    
                        @foreach($channels as $channel)
                            <option value="{{ $channel->id }}" {{ old('channel_id') == $channel->id ? 'selected' : ''  }}> 
                                {{ $channel->name }}
                            </option>
                        @endforeach
                    </select>
                    
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="problem">Provied A Title :</label>
                    
                    <input type="text" name="title" id="problem" class="form-control" placeholder="What youre problems.." value="{{ old('title') }}">
                    
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="text"> Ask Away : </label>
                    <textarea name="body" 
                            class="form-control" 
                            aria-label="With textarea" 
                            placeholder="Tell us what your problem is.."
                            cols="30" rows="10"
                    >
                        {{ old('body') }}
                    </textarea>
                </div>
            </div>
            <div class="d-block mt-3">
                <div class="col-md-12">
                    
                    <button type="submit" class="btn btn-outline-primary">
                        Post Your Thread
                    </button>
                </div>
            </div>
        </form>
        
    </div>
@endsection