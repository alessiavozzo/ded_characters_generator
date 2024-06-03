<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId-{{ $type->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
  role="dialog" aria-labelledby="modalTitleId-{{ $type->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{-- title --}}
        <h5 class="modal-title" id="modalTitleId-{{ $type->id }}">
          Stai eliminando {{ $type->name }}
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      {{-- body - longer msg --}}
      <div class="modal-body">You are about to delete this record. There's no
        turning back. Do you want to proceed?</div>

      {{-- buttons --}}
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Annulla
        </button>

        <form action="{{ route('admin.types.destroy', $type) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">
            Elimina
          </button>
        </form>

      </div>
    </div>
  </div>
</div>
