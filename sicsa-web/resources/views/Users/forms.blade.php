<script src="{{asset('/js/user.js')}} "></script>
<div class="container">
    <div class="row mb-3">
        <div class="col">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" @if(!empty($read))readonly disabled @endif name="name" id="name" value="@if(!empty($prevAnswers['name'])){{$prevAnswers['name']}}@endif">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="email">Email</label>
        <input type="email" class="form-control" @if(!empty($read))readonly disabled @endif name="email" id="email" value="@if(!empty($prevAnswers['email'])){{$prevAnswers['email']}}@endif">
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col">
            <label for="password" @if(!empty($read) || !empty($edit)) readonly hidden @endif>Contraseña</label>
            <input type="password" class="form-control" @if(!empty($read) || !empty($edit)) readonly hidden @endif name="password" id="password">
        </div>
        <div class="col">
            <label for="password-confirm" @if(!empty($read) || !empty($edit)) readonly hidden @endif>Confirmar contraseña</label>
            <input type="password" class="form-control"  name="confirm-password" @if(!empty($read) || !empty($edit)) readonly hidden @endif>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="role_id">Rol</label>
        <select class="form-select" @if(!empty($read))readonly disabled @endif aria-label="Default select example" name="role_id" id="role_id" required onchange="show()">
                @if(!empty($valRole))
                <option value="{{$valRole['id']}}">{{$valRole['name']}}</option>
                @endif
                @foreach ($roles as $rol)
                <option value="{{$rol['id']}}">{{$rol['name']}}</option>
                @endforeach

        </select>
        </div>
    </div>
    <div class="row mb-3" name="clientContainer" id="clientContainer" @if(empty($valClient)) hidden @endif>
        <div class="col">
            <label for="client">Cliente</label>
            <select name="client_id" id="client_id" class="form-select" @if(!empty($read))readonly disabled @endif>
                @if(!empty($valClient))
                <option value="{{$valClient['id']}}">{{$valClient['name']}}</option>
                @endif
                <option value="">Selecciona un cliente</option>
                @foreach($clients as $client)
                    <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="phone">Telefono</label>
        <input type="text" class="form-control" @if(!empty($read))readonly disabled @endif name="phone" id="phone" value="@if(!empty($prevAnswers['phone'])){{$prevAnswers['phone']}}@endif">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <label for="address">Dirección</label>
        <input type="text" class="form-control" @if(!empty($read))readonly disabled @endif name="address" id="address" value="@if(!empty($prevAnswers['address'])){{$prevAnswers['address']}}@endif">
        </div>
    </div>
    
    <button type="submit" @if(!empty($read)) readonly hidden @endif class="btn btn-success">Guardar</button>
    <a href="{{route('users')}}"  type="button" class="btn btn-danger ms-4" >Regresar</a>
    </div>

</div>
