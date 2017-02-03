@extends('layout')

@section('content')

<h2>Notes</h2>
<form method="post">
<!-- Esta abreviatura hace lo mismo que la de abajo :  {!! csrf_field() !!}  -->

<!--  esta linea parece todo correcta, pero va con una llave sólo -->
    <input type="hidden" name="_token" value="{ crsf_token }">
    <textarea></textarea>


    <br>
    <br>
    <button type="submit">Creando una nota</button>

</form>

@endsection
