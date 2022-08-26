@extends('layouts.admin.app')

@section('title')
    Accueil
@endsection

@section('content')
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
                            <h4> Catégories </h4>
                        </div>
                        <div class="me-auto">
                            <!-- <i style="font-size: 35px ; color: white" class="fa fa-book"> </i> -->
                            <a href="!#" data-target="#nCategory" data-toggle="modal" class="btn btn-warning">Nouvelle Catégorie</a>
                        </div>
                        <p>Voici la liste de toutes les catégories - :)</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>-</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Catégorie</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Nbr Articles</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($categories->isEmpty())
                                        <tr>
                                            <th style="background: rgb(221, 221, 221)" colspan="6" class="text-center">Pas encore catégorie</th>
                                        </tr>
                                    @else
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td>-</td>
                                            <td><span class="list-img"><img src="{{ asset('assets/images/categories/'.$category->image) }}" alt=""></span>
                                            </td>
                                            <td><a href="#"> {{ $category->name }} </a>
                                            </td>
                                           @if ($category->description == null)
                                                <td class="text-center" style="width: 650px">Pas de description</td>
                                           @else
                                                <td style="width: 650px">{{ $category->description }}</td>
                                           @endif
                                            <td class="text-center">{{ $category->articles()->where('status', 1)->count() }}</td>
                                            <td class="text-center">
                                                <a href=""><i class="fa fa-eye"></i></a><a href=""><i class="fa fa-trash"></i></a>
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
    </div>
</div>

<script>
    @if (Session::has('success_add_category'))
        Swal.fire({
            icon: 'success',
            title: 'Succès',
            text: '{{ Session::get("success") }}'
        })
    @endif
</script>
@endsection
