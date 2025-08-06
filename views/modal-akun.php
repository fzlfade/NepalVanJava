<!-- includes/modal_akun.php -->
<div class="modal fade" id="userMenuModal" tabindex="-1" aria-labelledby="userMenuLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="userMenuLabel">Akun Admin</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <p class="mb-3" style="color: #116530;">
          Anda masuk sebagai: <strong style="color: #116530;"><?= htmlspecialchars($_SESSION['username']) ?></strong>
        </p>
        <a href="../auth/logout.php" class="btn btn-danger w-75">Logout</a>
      </div>
    </div>
  </div>
</div>
