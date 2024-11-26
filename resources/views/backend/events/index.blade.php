{{-- resources/views/events/index.blade.php --}}
@extends('backend.layouts.app')


@section('content')





    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">

            <div class="col text-right">
                <a href="{{ route('events.create') }}" class="btn btn-circle btn-info">
                    <span>{{ translate('Add New Event') }}</span>
                </a>
            </div>
        </div>
    </div>
    <br>

    <div class="card">
        <form class="" id="sort_products" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col">
                    <h5 class="mb-md-0 h6">{{ translate('All Events') }}</h5>
                </div>
            </div>

            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>

                            <th>
                                <div class="form-group">
                                    <div class="aiz-checkbox-inline">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" class="check-all">
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>
                                </div>
                            </th>

                            <th>{{ translate('Name') }}</th>

                            <th data-breakpoints="md">{{ translate('Location') }}</th>
                            <th data-breakpoints="lg">{{ translate('Start Date & Time') }}</th>
                            <th data-breakpoints="lg">{{ translate('Registration Link') }}</th>

                            <th data-breakpoints="sm" class="text-right">{{ translate('Options') }}</th>
                        </tr>


                    </thead>
                    <tbody>
                        @foreach ($events as $key => $event)
                            <tr>

                                <td>
                                    <div class="form-group d-inline-block">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" class="check-one" name="id[]"
                                                value="{{ $event->id }}">
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>
                                </td>

                                <td>
                                    <div class="row gutters-5 w-200px w-md-300px mw-100">
                                        <div class="col-auto">
                                            <img src="{{ uploaded_asset($event->image) }}" alt="Image"
                                                class="size-50px img-fit">
                                        </div>
                                        <div class="col">
                                            <span class="text-muted text-truncate-2">{{ translate($event->name) }}</span>
                                        </div>
                                    </div>
                                </td>


                                <td>
                                    <div class="form-group d-inline-block">
                                        {{ $event->location }}


                                    </div>
                                </td>

                                <td>
                                    <div class="form-group d-inline-block">


                                        {{ $event->start_date }}


                                    </div>
                                </td>


                                <td>
                                    <div class="form-group d-inline-block">


                                        {{ $event->registration_link }}


                                    </div>
                                </td>


                                <td class="text-right">
                                    <a class="btn btn-soft-success btn-icon btn-circle btn-sm"
                                        href="{{ route('events.user_show', $event->id) }}" target="_blank"
                                        title="{{ translate('View') }}">
                                        <i class="las la-eye"></i>
                                    </a>


                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                        href="{{ route('events.edit', $event->id) }}" title="{{ translate('Edit') }}">
                                        <i class="las la-edit"></i>

                                        </a>
                                        <a href="#"
                                            class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                             data-href="{{ route('events.destroy', $event->id) }}"
                                            title="{{ translate('Delete') }}">
                                            <i class="las la-trash"></i>
                                        </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination">
                    {{ $events->appends(request()->input())->links() }}
                </div>
            </div>
        </form>
    </div>



@section('modal')
    <!-- Delete modal -->
    @include('modals.delete_modal')
    <!-- Bulk Delete modal -->
    @include('modals.bulk_delete_modal')
@endsection









@endsection
