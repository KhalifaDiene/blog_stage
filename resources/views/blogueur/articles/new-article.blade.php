@extends('layouts.admin.app')

@section('title')
    Article
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
                <div class="box-inn-sp admin-form">
                    <div style="display: flex; position: relative; justify-content: space-between; " class="inn-title">
                        <div>
                            <h4> Catégories </h4>
                        </div>
                    </div>
                    <div class="tab-inn">
                        <form method="POST" action="{{ route('add-new-article') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="input-field  s12">
                                <select name="category" id="">
                                    <option value="...">Selectionne une Catégorie</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field  s12">
                                <input type="text" value="" name="title" class="validate" required="">
                                <label class="">Titre</label>
                            </div>
                            <div class="file-field input-field s12">
                                <div class="btn admin-upload-btn">
                                    <span>Image</span>
                                    <input name="image" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input name="image" class="file-path validate" type="text" placeholder="L'image de l'article">
                                </div>
                            </div>
                            <div class="input-field  s12">
                                <textarea name="description" id="summernote"></textarea>
                                {{-- <label class="">Description de la catégorie</label> --}}
                            </div>

                            <div class="row">
                                <div class="input-field  s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
