@extends('admin.master')
@section('title',__('keywords.edit_service'))
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{__('keywords.edit_service')}}</h2>


                <div class="card shadow">
                    <div class="card-body">


                        <form action="{{ route('admin.services.update', $service->id) }}"
                              method="POST">
                            @csrf
                            @method('PUT')

                            {{-- Title --}}
                            <div class="form-group mb-3">
                                <label for="title">
                                    {{ __('keywords.title') }}
                                </label>

                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title', $service->title) }}"
                                    placeholder="{{ __('keywords.title') }}"
                                >

                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- Description --}}
                            <div class="form-group mb-3">
                                <label for="description">
                                    {{ __('keywords.description') }}
                                </label>

                                <textarea
                                    name="description"
                                    id="description"
                                    rows="5"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="{{ __('keywords.description') }}"
                                >{{ old('description', $service->description) }}</textarea>

                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            {{-- Icon --}}
                            <div class="form-group mb-3">
                                <label for="icon">
                                    {{ __('keywords.icon') }}
                                </label>

                                <input
                                    type="text"
                                    name="icon"
                                    id="icon"
                                    class="form-control @error('icon') is-invalid @enderror"
                                    value="{{ old('icon', $service->icon) }}"
                                    placeholder="{{ __('keywords.icon') }}"
                                >

                                @error('icon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                                <div class="mt-2">
                                    <i id="icon-preview"
                                       class="fe {{ old('icon', $service->icon) }} fe-24"
                                       style="font-size: 30px;"></i>
                                </div>
                            </div>

                            {{-- Buttons --}}
                            <button type="submit" class="btn btn-primary">
                                {{ __('keywords.edit') }}
                            </button>

                            <a href="{{ route('admin.services.index') }}"
                               class="btn btn-secondary">
                                {{ __('keywords.cancel') }}
                            </a>

                        </form>
                    </div>
                </div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

    <script>
        document.getElementById('icon').addEventListener('input', function () {
            document.getElementById('icon-preview').className = 'fe '+this.value+' fe-24';
        });
    </script>
@endsection
