<div class="col-lg-12 ">
    <div class="card">
        <div class="card-header">
            <a href="dashboard.php?page=tambah-diskon" class="btn btn-success ">
                <i class="fas fa-plus-circle"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr class="text-justify">
                        <th width="5%" class="text-center">No</th>
                        <th>Nama Diskon</th>
                        <th>Persentase</th>
                        <th>Minimal Hari</th>
                        <th>Status</th>
                        <th width="12%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no    = 1;
                    $sql   = "SELECT * FROM tbl_diskon ORDER BY id DESC";
                    $query = mysqli_query($connect, $sql);
                    while ($data = mysqli_fetch_assoc($query)) :
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_diskon']; ?></td>
                            <td><?= $data['persentase']; ?>%</td>
                            <td><?= $data['minimal_hari']; ?> Hari</td>
                            <td>
                                <?php if ($data['status'] == 'Aktif') : ?>
                                    <span class="badge badge-success">Aktif</span>
                                <?php else : ?>
                                    <span class="badge badge-danger">Tidak Aktif</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <a href="dashboard.php?page=edit-diskon&id=<?= $data['id']; ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="dashboard.php?page=hapus-diskon&id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" data-nama="<?= $data['nama_diskon']; ?>" onclick="return konfirmasiHapus(this, event);">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function konfirmasiHapus(link, event) {
        event.preventDefault();

        Swal.fire({
            title: "Yakin ingin menghapus?",
            text: "Diskon " + link.dataset.nama + "?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then(function(result) {
            if (result.isConfirmed) {
                window.location.href = link.href;
            }
        });
    }
</script>