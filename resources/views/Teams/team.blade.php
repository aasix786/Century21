@extends('layouts.master')
@section('page_title', 'Dashboard')
@section('main_content')




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title">Team Members</h4>
                        <div class="ml-auto">
                            <div class="dropdown sub-dropdown">
                                <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                        id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                    <a class="dropdown-item" href="{{url('add-member')}}">Add Member</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">
                            <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">First Name
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Last Name
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Domain</th>
                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                    Rank
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                    Email
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(sizeof($members) > 0)
                                @foreach($members as $member)
                                    <tr>
                                        <td class="border-top-0 px-2 py-4">
                                            <div class="d-flex no-block align-items-center">
                                                <div class="mr-3"><img
                                                        src="{{asset($member->image)}}"
                                                        alt="user" class="rounded-circle" width="45"
                                                        height="45" /></div>
                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">{{$member->first_name}}
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-top-0 px-2 py-4">
                                            <div class="d-flex no-block align-items-center">
                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                        {{$member->last_name}}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14">{{$member->domain}}</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14">{{$member->rank}}</td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14">{{$member->email}}</td>
                                        <td class="border-top-0 px-2 py-4">
                                            <div class="popover-icon">
                                                <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                   href="javascript:void(0)"><i class="fa fa-pencil-alt"></i> </a>
                                                <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                   href="javascript:void(0)"><i class="fa fa-trash"></i> </a>
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
