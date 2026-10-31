<div class="col-12 ">
    <div class="card">
        <div class="card-header">
            <a href="dashboard.php?page=tambah-user" class="btn btn-success ">
                <i class="fas fa-plus-circle"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="5%" class="text-center">No</th>
                        <th>Nama</th>
                        <th width="40%">Email</th>
                        <th>Role</th>
                        <th width="10%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Admin</td>
                        <td>admin@gamil.com</td>
                        <td>Admin</td>
                        <td class="text-center">
                            <a href="dashboard.php?page=edit_user&id=<?= $data['id']; ?>"
                                class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="dashboard_admin.php?page=hapus_user&id=<?= $data['id']; ?>"
                                class="btn btn-danger btn-sm"
                                onclick="hapusUser(event, this.href);">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
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