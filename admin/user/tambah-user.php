<div class="col-12 text-secondary">
    <div class="card">
        <div class="card-header">
            <a href="dashboard.php?page=user"
                class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
            <form method="POST" action="dashboard.php?page=simpan-user">
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <label for="username"><i class="fas fa-user"></i> Username</label>
                        <input type="text" class="form-control" name="username" id="username"
                            placeholder="Masukan Nama User" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="role"><i class="fas fa-user-tag"></i> Role</label>
                        <select class="form-control" name="role" id="role" required>
                            <option value="" selected disabled>"Pilih Role"</option>
                            <option value="Admin">Admin</option>
                            <option value="Petugas">Petugas</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-grup col-md-12">
                        <label for="email"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Email" required>
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <label for="password"><i class="fas fa-lock"></i> Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Masukan Password" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="copassword"><i class="fas fa-unlock"></i> Konfirmasi Passsword</label>
                        <input type="password" class="form-control" name="copasword" id="copassword"
                            placeholder="Konfirmasi Password" required>
                    </div>
                </div>
                <div class="mt-3 mb-3 text-right">
                    <button type="submit" name="simpan_data" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan</button>
                    <button type="reset" class="btn btn-danger">
                        <i class="fas fa-sync fa-spin"></i> Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>