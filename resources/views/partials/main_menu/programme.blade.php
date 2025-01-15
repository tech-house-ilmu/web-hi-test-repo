<div class="programme-container p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <!-- Create Button -->
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createProgrammeModal">
            <i class="fas fa-plus-circle me-2"></i>Create
        </button>
        <a href="#" class="text-primary text-decoration-none">View All</a>
    </div>

    <div class="programme-list">
        <!-- Item 1 -->
        <div class="programme-item d-flex align-items-center py-3 border-bottom">
            <div class="programme-icon">
                <div class="rounded-circle bg-warning d-flex justify-content-center align-items-center" style="width: 60px; height: 60px;">
                    <i class="fas fa-user-alt fa-2x text-light"></i>
                </div>
            </div>
            <div class="programme-details ms-3 flex-grow-1">
                <h6 class="mb-1">Judul</h6>
                <p class="text-muted mb-0">Deskripsi</p>
            </div>
            <div class="programme-actions d-flex align-items-center gap-2">
                <button class="btn btn-outline-primary">Detail</button>
                <button class="btn btn-outline-primary">Edit</button>
                <button class="btn btn-outline-danger">Delete</button>
            </div>
            <div class="programme-time ms-3 text-muted">
                <small>09:54 am</small>
            </div>
        </div>

        <!-- Repeat Item -->
        <div class="programme-item d-flex align-items-center py-3 border-bottom">
            <div class="programme-icon">
                <div class="rounded-circle bg-warning d-flex justify-content-center align-items-center" style="width: 60px; height: 60px;">
                    <i class="fas fa-user-alt fa-2x text-light"></i>
                </div>
            </div>
            <div class="programme-details ms-3 flex-grow-1">
                <h6 class="mb-1">Judul</h6>
                <p class="text-muted mb-0">Deskripsi</p>
            </div>
            <div class="programme-actions d-flex align-items-center gap-2">
                <button class="btn btn-outline-primary">Detail</button>
                <button class="btn btn-outline-primary">Edit</button>
                <button class="btn btn-outline-danger">Delete</button>
            </div>
            <div class="programme-time ms-3 text-muted">
                <small>12:30 pm</small>
            </div>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div class="modal fade" id="createProgrammeModal" tabindex="-1" aria-labelledby="createProgrammeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createProgrammeModalLabel">Buat Programme Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukkan judul programme">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deskripsi"></textarea>
            </div>
            <div class="mb-3">
                <label for="goals" class="form-label">Goals</label>
                <textarea class="form-control" id="goals" rows="3" placeholder="Masukkan goals"></textarea>
            </div>
            <div class="mb-3">
                <label for="why" class="form-label">Why</label>
                <textarea class="form-control" id="why" rows="3" placeholder="Masukkan alasan"></textarea>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Images</label>
                <div class="custom-file">
                    <input type="file" class="form-control" id="images">
                    <label class="custom-file-label" for="images">Upload Images</label>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
