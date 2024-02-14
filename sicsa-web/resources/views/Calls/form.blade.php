
<script src="{{asset('/js/utils.js')}} "></script>
<script src="{{asset('/js/validator.js')}} "></script>
    <div class="row m-3">
        <div class="col">
            <label for="">Nombre</label>
            <input type="text" class="form-control" @if(!empty($read)) readonly disabled @endif id="name" name="name" value="@if(!empty($prevAnswers['name'])){{$prevAnswers['name']}}@endif"  oninput="validate('name', 'text', 255, 5)">
            <span class="text-danger"  style="z-index: -10; font-size: 0.8em;" hidden></span>
        </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <label for="">Descripción</label>
            <input type="text" class="form-control" @if(!empty($read)) readonly disabled @endif id="description" name="description" value="@if(!empty($prevAnswers['description'])){{$prevAnswers['description']}}@endif" oninput="validate('description', 'text', 255, 5)">
            <span class="text-danger"  style="z-index: -10; font-size: 0.8em;" hidden></span>
        </div>
    </div>
   
    <div class="row m-3">
        <div class="col">
            <label for="">Fecha de reporte</label>
            <input type="date" class="form-control" @if(!empty($read)) readonly disabled @endif name="fecha_inicio" id="fecha_inicio" value="@if(!empty($prevAnswers['fecha_inicio'])){{$prevAnswers['fecha_inicio']}}@endif">
        </div>
        <div class="col">
            <label for="">Fecha de fin</label>
            <input type="date" class="form-control" @if(!empty($read)) readonly disabled @endif name="fecha_final" id="fecha_final" value="@if(!empty($prevAnswers['fecha_final'])){{$prevAnswers['fecha_final']}}@endif">
        </div>
    </div>

    <div class="row m-3">
        <div class="col">
            <label for="">Notas</label>
            <input type="text" class="form-control" @if(!empty($read)) readonly disabled @endif name="notas" id="notas" value="@if(!empty($prevAnswers['notas'])){{$prevAnswers['notas']}}@endif" oninput="validate('notas', 'text', 255, 5)">
            <span class="text-danger"  style="z-index: -10; font-size: 0.8em;" hidden></span>
        </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <label for="">Cliente</label>
            <!-- <input type="text" class="form-control" @if(!empty($read)) readonly disabled @endif id="name" name="client" value="@if(!empty($prevAnswers['client'])){{$prevAnswers['client']}}@endif"> -->
            <select class="form-select " name="client_id" id="client_id" @if(!empty($read)) readonly disabled @endif>
                @if(!empty($prevAnswers['client_id']))
                <option value="{{$prevAnswers['client_id']}}" selected>{{$clients[$prevAnswers['client_id']-1]['name']}}</option>
                @else
                <option value="">Selecciona un cliente</option>
                @endif
                @foreach ($clients as $client)
                    <option value="{{$client['id']}}">{{$client['name']}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row m-3">
        <div class="col">
        <button type="submit" @if(!empty($read)) readonly hidden @endif class="btn btn-success">Guardar</button>
    <a href="{{route('calls')}}"  type="button" class="btn btn-danger ms-4" >Regresar</a>
        </div>
    </div>
    
   
    </div>


