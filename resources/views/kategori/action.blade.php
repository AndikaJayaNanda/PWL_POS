<div class="btn-group btn_group-xs d-flex" >
    <a href="{{ route('/edit', $kategori_id) }}"class="btn btn-xs btn-warning">
        <i class="fas fa-edit"></i>Edit
    </a>
    <form action="" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-xs btn-danger">
            <i class="fas fa-trash"></i>Delete
        </button>
    </form>
</div>