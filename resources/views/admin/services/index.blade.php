@extends('admin.master')
@section('title',__('keywords.services'))
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{__('keywords.services')}}</h2>
                    <div class="page-title-right">

                        <x-action-button type="create" :href="route('admin.services.create')"/>
                    </div>
                </div>


                <div class="card shadow">
                    <div class="card-body">


                        <x-success-alert/>
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

                                        <x-action-button type="show"
                                                         :href="route('admin.services.show', $service->id)"/>


                                        <x-action-button type="edit"
                                                         :href="route('admin.services.edit', $service->id)"/>

                                        <x-delete-button id="{{ $service->id}}"
                                                         :href="route('admin.services.destroy', $service->id)"/>
                                    </td>
                                </tr>
                            @empty

                                <x-empty-alert :name="__('keywords.no_services_found')"/>
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
            if (confirm('{{__("keywords.delete_this_service")}}')) {
                document.getElementById('deleteForm-' + id).submit()
            }
        }

    </script>

@endsection
