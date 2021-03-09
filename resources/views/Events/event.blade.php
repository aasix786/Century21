@extends('layouts.master')
@section('page_title', 'Dashboard')
@section('main_content')




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title">Information Evening</h4>
                        <div class="ml-auto">
                            <div class="dropdown sub-dropdown">
                                <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                        id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                    <a class="dropdown-item" href="{{url('add-event')}}">Add Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">Title
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Date</th>
                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                    Time
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                    Description
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(sizeof($events) > 0)
                                @foreach($events as $event)
                                    <tr>
                                        <td class="border-top-0 px-2 py-4">
                                            <div class="d-flex no-block align-items-center">
                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">{{$event->title}}
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14">{{$event->date}}</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14">{{$event->time}}</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14">{{$event->description}}</td>
                                        <td class="border-top-0 px-2 py-4">
                                            <div class="popover-icon">
                                                <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                   href="javascript:void(0)"><i class="fa fa-pencil-alt"></i> </a>
                                                <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                   href="javascript:void(0)"><i class="fa fa-trash"></i> </a>
                                                <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                   href="javascript:void(0)">+ </a>
                                            </div>
                                        </td>

                                    </tr>

                                @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-scripts')

@endsection
