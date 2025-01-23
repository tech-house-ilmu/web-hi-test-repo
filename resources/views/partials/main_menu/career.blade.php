<div class="container mt-5" id="testimoniSection">
    <div class="d-flex justify-content-between align-items-center mb-4">
       <!-- Tombol Add Testimoni -->
        <button class="btn btn-custom-warning px-4 me-1"onclick="showTestimoniInputSection()">
            <i class="fas fa-plus-circle"></i> Add Testimoni
        </button>
    </div>
    <div class="custom-card shadow-sm p-4 bg-white">
        <h5 class="text-black mb-2 pb-2">Testimoni Alumni</h5>
        <div class="testimoni-item bg-pink p-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('img/p2.jpg') }}" alt="p2" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;" />
                </div>
                <div class="col-md-6">
                    <h5 class="mb-1">Name</h5>
                    <p class="mb-1">Divisi</p>
                    <p class="mb-1">Batch</p>
                    <p class="mb-1">Description</p>
                </div>
                <div class="col-md-4 text-end">
                    <p class="text-muted time-text mb-0">09:32 a.m</p>
                </div>
            </div>
                <div class="d-flex justify-content-center gap-4">
                    <button class="btn btn-outline-primary btn-sm rounded-pill d-flex align-items-center justify-content-center">
                        <i class="fas fa-info-circle"></i>
                        <span class="me-4 ms-3">Detail</span>
                    </button>
                    <button class="btn btn-outline-secondary btn-sm rounded-pill d-flex align-items-center justify-content-center">
                        <i class="fas fa-edit"></i>
                        <span class="me-4 ms-4">Edit</span>
                    </button>
                    <button class="btn btn-outline-danger btn-sm rounded-pill d-flex align-items-center justify-content-center">
                        <i class="fas fa-trash-alt"></i>
                        <span class="ms-4 ms-3">Delete</span>
                    </button>
                </div>
        </div>
        <div class="testimoni-item bg-blue p-2">
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('img/p2.jpg') }}" alt="p2" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;" />
                </div>
                <div class="col-md-6">
                    <h5 class="mb-1">Name</h5>
                    <p class="mb-1">Divisi</p>
                    <p class="mb-1">Batch</p>
                    <p class="mb-1">Description</p>
                </div>
                <div class="col-md-4 text-end">
                    <p class="text-muted time-text mb-0">09:32 a.m</p>
                </div>
            </div>
               <div class="d-flex justify-content-center gap-4">
                <button class="btn btn-outline-primary btn-sm rounded-pill d-flex align-items-center justify-content-center">
                    <i class="fas fa-info-circle"></i>
                    <span class=" me-4 ms-3">Detail</span>
                </button>
                <button class="btn btn-outline-secondary btn-sm rounded-pill d-flex align-items-center justify-content-center">
                    <i class="fas fa-edit"></i>
                    <span class="me-4 ms-4">Edit</span>
                </button>
                <button class="btn btn-outline-danger btn-sm rounded-pill d-flex align-items-center justify-content-center">
                    <i class="fas fa-trash-alt"></i>
                    <span class=" me-2 ms-3">Delete</span>
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Form Create Testimoni -->
<div id="create-testimoni-form" class="container mt-5 d-none">
  <!-- Heading di luar form -->
  <div class="text-center mb-4 position-relative">
    <button class="btn back-button" onclick="showTestimoniSection()">
      <i class="fas fa-chevron-left"></i> Back
    </button>
    <h3 class="m-0">Create Testimoni</h3>
  </div>

  <!-- Container form -->
  <div class="row justify-content-center">
    <div class="col-md-6"> 
      <div class="custom-card-2 p-3 shadow-custom"> 
        <form>
          <div class="mb-2">
            <label for="name" class="form-label">Nama</label>
            <input type="text" id="name" class="form-control form-control-sm" placeholder="CIO" />
          </div>
          <div class="mb-2">
            <label for="batch" class="form-label">Batch</label>
            <input type="text" id="batch" class="form-control form-control-sm" placeholder="CIO" />
          </div>
            <div class="mb-2">
                <label for="division" class="form-label">Divisi</label>
                    <textarea id="division" class="form-control custom-textarea" placeholder="Hybrid event..."></textarea>
                    </div>
                    <div class="mb-2">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea id="description" class="form-control custom-textarea" placeholder="Customer CV Review..."></textarea>
            </div>
          <div class="mb-2">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" id="image" class="form-control form-control-sm" />
          </div>
        </form>
      </div>
        <div class="text-center">
            <button type="submit" class="btn btn-warning px-4">Create</button>
        </div>
    </div>
  </div>
</div>

