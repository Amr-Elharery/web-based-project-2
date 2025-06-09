@extends('layouts.app')

@section('content')

<div class="container">
    <form id="registrationForm" 
          class="signup-form shadow rad-6" 
          method="POST" 
          action="{{ route('users.store') }}" 
          enctype="multipart/form-data">

        @csrf

        <h1>Create Account</h1>

        <div class="flex flex-col-mobile">
            <div class="form-group flex-1">
                <label for="full_name">Full Name<span class="c-red fs-14">*</span> : </label>
                <input class="form-control" type="text" name="full_name" id="full_name" value="{{ old('full_name') }}">
                <span class="error-message fs-14">@error('full_name') {{ $message }} @enderror</span>
            </div>

            <div class="form-group flex-1">
                <label for="user_name">Username<span class="c-red fs-14">*</span> : </label>
                <input class="form-control" type="text" name="user_name" id="user_name" value="{{ old('user_name') }}">
                <span class="error-message fs-14">@error('user_name') {{ $message }} @enderror</span>
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email<span class="c-red fs-14">*</span> : </label>
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
            <span class="error-message fs-14">@error('email') {{ $message }} @enderror</span>
        </div>

        <div class="flex flex-col-mobile">
            <div class="form-group flex-1">
                <label for="phone">Phone Number<span class="c-red fs-14">*</span> : </label>
                <input class="form-control" type="tel" name="phone" id="phone" value="{{ old('phone') }}">
                <span class="error-message fs-14">@error('phone') {{ $message }} @enderror</span>
            </div>

            <div class="form-group flex-1">
                <label for="whatsapp">WhatsApp Number<span class="c-red fs-14">*</span> : </label>
                <input class="form-control" type="tel" name="whatsapp_number" id="whatsapp" value="{{ old('whatsapp_number') }}">
                <span class="error-message fs-14">@error('whatsapp_number') {{ $message }} @enderror</span>
            </div>
        </div>

        <div class="form-group">
            <label for="address">Address<span class="c-red fs-14">*</span> : </label>
            <textarea class="form-control" name="address" id="address" rows="5">{{ old('address') }}</textarea>
            <span class="error-message fs-14">@error('address') {{ $message }} @enderror</span>
        </div>

        <div class="form-group password-group">
            <label for="password">Password<span class="c-red fs-14">*</span> : </label>
            <input class="form-control" type="password" name="password" id="password">
            <i class="fa-solid fa-eye-slash fs-14 c-gray" id="toggle_password"></i>
            <div class="password-requirements fs-14 c-grey">
                Password must be at least 8 characters long and contain at least one number and one special character
            </div>
            <span class="error-message fs-14">@error('password') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirm Password<span class="c-red fs-14">*</span> : </label>
            <input class="form-control" type="password" name="confirm_password" id="confirm_password">
        </div>

        <div class="form-group">
            <div class="flex items-center">
                <label for="user_image">Profile Picture<span class="c-red fs-14">*</span> : </label>
                <label for="user_image" class="btn btn-effect c-white w-fit">Choose File</label>
            </div>
            <input class="form-control" type="file" name="user_image" id="user_image" accept="image/*" hidden>
            <span class="error-message fs-14">@error('user_image') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <button class="btn btn-effect c-white w-full fs-22" type="submit">Register</button>
        </div>
    </form>
</div>
@endsection
