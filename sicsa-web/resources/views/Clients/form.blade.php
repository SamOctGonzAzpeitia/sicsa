
<div class="container">
    <div class="row m-3">
        <div class="col">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" @if(!empty($read))readonly disabled @endif class="form-control" value="@if(!empty($prevAnswers['name'])){{$prevAnswers['name']}}@endif">
            </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <label for="rfc">RFC</label>
            <input type="text" name="rfc" id="rfc" @if(!empty($read))readonly disabled @endif class="form-control" value="@if(!empty($prevAnswers['rfc'])){{$prevAnswers['rfc']}}@endif">
        </div>
        <div class="col">
            <label for="phone">Telefono</label>
            <input type="text" name="phone" id="phone" @if(!empty($read))readonly disabled @endif class="form-control" value="@if(!empty($prevAnswers['phone'])){{$prevAnswers['phone']}}@endif">
        </div>
        
    <div class="row mt-3">
        <div class="col">
            <label for="address">Direccion</label>
            <input type="text" name="address" id="address" @if(!empty($read))readonly disabled @endif class="form-control" value="@if(!empty($prevAnswers['address'])){{$prevAnswers['address']}}@endif">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="email">Correo</label>
            <input type="text" name="email" id="email" @if(!empty($read))readonly disabled @endif class="form-control" value="@if(!empty($prevAnswers['email'])){{$prevAnswers['email']}}@endif">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
        <input type="submit" @if(!empty($read))readonly hidden @endif class="btn btn-success" value="Guardar">
        <a href="{{route('clients')}}" class="btn btn-danger">Regresar</a>
        </div>
    
    </div>
</div>