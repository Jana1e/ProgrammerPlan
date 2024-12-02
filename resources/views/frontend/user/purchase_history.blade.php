@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="card shadow-none rounded-0 border">
        <div class="card-header border-bottom-0">
            <h5 class="mb-0 fs-20 fw-700 text-dark">{{ translate('Orders History') }}</h5>
        </div>
        <div class="card-body">
            <table class="table  mb-0">
                <thead class="text-gray fs-12">
                    <tr>
                        <th class="pl-0">{{ translate('Code')}}</th>
                        <th data-breakpoints="md">{{ translate('Date')}}</th>
                      
                        <th data-breakpoints="md">{{ translate('Delivery Status')}}</th>
                        <th data-breakpoints="md">{{ translate('Payment Status')}}</th>
                        <th class="text-right pr-0">{{ translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody class="fs-14">
                    @foreach ($orders as $key => $order)
                     
                            <tr>
                                <!-- Code -->
                                <td class="pl-0">
                                    <a href="{{route('purchase_history.details', encrypt($order->id))}}">{{ $order->code }}</a>
                                </td>
                                <!-- Date -->
                                <td class="text-secondary">{{ date('d-m-Y', $order->date) }}</td>
                           
                                   
                                </td>
                                <!-- Delivery Status -->
                                <td class="fw-700">
                                    {{ translate(ucfirst(str_replace('_', ' ', $order->delivery_status))) }}
                                    @if($order->delivery_viewed == 0)
                                        <span class="ml-2" style="color:green"><strong>*</strong></span>
                                    @endif
                                </td>
                                <!-- Payment Status -->
                                <td>
                                    @if ($order->payment_status == 'paid')
                                        <span class="badge badge-inline badge-success p-3 fs-12" style="border-radius: 25px; min-width: 80px !important;">{{translate('Paid')}}</span>
                                    @else
                                        <span class="badge badge-inline badge-danger p-3 fs-12" style="border-radius: 25px; min-width: 80px !important;">{{translate('Unpaid')}}</span>
                                    @endif
                                    @if($order->payment_status_viewed == 0)
                                        <span class="ml-2" style="color:green"><strong>*</strong></span>
                                    @endif
                                </td>
                                <!-- Options -->
                                <td class="text-right pr-0">
                                   
                                    <!-- Cancel -->
                                    @if ($order->delivery_status == 'pending' && $order->payment_status == 'unpaid')
                                        <a href="javascript:void(0)" class="btn btn-soft-danger btn-icon btn-circle btn-sm hov-svg-white mt-2 mt-sm-0 confirm-delete" data-href="{{route('purchase_history.destroy', $order->id)}}" title="{{ translate('Cancel') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="9.202" height="12" viewBox="0 0 9.202 12">
                                                <path id="Path_28714" data-name="Path 28714" d="M15.041,7.608l-.193,5.85a1.927,1.927,0,0,1-1.933,1.864H9.243A1.927,1.927,0,0,1,7.31,13.46L7.117,7.608a.483.483,0,0,1,.966-.032l.193,5.851a.966.966,0,0,0,.966.929h3.672a.966.966,0,0,0,.966-.931l.193-5.849a.483.483,0,1,1,.966.032Zm.639-1.947a.483.483,0,0,1-.483.483H6.961a.483.483,0,1,1,0-.966h1.5a.617.617,0,0,0,.615-.555,1.445,1.445,0,0,1,1.442-1.3h1.126a1.445,1.445,0,0,1,1.442,1.3.617.617,0,0,0,.615.555h1.5a.483.483,0,0,1,.483.483ZM9.913,5.178h2.333a1.6,1.6,0,0,1-.123-.456.483.483,0,0,0-.48-.435H10.516a.483.483,0,0,0-.48.435,1.6,1.6,0,0,1-.124.456ZM10.4,12.5V8.385a.483.483,0,0,0-.966,0V12.5a.483.483,0,1,0,.966,0Zm2.326,0V8.385a.483.483,0,0,0-.966,0V12.5a.483.483,0,1,0,.966,0Z" transform="translate(-6.478 -3.322)" fill="#d43533"/>
                                            </svg>
                                        </a>
                                    @endif
                                   
                                   
                                </td>
                            </tr>
                   
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination -->
            <div class="aiz-pagination mt-2">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <!-- Delete modal -->
    @include('modals.delete_modal')

@endsection

