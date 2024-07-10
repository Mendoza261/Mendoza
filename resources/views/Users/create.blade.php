<h1>Users Create Page</h1>
<p>This is the create page</p>

<div> class="row">
    <div class="col-6">
         <form action="{{   url('users')   }}" method="post">
            @csrf  
            <div class="form-group">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fulllname" name="fullname"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">submit</button>
            <div>  
        </form> 
     </div>     
</div>