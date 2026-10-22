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
                                <x-form-label title="title"/>

                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title', $service->title) }}"
                                    placeholder="{{ __('keywords.title') }}"
                                >

                                <x-validation-error field="title"/>
                            </div>

                            {{-- Description --}}
                            <div class="form-group mb-3">
                                <x-form-label title="description"/>

                                <textarea
                                    name="description"
                                    id="description"
                                    rows="5"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="{{ __('keywords.description') }}"
                                >{{ old('description', $service->description) }}</textarea>

                                <x-validation-error field="description"/>
                            </div>

                            {{-- Icon --}}
                            <div class="form-group mb-3">
                                <x-form-label title="icon"/>

                                <input
                                    type="text"
                                    name="icon"
                                    id="icon"
                                    class="form-control @error('icon') is-invalid @enderror"
                                    value="{{ old('icon', $service->icon) }}"
                                    placeholder="{{ __('keywords.icon') }}"
                                >

                                <x-validation-error field="icon"/>

                                <div class="mt-2">
                                    <i id="icon-preview"
                                       class="fe {{ old('icon', $service->icon) }} fe-24"
                                       style="font-size: 30px;"></i>
                                </div>
                            </div>

                            {{-- Buttons --}}
                            <x-submit-button/>

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
            document.getElementById('icon-preview').className = 'fe ' + this.value + ' fe-24';
        });
    </script>
@endsection
