@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Admin - Profile')

@section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"></span>Profile</h4>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-2">
                        <img class="p-img-preview" src="{{ auth()->guard('admin')->user()->image }}" alt="">
                    </div>
                    <p class="card-text mb-0">{{ auth()->guard('admin')->user()->name }}</p>
                    <p class="card-text">{{ auth()->guard('admin')->user()->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Update Profile</h5>
                </div>
                @include('admin._partials.alert')
                <div class="card-body">
                    <form action="{{ route('admin.profile.update', auth()->guard('admin')->user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <div class="d-flex justify-content-center">
                                <div class="p-img-upload">
                                    <img class="p-img-preview upload" src="{{ auth()->guard('admin')->user()->image }}" alt="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="upload-icon" width="28" height="28" viewBox="0 0 24 24"
                                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path d="M11 15h2V9h3l-4-5-4 5h3z"></path>
                                        <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ auth()->guard('admin')->user()->name }}">
                            {{ error('name') }}
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ auth()->guard('admin')->user()->email }}">
                            {{ error('email') }}
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="current_password">Current Password</label>
                            <input type="password" id="current_password" name="current_password" class="form-control">
                            <div class="form-text">Leave empty if you dont want to update</div>
                            {{ error('current_password') }}
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">New Password</label>
                            <input type="password" id="password" name="password" class="form-control" autocomplete="new-password">
                            {{ error('password') }}
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">Confirm New Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                            {{ error('password_confirmation') }}
                        </div>
                        <input type="file" class="visually-hidden p-img-file" name="image">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
