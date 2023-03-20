@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <ul id="onglets">
                    @foreach($stars as $star)
                        <li @if($loop->index == 0) class="actif" @endif> {{ $star->prenom }} {{ $star->nom }}</li>
                    @endforeach
                </ul>
                <div id="contenu">
                    @foreach($stars as $star)
                        <div class="item">
                            <h2>  <img src="{{ asset('images/'.$star->photo_url) }}" width="100"> {{ $star->prenom }} {{ $star->nom }}</h2> <br>
                            {{ $star->description }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(function () {
        $('#onglets').css('display', 'block');
        $('#onglets').click(function (event) {
            var actuel = event.target;
            if (!/li/i.test(actuel.nodeName) || actuel.className.indexOf('actif') > -1) {

                return;
            }
            $(actuel).addClass('actif').siblings().removeClass('actif');
            setDisplay();
        });

        function setDisplay() {
            var modeAffichage;
            $('#onglets li').each(function (rang) {
                modeAffichage = $(this).hasClass('actif') ? '' : 'none';
                $('.item').eq(rang).css('display', modeAffichage);
            });
        }

        setDisplay();
    });
</script>

<style>
    #onglets {
        display: none;
    }

    #onglets li {
        position: relative;
        float: left;
        list-style: none;
        padding: 2px 5px 7px;
        margin-right: 5px;
        border: 1px solid #1175AE;
        cursor: pointer;
        background-color: #EEEEEE;
        color: #0D5995;
        z-index: 1;
    }

    #onglets .actif {
        border-bottom: none;
        font-weight: bold;
        z-index: 10;
    }

    #contenu {
        clear: both;
        position: relative;
        margin: 0 20px;
        padding: 10px;

    }
</style>
