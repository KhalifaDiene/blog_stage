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
                                               @if ($categories->isEmpty())
                                                   <tr class="text-center">Pas d'article</tr>
                                               @else
                                                    @foreach ($categories as $category)
                                                        @if ($category->articles->isEmpty())
                                                            <tr>
                                                                <td colspan="9">Pas d'article</td>
                                                            </tr>
                                                        @else
                                                            @foreach ($category->articles as $article)
                                                                <tr>
                                                                    <td><span class="list-img"><img src="{{ asset('assets/images/articles/') }}" alt=""></span>
                                                                    </td>
                                                                    <td><a href="#"><span class="list-enq-name">{{ $article->title }}</span></a>
                                                                    </td>
                                                                    <?php $content =  Str::substr($article->content, 0, 200);
                                                                    ?>
                                                                    <td>{!! $content !!}...</td>
                                                                    <td>{{ $category->name }}</td>
                                                                    <td>{{ date('d M Y', strtotime($article->created_at)) }}</td>
                                                                    <td>{{ $article->vue }}</td>
                                                                    <td>{{ $article->commentaires()->where('commentaires.status', 1)->count(); }}</td>
                                                                    <td>
                                                                        <span class="label label-success">Active</span>
                                                                    </td>
                                                                    <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                               @endif
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
