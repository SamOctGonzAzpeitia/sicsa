<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>¿Estás seguro que deseas eliminar este cliente</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>

        <form action="{{ route('clients.destroy', $prevAnswers['id'])}}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Aceptar</button>
        </form>
      </div>
    </div>
  </div>
</div>