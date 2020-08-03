@extends('dashboards')
@section('titledash','Emails Managements')
@section('contents')
<div class="container-fluid">
    @if(session('selamat'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <strong>Congratulations {{session()->get('name')}}!</strong> - {{session('selamat')}}
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <aside class="lg-side">
                <div class="inbox-head">
                    <h3 class="input-text">Inbox</h3>
                    <form action="#" class="pull-right position">
                        <div class="input-append inner-append">
                            <input type="text" class="sr-input" placeholder="Search Mail">
                            <button class="btn sr-btn append-btn" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="mail-option">
                    <div class="chk-all chk-group">
                        <input type="checkbox" class="mail-checkbox mail-group-checkbox" id="checkAll" />
                        <div class="btn-group">
                            <a data-toggle="dropdown" href="#" class="btn mini all m-l-10" aria-expanded="false">All<i
                                    class="fa fa-angle-down "></i></a>
                            <ul class="card-option-dropdown dropdown-menu">
                                <li><a href="#"> None</a></li>
                                <li><a href="#"> Read</a></li>
                                <li><a href="#"> Unread</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="btn-group">
                        <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown"
                            href="/admin/emails" class="btn mini tooltips">
                            <i class=" fa fa-refresh"></i>
                        </a>
                    </div>
                    <div class="btn-group hidden-phone">
                        <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false"> More<i
                                class="fa fa-angle-down "></i></a>

                        <ul class="card-option-dropdown dropdown-menu">
                            <li><a href="#"><i class="ti-pencil"></i> Mark as Read</a></li>
                            <li><a href="#"><i class="ti-menu-alt"></i>Spam</a></li>
                            <li><a href="#"><i class="ti-trash"></i>Delete</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a data-toggle="dropdown" href="#" class="btn mini blue">Move to<i
                                class="fa fa-angle-down "></i></a>
                        <ul class="card-option-dropdown dropdown-menu">
                            <li><a href="#">Draft</a></li>
                            <li><a href="#">Spam</a></li>
                            <li><a href="#"> Delete</a></li>
                        </ul>
                    </div>

                    <ul class="unstyled inbox-pagination pagination-list">
                        <li><span>1-50 of 234</span></li>
                        <li>
                            <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                        </li>
                        <li>
                            <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="table-responsive">
                    <table class="table table-inbox table-hover table-responsive">
                        <tbody>
                            @if(!$email->isEmpty())
                            @foreach ($email as $email)
                            <tr
                                class="@if($email->status == 'unread') unread @elseif($email->status == 'read') @else @endif">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                <td class="view-message  dont-show">{{$email->type}}</td>
                                <td class="view-message"><a href="#viewmessage{{$email->id}}" data-toggle="modal"
                                        target="#viewmessage{{$email->id}}">{!!str_limit($email->message, 50)!!}</a>
                                </td>
                                <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                <td class="view-message  text-right">{{date('d M Y',strtotime($email->created_at))}}
                                </td>

                            </tr>
                            {{-- Modal view message --}}
                            <!-- Modal -->
                            <div class="modal fade" id="viewmessage{{$email->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="viewmessage{{$email->id}}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="view{{$email->id}}">Lihat
                                                {{$email->type}} dari {{$email->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <h4>Pesan dari:</h4> <br>
                                                <p>
                                                    Nama Pengirim: {{$email->name}} <br>
                                                    Email: <a href="mailto:{{$email->email}}">{{$email->email}}</a> <br>
                                                    No HP: <a
                                                        href="https://api.whatsapp.com/send?phone={{$email->nohp}}">
                                                        {{$email->nohp}}</a> <br>
                                                </p>
                                                <h4>Isi Pesan:</h4> <br>
                                                <p>
                                                    {!!$email->message!!}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="/admin/emails/read/{{$email->id}}"
                                                class="btn btn-xs btn-secondary">Tandai sudah
                                                dibaca</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            No data found
                            @endif
                        </tbody>
                    </table>
                </div>

            </aside>
        </div>
    </div>
</div>
@endsection
