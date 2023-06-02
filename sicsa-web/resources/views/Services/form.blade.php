
    <div class="row m-3">
        <div class="col">
            <label for="">Nombre</label>
            <input type="text" class="form-control" @if(!empty($read)) readonly disabled @endif id="name" name="name" value="@if(!empty($prevAnswers['name'])){{$prevAnswers['name']}}@endif">
        </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <label for="">Descripción</label>
            <input type="text" class="form-control" @if(!empty($read)) readonly disabled @endif id="description" name="description" value="@if(!empty($prevAnswers['description'])){{$prevAnswers['description']}}@endif">
        </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <label for="">Cliente</label>
            <input type="text" class="form-control" @if(!empty($read)) readonly disabled @endif id="name" name="client" value="@if(!empty($prevAnswers['client'])){{$prevAnswers['client']}}@endif">
        </div>
        <div class="col">
            <label for="">Status</label>
        <select class="form-select " @if(!empty($read)) readonly disabled @endif name ="status_id" aria-label="Default select example" placeholder="Status">
            
            @if(!empty($valStatus))
            <option value="{{$valStatus['id']}}" selected>{{$valStatus['name']}}</option>
            @else
            <option value="" selected>Selecciona un status</option>
            @endif
            @foreach ($statuses as $status)
            <option value="{{$status['id']}}">{{$status['name']}}</option>
            @endforeach

        </select>
        </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <label for="">Fecha de inicio</label>
            <input type="date" class="form-control" @if(!empty($read)) readonly disabled @endif name="fecha_inicio" id="fecha_inicio" value="@if(!empty($prevAnswers['fecha_inicio'])){{$prevAnswers['fecha_inicio']}}@endif">
        </div>
        <div class="col">
            <label for="">Fecha de fin</label>
            <input type="date" class="form-control" @if(!empty($read)) readonly disabled @endif name="fecha_final" id="fecha_final" value="@if(!empty($prevAnswers['fecha_final'])){{$prevAnswers['fecha_final']}}@endif">
        </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <label for="">Costo</label>
            <input type="number" class="form-control" @if(!empty($read)) readonly disabled @endif name="costo" id="costo" value="@if(!empty($prevAnswers['costo'])){{$prevAnswers['costo']}}@endif">
        </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <label for="">Notas</label>
            <input type="text" class="form-control" @if(!empty($read)) readonly disabled @endif name="notas" id="notas" value="@if(!empty($prevAnswers['notas'])){{$prevAnswers['notas']}}@endif">
        </div>
    </div>
    
    <button type="submit" @if(!empty($read)) readonly hidden @endif class="btn btn-success">Guardar</button>
    <a href="{{route('services')}}"  type="button" class="btn btn-danger ms-4" >Cancelar</a>
    </div>


