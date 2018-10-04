<div class="user jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 text-center">
                <img class="avatar rounded-circle" src="{{ asset('img/avatars/user.png') }}">

            </div>
            <div class="col-sm-5 content">
                <div class="header text-muted">
                Chaerul Fajar Subhi
                </div>
                <div class="description text-muted">
                fajarbekasieditting@gmail.com
                </div>
               
                <div class="actions">
                    
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Update Profile</a>
                    
                </div>
                
            </div>
            <div class="col-sm-5 user-follow">
                <div class="row">
                    
                    <div class="col-sm-4">
                        <a class="fa fa-birthday-cake counter text-muted"></a>
                        <a href="" class="text-muted">2018-11-11</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="" class="fa fa-sign-in counter text-muted"></a>
                        <a href="" class="text-muted">2018-11-11</a>
                    </div>
                </div>
            </div>
            <div class="collapse mt-3" id="services">
                <form action="/scheduling/physical-appointment" method="POST" class="form-inline">
                    <div class="form-group mr-1">
                        <input type="text" name="" id="" class="form-control" placeholder="Service name....">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-danger" type="submit">Add Services</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>