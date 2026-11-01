<?php
$id = $_GET['id'];

$sql = "SELECT * FROM tbl_user WHERE id='$id'";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($query);
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Data User</h3>
    </div>

    <form method="POST" action="dashboard.php?page=simpan-user">
        <div class="card-body">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">

            <div class="row">
                <div class="form-group col-lg-6">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"
                        value="<?= $data['username']; ?>" required>
                </div>

                <div class="form-group col-lg-6">
                    <label>Role</label>
                    <select name="role" class="form-control" required>
                        <option value="Admin" <?= $data['role'] == 'Admin' ? 'selected' : ''; ?>>Admin</option>
                        <option value="Petugas" <?= $data['role'] == 'Petugas' ? 'selected' : ''; ?>>Petugas</option>
                    </select>
                </div>

                <div class="form-group col-lg-6">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                        value="<?= $data['email']; ?>" required>
                </div>

                <div class="form-group col-lg-6">
                    <label>Password Baru</label>
                    <input type="password" name="password" class="form-control"
                        placeholder="Kosongkan jika tidak ingin mengubah password">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" name="update_data" class="btn btn-primary">
                <i class="fas fa-save"></i> Update
            </button>
            <a href="dashboard.php?page=user" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>