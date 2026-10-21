@extends('admin.master')
@section('title',__('keywords.services'))
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{__('keywords.services')}}</h2>
                    <div class="page-title-right">
                        <a href="{{ route('admin.services.create') }}"
                           class="btn btn-info btn-sm">
                            {{__('keywords.add_new')}}
                        </a>
                    </div>
                </div>


                <div class="card shadow">
                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}

                            </div>
                        @endif
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>{{__('keywords.title')}}</th>
                                <th width="15%">{{__('keywords.icon')}}</th>
                                <th width="25%">{{__('keywords.actions')}}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @forelse ($services as $service)
                                <tr>
                                    <td>{{ $services->firstItem()+$loop->index }}</td>

                                    <td>{{ $service->title }}</td>

                                    <td>
                                        <i class="fa {{ $service->icon }} fa-2x"></i>

                                    </td>

                                    <td>
                                        <a href="{{ route('admin.services.show', $service->id) }}"
                                           class="btn btn-info btn-sm">
                                            <i class="fe fe-eye fe-24"></i>
                                        </a>

                                        <a href="{{ route('admin.services.edit', $service->id) }}"
                                           class="btn btn-warning btn-sm">
                                            <i class="fe fe-edit fe-24"></i>

                                        </a>

                                        <form action="{{ route('admin.services.destroy', $service->id) }}"
                                              method="POST"
                                              style="display: inline-block;"
                                              id="deleteForm-{{$service->id}}"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button onclick="confirmDelete('{{$service->id}}')" type="button"
                                                    class="btn btn-danger btn-sm">
                                                <i class="fe fe-trash-2 fe-24"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center alert alert-danger">
                                        {{__('keywords.no_services_found')}}
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-4">
                            {{ $services->links() }}
                        </div>

                    </div>
                </div>

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

    <script>

        function confirmDelete(id) {
            if (confirm('{{__("keywords.delete_this_service")}}')){
                document.getElementById('deleteForm-'+id).submit()
           }
        }

    </script>

@endsection
