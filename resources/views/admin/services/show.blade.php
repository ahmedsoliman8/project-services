@extends('admin.master')
@section('title',__('keywords.show_service'))
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <h2 class="h5 page-title">{{__('keywords.show_service')}}</h2>


                <div class="card shadow">
                    <div class="card-body">


                        {{-- Service ID --}}
                        <div class="mb-3">
                            <strong>{{__('keywords.id')}}:</strong>
                            <span>{{ $service->id }}</span>
                        </div>

                        <hr>

                        {{-- Service Icon --}}
                        <div class="mb-4">
                            <strong>{{__('keywords.icon')}}:</strong>

                            <div class="mt-2">
                                <i class="fe {{ $service->icon }} fa-2x"
                                   style="font-size: 50px;"></i>
                            </div>

                            <small class="text-muted">
                                {{ $service->icon }}
                            </small>
                        </div>

                        <hr>

                        {{-- Service Title --}}
                        <div class="mb-3">
                            <strong>{{__('keywords.title')}}:</strong>
                            <h6 class="mt-2">{{ $service->title }}</h6>
                        </div>

                        <hr>

                        {{-- Service Description --}}
                        <div class="mb-4">
                            <strong>{{__('keywords.description')}}:</strong>

                            <p class="mt-2">
                                {{ $service->description }}
                            </p>
                        </div>

                        <hr>

                        {{-- Actions --}}
                        <div class="d-flex gap-2">
                            <a href="{{ route('admin.services.edit', $service->id) }}"
                               class="btn btn-warning mr-4">
                                <i class="fe fe-edit fe-24"></i> {{__('keywords.edit')}}
                            </a>

                            <form action="{{ route('admin.services.destroy', $service->id) }}"
                                  method="POST"
                                  id="deleteForm-{{$service->id}}">
                                @csrf
                                @method('DELETE')

                                <button onclick="confirmDelete('{{$service->id}}')" type="button"
                                        class="btn btn-danger">
                                    <i class="fe fe-trash-2 fe-24"></i> {{__('keywords.delete')}}
                                </button>
                            </form>
                        </div>


                    </div>
                </div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

    <script>
        document.getElementById('icon').addEventListener('input', function () {
            document.getElementById('icon-preview').className = this.value;
        });

        function confirmDelete(id) {
            if (confirm('{{__("keywords.delete_this_service")}}')) {
                document.getElementById('deleteForm-' + id).submit()
            }
        }
    </script>
@endsection
