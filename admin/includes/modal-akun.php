<div class="modal fade" id="userMenuModal" tabindex="-1" aria-labelledby="userMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userMenuModalLabel">Akun Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <i class="bi bi-person-circle" style="font-size: 4rem; color: var(--secondary-color);"></i>
                    <h4 class="mt-2"><?php echo htmlspecialchars($_SESSION['username']); ?></h4>
                    <p class="text-muted">Administrator</p>
                </div>
                <div class="list-group">
                    <a href="profile.php"
                        class="list-group-item list-group-item-action <?= (basename($_SERVER['PHP_SELF']) == 'profile.php') ? 'active' : '' ?>">
                        <i class="bi bi-person me-2"></i> Profil Saya
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="bi bi-key me-2"></i> Ubah Password
                    </a>
                    <a href="../auth/logout.php" class="list-group-item list-group-item-action text-danger">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>