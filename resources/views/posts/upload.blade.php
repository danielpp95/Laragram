@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upload') }}</div>

                <div class="card-body">
                    <form method="POST" action="/uploadPost" aria-label="{{ __('Register') }}" class="md-form" enctype="multipart/form-data">
                        @csrf


                        {{-- File --}}
                        <input type="file" name="image" class="form-control-file">

                        {{-- <div class="input-group mb-3 form-group mx-auto row">
                          <div class="input-group-prepend col-md-2">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                          </div>
                          
                          <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label col-md-4" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div> --}}


                        {{-- Caption --}}
                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption" value="{{ old('caption') }}" required autofocus>

                                @if ($errors->has('caption'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('caption') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
    

                        {{-- bubmit button --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upload') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection