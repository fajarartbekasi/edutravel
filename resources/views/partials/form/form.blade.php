<div class="col-md-12 py-4">

    <form action="/threads" method="post" >
        @csrf
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <span class="fa fa-share-square"></span>
                </div>
            </div>
            <input type="text" name="title" id="" class="form-control" placeholder="What youre problems..">
            
        </div>
        <br>
        <div class="input-group">
           
            <textarea name="body" 
                      class="form-control" 
                      aria-label="With textarea" 
                      placeholder="Tell us what your problem is.."
                       cols="30" rows="10"
            >
            
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