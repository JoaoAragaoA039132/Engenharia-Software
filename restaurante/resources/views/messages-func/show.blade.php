@extends('layouts.app-master-no-navbar')
@section('content')
<form method="POST" {{route('messages.createc')}}>
    @csrf
    <div class="bg-light p-5 rounded" style="margin:10px;">

        @guest
            <h1>Mensagens</h1>
        @endguest

        <br>

        <div style="text-align: center; align-right;" >
            <table>
                <tr>
                    <th class="col-4" style="border: 2px solid #000000"> Nome</th>
                    <th class="col-8" style="border: 2px solid #000000">Mensagem</th>
                </tr>
                <tr>
                    <td style="border: 1px solid #000000">2</td>
                    <td style="border: 1px solid #000000">Zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000000">1</td>
                    <td style="border: 1px solid #000000">Xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                </tr>
            </table>
            <br>
            <div>
                <input type="submit" class="btn btn-primary" name="Voltar" value="Voltar">
            </div>
        </div>
</form>


@endsection
