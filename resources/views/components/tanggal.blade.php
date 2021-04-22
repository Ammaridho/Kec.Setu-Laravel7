@if (($perihal->updated_at) != null)
    <?php $tanggal = $perihal->updated_at?>
@elseif (($berita->created_at) != null)
    <?php $tanggal = $perihal->created_at?>
@endif
    <p>belum ada tanggal</p>
