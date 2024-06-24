@include('admin.component.header')
      <div class="box1 flex">
        
        <a href="{{ route('logout') }}" >
          <button class="btn btn-danger" style="margin-left: 10px;">LOGOUT</button>  
        </a>
        <a href="/admin/stage" class="btn btn-warning text-light">FITUR STAGE</a>
      </div>
      <table class="table table-hover table-bordered table-striped">
        <h2 class="mt-5">ALL USERS</h2>
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD USER</button>
        <thead>
            <tr>
                <th>Regist ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>Role</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($user as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->username }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->password }}</td>
            <td>{{ $item->no_telepon }}</td>
            <td> @if ( $item->isAdmin  == 1)
                        Admin
                @else
                        User
                @endif
          </td>
            <td><a href="{{ route('edit',  $item->id ) }}" class="btn btn-success">Update</a></td>
            <td>
              <form action="{{ route('delete', $item->id  ) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
              
            </td>
        </tr> 
          @endforeach    
      </tbody>
        </table>
        @include('admin.component.footer')




   

    <!-- Modal -->
<form action="{{ route('adduser') }}" method="post">
  @method('POST')
  @csrf
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD USER</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" name="no_telepon" class="form-control">
            </div>
            <div class="form-group">
              <label for="isAdmin">Role :</label>
              <select class="form-control @error('role') is-invalid @enderror" id="isAdmin" name="isAdmin">
                  <option value="">Select Role</option>
                  <option value="1" >Admin</option>
                  <option value="0" >User</option>
              </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >Add User</button>
      </div>
    </div>
  </div>
</div>
</form>




    