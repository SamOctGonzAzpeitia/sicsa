
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
        <label for="role">Rol</label>
        <select class="form-select" @if(!empty($read))readonly disabled @endif aria-label="Default select example" name="role_id" id="role_id">
                @if(!empty($valRole))
                <option value="{{$valRole['id']}}">{{$valRole['name']}}</option>
                @endif
                @foreach ($roles as $rol)
                <option value="{{$rol['id']}}">{{$rol['name']}}</option>
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
    
    <button type="submit" @if(!empty($read)) readonly hidden @endif class="btn btn-success">Guardar</button>
    <a href="{{route('users')}}"  type="button" class="btn btn-danger ms-4" >Cancelar</a>
    </div>

</div>
