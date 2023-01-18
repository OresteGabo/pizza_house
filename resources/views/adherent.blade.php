@extends('layouts.layout')
@section('content')
    <div class="flex-center position-ref ">
        <div class="content">
            <div class="title m-b-md">
                ADHÉRENTS
            </div>

            <table id="adherents">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Age</th>

                </tr>
                @foreach ($adherents as $adherent)
                    @if ($loop->first)
                        This is the first iteration.
                    @endif

                    @if ($loop->last)
                        This is the last iteration.
                    @endif
                        <tr>
                            <td>N:{{ $loop->index +1 }}{{ $adherent['nom'] }}</td>
                            <td>{{ $adherent['prenom'] }}</td>
                            <td>{{ $adherent['age'] }}</td>
                            <td><button><i class="fa fa-edit"></i></button></td>
                        </tr>

                @endforeach

            </table>



        </div>
    </div>
@endsection
