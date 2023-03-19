@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="row mt-1">
            <div class="col-9">&nbsp;</div>
            <div class="col-3 text-end"><a href="{{ route('star.create') }}" class="btn btn-primary">Ajouter <i
                        class="fas fa-plus-circle"></i></a></div>
        </div>
        <br> <br>
        <div class="col-md-12">
            <form action="{{ route('star.deleteSelected') }}" method="POST">
                @csrf
                @method('delete')
                <div class="card">
                    <div id="cardTableWithButton" class="card-body show">
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col" class="text-center">Modifier</th>
                                    <th scope="col">Sélection <input class="form-check-input" type="checkbox"
                                                                     title="Tout sélectionner"
                                                                     onClick="selectAll(this)" name="checkAll">
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($stars as $star)
                                    <tr>
                                        <td><img src="{{ asset('images/'.$star->photo_url) }}" width="100"></td>
                                        <td> {{ $star->prenom }} {{ $star->nom }}</td>
                                        <td>
                                            <ul class="list-unstyled table-actions">
                                                <li><a href="{{ route('star.edit', $star->id) }}"><i class="fal fa-pen"
                                                                                                     data-bs-original-title="Edit"
                                                                                                     data-bs-toggle="tooltip">Editer</i></a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value={{$star->id}}
                                                    id="flexCheckDefault-{{$star->id}}" name="checkedStar[]"
                                                       onClick="selectLigne()">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end card -->

<br>
                <div class="row">
                    <div class="col-3">&nbsp;</div>
                    <div class="col-6">&nbsp;</div>
                    <div class="col-3 text-end">
                        <button type="submit" class="btn btn-danger">Supprimer&nbsp;<i class="far fa-times-circle"></i>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

<script>

    function selectAll(source) {
        checkboxes = document.getElementsByName('checkedStar[]');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }
    }

    function selectLigne() {
        checkBoxes = document.getElementsByName('checkedStar[]');
        checkedAll = true;
        for (var i = 0, n = checkBoxes.length; i < n; i++) {
            if (checkBoxes[i].checked === false) {
                checkedAll = false;
            }
        }

        selector = document.getElementsByName('checkAll');
        selector[0].checked = checkedAll;
    }
</script>
