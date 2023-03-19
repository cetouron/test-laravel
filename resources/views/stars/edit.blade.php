@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="page-content">

                <form method="POST" action="{{ route('star.update', $star) }}" enctype="multipart/form-data">
                    <div class="row">
                    @method('PUT')
                    @csrf

                    <!--Début partie gauche-->
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Modifier une star</h4>
                                    <hr>
                                    <div class="row mt-3">

                                        <div class="form-group mb-3">
                                            <label for="nom" @error('nom') class="text-danger error" @enderror>Nom</label>
                                            <input type="text" id="nom" class="form-control"
                                                   name="nom" value="{{ $star->nom }}">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="prenom" @error('titre') class="text-danger error" @enderror>Prenom</label>
                                            <input type="text" id="prenom" class="form-control"
                                                   name="prenom" value="{{ $star->prenom  }}">
                                        </div>
                                        <hr>
                                        <div class="mt-3">
                                            <label for="description" @error('description') class="text-danger error" @enderror >Description</label>
                                            <textarea class="form-control" name="description"
                                                      id="description">{{ $star->description  }}</textarea>
                                        </div>
                                        <div class="mb-12">
                                            <label for="example-input">Image</label>
                                            <br>
                                            <img src="{{ asset('images/'.$star->photo_url) }}" width="100">
                                            <br>
                                            <label for="example-input">Modifier l'image</label>
                                            <br>
                                            <input type="file" name="image">
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end card-body -->
                            </div>

                        </div>

                        <!--Fin partie gauche-->

                    </div>


                    <div class="text-end">
                        <button class="btn btn-primary"
                                type="submit">
                            <strong>Modifier</strong></button>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection


