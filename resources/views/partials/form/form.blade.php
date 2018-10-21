<div class="col-md-12 py-4">

    <form action="/threads" method="post" >
        @csrf
        <div class="form-group">
            
            <select name="channel_id" id="channel_id" class="form-control">

                <option value=""> Chose youre channel... </option>

                @foreach(App\Channel::all() as $channel)
                     <option value="{{ $channel->id }}" {{ old('channel_id') == $channel->id ? 'selected' : ''  }}> 
                         {{ $channel->name }}
                    </option>
                @endforeach
            </select>
            
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <span class="fa fa-share-square"></span>
                </div>
            </div>
            <input type="text" name="title" id="" class="form-control" placeholder="What youre problems.." value="{{ old('title') }}">
            
        </div>
        <br>
        <div class="input-group">
           
            <textarea name="body" 
                      class="form-control" 
                      aria-label="With textarea" 
                      placeholder="Tell us what your problem is.."
                       cols="30" rows="10"
            >
                {{ old('body') }}
            </textarea>
        </div>
        <br>
         <div class="float-right">
            <button type="submit" class="btn btn-outline-primary">
                Post Your Thread
            </button>
        </div>
    </form>
    
</div>