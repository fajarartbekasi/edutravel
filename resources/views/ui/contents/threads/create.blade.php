@extends('layouts.master')

@section('content')
 <div class="border rounded-1 bg-white body-content shadow-sm my-3 offset-md-5">
    <form action="/thread" class="pt-3 mb-3">
       @csrf
       <div class="col-md-12">
           <div class="form-group">
               <label for="channel_id">Pick A Channel</label>
                   <select name="chanel_id" id="channel_id" class="form-control">
                       <option value="">Pick A Channel......</option>
                       @forelse($channels as $channel)
                       <option value="{{ $channel->id }}" {{ old('channel_id') == $channel->id ? 'select':''  }}>
                          {{ $channel->name }}
                       </option>
                       @empty
                       <option value="">Opp</option>
                       @endforelse
                   </select>
                    </div>
           </div>
           <div class="col-md-12">
               <div class="form-group">
                    <label for="problem">Provied A Title</label>
                    <input type="text"
                           name="title"
                           id="title"
                           class="form-control"
                           value="{{ old('title') }}"
                           placeholder="Whats youre problems.."
                           >
               </div>
           </div>
           <div class="col-md-12">
               <div class="form-group">
                    <label for="question">Ask away</label>
                    <textarea name="body"
                              class="form-control"
                              cols="30"
                              rows="10"
                              aria-label="With textarea"
                              placeholder="Tell us what youre problem is....."
                              >
                        {{ old('body') }}
                    </textarea>
               </div>
           </div>

           <div class="d-block mt-3">
              <div class="col-md-12">
                  <button type="submit" class="btn btn-outline-primary">
                     Post youre thread
                  </button>
              </div>
            </div>
        </div>
    </form>
</div>
@endsection