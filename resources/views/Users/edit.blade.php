<h1>Users Edit page</h1>
<p>This is the edit page with id {{   $id   }}</p>

<div> class="row">
    <div class="col-6">
         <form action="{{   url('users')   }}" method="post">
            @csrf
            @method('PUT') 
            <div class="form-group">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fulllname" name="form-controll"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">submit</button>
            <div>  
        </form> 
     </div>     
</div>