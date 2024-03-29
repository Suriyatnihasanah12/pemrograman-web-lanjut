@extends('layout.form_tambah')
@section('title')
    Edit User
@endsection
@section('conten')
<form action="{{url('update_user')."/".$users->id}}" method="post">
  @csrf
    <div class="mb-3">
      <label class="form-label">Nama User</label>
      <input type="text" class="form-control" name="name" value="{{$users->nama}}" >
    </div>
    <div class="mb-3">
      <label class="form-label">E-Mail</label>
      <input type="text" class="form-control" name="email" value="{{$users->email}}" >
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="text" class="form-control" name="password" value="{{$users->password}}" >
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection