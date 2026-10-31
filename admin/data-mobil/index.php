<div class="col-lg-12 ">
    <div class="card">
        <div class="card-header">
            <a href="dashboard.php?page=tambah-mobil" class="btn btn-success ">
                <i class="fas fa-plus-circle"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr class="text-justify">
                        <th width="5%" class="text-center">No</th>
                        <th>Nama Mobil</th>
                        <th>Merk Mobil</th>
                        <th width="10%">No Plat</th>
                        <th>Harga Sewa</th>
                        <th>transmisi</th>
                        <th width="2%">Penumpang</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <td>status</td>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = "SELECT tbl_mobil.*, tbl_merk.nama_merk
                    FROM tbl_mobil
                    LEFT JOIN tbl_merk ON tbl_mobil.id_merk = tbl_merk.id
                    ORDER BY tbl_mobil.id DESC";
                    $query = mysqli_query($connect, $sql);
                    while ($data = mysqli_fetch_assoc($query)) :
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_mobil'] ?></td>
                            <td><?= $data['nama_merk'] ?></td>
                            <td><?= $data['no_plat'] ?></td>
                            <td>Rp<?= number_format($data['harga_sewa'], 0, ',', '.'); ?></td>
                            <td><?= $data['transmisi'] ?></td>
                            <td><?= $data['penumpang'] ?> Bangku</td>
                            <td class="text-center">
                                <?php if (!empty($data['foto_mobil'])) : ?>
                                    <img src="upload/mobil/<?= $data['foto_mobil']; ?>" width="60" height="50" style="object-fit: cover;">
                                <?php else : ?>
                                    <span class="text-muted">Tidak ada foto</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $data['deskripsi'] ?>
                            <td><?= $data['status'] ?></td>
                            </td>
                            <td class="text-center">
                                <a href="dashboard.php?page=edit-mobil&id=<?= $data['id']; ?>"
                                    class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="dashboard_admin.php?page=hapus-mobil&id=<?= $data['id']; ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="hapusUser(event, this.href);">
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
</div>
<script>
    function hapusUser(event, url) {
        event.preventDefault();
        Swal.fire({
            title: "Apakah yakin Hapus data?",
            icon: "question",
            iconColor: "#d33",
            showCancelButton: true,
            confirmButtonColor: "#508a0d",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus !",
            cancelButtonText: "batal"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>