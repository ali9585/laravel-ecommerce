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
                <div class="card-body">
                    <form>
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
                            <input type="text" class="form-control" id="name" value="{{ auth()->guard('admin')->user()->name }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" class="form-control" id="email" value="{{ auth()->guard('admin')->user()->email }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="current_password">Current Password</label>
                            <div class="input-group input-group-merge">
                                <input type="current_password" id="current_password" class="form-control">
                                <span class="input-group-text" id="current_password2">@example.com</span>
                            </div>
                            <div class="form-text">Leave empty if you dont want to update</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="new_password">New Password</label>
                            <div class="input-group input-group-merge">
                                <input type="new_password" id="new_password" class="form-control">
                                <span class="input-group-text" id="new_password2">@example.com</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="confirm_new_password">Confirm New Password</label>
                            <div class="input-group input-group-merge">
                                <input type="confirm_new_password" id="confirm_new_password" class="form-control">
                                <span class="input-group-text" id="confirm_new_password2">@example.com</span>
                            </div>
                        </div>
                        <input type="file" class="visually-hidden p-img-file" name="image">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
