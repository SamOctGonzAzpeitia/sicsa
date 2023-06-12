<script src="{{asset('/js/utils.js')}} "></script>
<script src="{{asset('/js/validator.js')}} "></script>
<div class="container">
    <div class="row m-3">
        <div class="col">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" @if(!empty($read))readonly disabled @endif class="form-control" value="@if(!empty($prevAnswers['name'])){{$prevAnswers['name']}}@endif" oninput="validate('name', 'text', 255, 5)">
            <span class="text-danger"  style="z-index: -10; font-size: 0.8em;" hidden></span>
            </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <label for="rfc">RFC</label>
            <input type="text" name="rfc" id="rfc" @if(!empty($read))readonly disabled @endif class="form-control" value="@if(!empty($prevAnswers['rfc'])){{$prevAnswers['rfc']}}@endif" oninput="validate('rfc', 'rfc')">
            <span class="text-danger"  style="z-index: -10; font-size: 0.8em;" hidden></span>
        </div>
        <div class="col">
            <label for="phone">Telefono</label>
            <input type="text" name="phone" id="phone" @if(!empty($read))readonly disabled @endif class="form-control" value="@if(!empty($prevAnswers['phone'])){{$prevAnswers['phone']}}@endif" oninput="validate('phone', 'phone', 10, 0)">
            <span class="text-danger"  style="z-index: -10; font-size: 0.8em;" hidden></span>
        </div>
        
    <div class="row mt-3">
        <div class="col">
            <label for="address">Direccion</label>
            <input type="text" name="address" id="address" @if(!empty($read))readonly disabled @endif class="form-control" value="@if(!empty($prevAnswers['address'])){{$prevAnswers['address']}}@endif" oninput="validate('address', 'text', 255, 5)">
            <span class="text-danger"  style="z-index: -10; font-size: 0.8em;" hidden></span>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="email">Correo</label>
            <input type="text" name="email" id="email" @if(!empty($read))readonly disabled @endif class="form-control" value="@if(!empty($prevAnswers['email'])){{$prevAnswers['email']}}@endif" oninput="validate('email', 'email')">
            <span class="text-danger"  style="z-index: -10; font-size: 0.8em;" hidden></span>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
        <input type="submit" @if(!empty($read))readonly hidden @endif class="btn btn-success" value="Guardar">
        <a href="{{route('clients')}}" class="btn btn-danger">Regresar</a>
        </div>
    
    </div>
</div>