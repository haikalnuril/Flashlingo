@include('admin.component.header')
<form action="{{ route('update', $user->id) }}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" value="{{ $user->username }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" name="password" class="form-control" value="">
    </div>
    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" name="no_telepon" class="form-control" value="{{ $user->no_telepon }}">
    </div>
    <div class="form-group">
        <label for="isAdmin">Role :</label>
        <select class="form-control @error('role') is-invalid @enderror" id="isAdmin" name="isAdmin">
            <option value="">Select Role</option>
            <option value="1" {{ $user->isAdmin == '1' ? 'selected' : '' }}>Admin</option>
            <option value="0" {{ $user->isAdmin == '0' ? 'selected' : '' }}>User</option>
        </select>
    </div>
    <input type="submit" class="btn btn-success" name="update_user" value="Update">
</form>
@include('admin.component.footer') 




