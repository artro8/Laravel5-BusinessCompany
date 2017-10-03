@extends('admin')
@section('content')
    <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if(Session::has('create'))
                            <div class="alert alert-success" role="alert">
                                Twój artykuł został zapisany!
                             </div>
                            @endif
                            @if(Session::has('delete'))
                            <div class="alert alert-danger" role="alert">
                                Twój artykuł został usnięty!
                            </div>
                            @endif
                            <div class="header">
                                <h4 class="title">Oferty</h4>
                                <div style="margin-top: -2.5%; margin-bottom: 1%; float: right;">
                                    <button class="btn btn-success"><a href="{{url('admin/offer/create')}}" style="color: #87CB16;">Dodaj ofertę</a></button>
                                </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    	<th>Tytuł</th>
                                    	<th>Edycja</th>
                                    	<th>Usuń</th>
                                    </thead>
                                    <tbody>
                                        @foreach($offers as $offer)
                                            <tr>
                                        	<td>{{$offer->title}}</td>
                                                <td><button class="btn btn-success"><a style="color: #87CB16;" href='{{url('admin/offer/edit', $offer->id)}}'>Edytuj</a></button></td>
                                                <td><button class="btn btn-danger"><a style="color: #FF4A55;" href='{{url('admin/offer/delete', $offer->id)}}'>Usuń</a></button></td></td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
@stop