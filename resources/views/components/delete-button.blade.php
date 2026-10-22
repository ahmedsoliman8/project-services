
<form action="{{$href }}"
      method="POST"
      style="display: inline-block;"
      id="deleteForm-{{$id}}"
>
    @csrf
    @method('DELETE')

    <button onclick="confirmDelete('{{$id}}')" type="button"
            class="btn btn-danger btn-sm">
        <i class="fe fe-trash-2 fe-24"></i>
    </button>
</form>
