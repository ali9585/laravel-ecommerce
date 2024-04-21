@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Admin - Profile')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Account Settings /</span> Account
    </h4>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a></li>
                <li class="nav-item"><a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-bell me-1"></i> Notifications</a></li>
                <li class="nav-item"><a class="nav-link" href="pages-account-settings-connections.html"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <div class="card-body">
                    @include('admin._partials.alert')
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ auth()->guard('admin')->user()->image }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                            <label for="image" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                            </label>
                            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="card-body">
                    <form action="{{ route('admin.profile.update', auth()->guard('admin')->user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ auth()->guard('admin')->user()->name }}">
                                {{ error('name') }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ auth()->guard('admin')->user()->email }}">
                                {{ error('email') }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" id="current_password" name="current_password" class="form-control">
                                <div class="form-text">Leave empty if you dont want to update</div>
                                {{ error('current_password') }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" id="password" name="password" class="form-control" autocomplete="new-password">
                                {{ error('password') }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                                {{ error('password_confirmation') }}
                            </div>
                            <input type="file" class="visually-hidden p-img-file" id="image" name="image">
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary p-form-reset">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading mb-1">Are you sure you want to delete your account?</h6>
                            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
                            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
