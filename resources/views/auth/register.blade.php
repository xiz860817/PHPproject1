<div class="form-group row">
    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

    <div class="col-md-6">
        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>