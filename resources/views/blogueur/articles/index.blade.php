@extends('layouts.admin.app')

@section('title')
    Accueil
@endsection

@section('content')
<!--== BODY INNER CONTAINER ==-->
<div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Users(Students)</a>
                        </li>
                        <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div style="display: flex; position: relative; justify-content: space-between; " class="inn-title">
                                    <div>
                                        <h4> Articles </h4>
                                    </div>
                                    <div class="me-auto">
                                        <!-- <i style="font-size: 35px ; color: white" class="fa fa-book"> </i> -->
                                        {{-- <a href="!#" data-target="#nCategory" data-toggle="modal" class="btn btn-warning">Nouvelle Catégorie</a> --}}
                                    </div>
                                    <p>Voici la liste de tous nos articles.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Titre</th>
                                                    <th>Contenue</th>
                                                    <th>Publié</th>
                                                    <th>Ecrit le</th>
                                                    <th>NBR Vues</th>
													<th>NBE Comment</th>
													<th>Status</th>
													<th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>united states</td>
                                                    <td>ST17241</td>
													<td>03 Jun 1990</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
