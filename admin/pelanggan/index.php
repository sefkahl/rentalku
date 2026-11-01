<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <a href="dashboard.php?page=tambah-pelanggan" class="btn btn-success">
                <i class="fas fa-plus-circle"></i> Tambah
            </a>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="5%" class="text-center">No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Tanggal Daftar</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = "SELECT * FROM tbl_pelanggan ORDER BY id DESC";
                    $query = mysqli_query($connect, $sql);

                    while ($data = mysqli_fetch_assoc($query)) :
                    ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= htmlspecialchars($data['nama_lengkap']); ?></td>
                            <td><?= htmlspecialchars($data['email']); ?></td>
                            <td><?= htmlspecialchars($data['no_hp']); ?></td>
                            <td><?= htmlspecialchars($data['alamat']); ?></td>

                            <td class="text-center">
                                <?php if (!empty($data['foto'])) : ?>
                                    <img src="upload/pelanggan/<?= htmlspecialchars($data['foto']); ?>"
                                        width="60" height="50" style="object-fit: cover;">
                                <?php else : ?>
                                    <span class="text-muted">Tidak ada foto</span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <?= $data['status']; ?>
                            </td>

                            <td>
                                <?= date('d-m-Y H:i', strtotime($data['created_at'])); ?>
                            </td>

                            <td class="text-center">
                                <a href="dashboard.php?page=edit-pelanggan&id=<?= $data['id']; ?>"
                                    class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="dashboard.php?page=hapus-pelanggan&id=<?= $data['id']; ?>"
                                    class="btn btn-danger btn-sm"
                                    data-nama="<?= htmlspecialchars($data['nama_lengkap'], ENT_QUOTES); ?>"
                                    onclick="return konfirmasiHapus(this, event);">
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
            text: "Pelanggan " + link.dataset.nama + "?",
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