<div class="container my-5">
    <!-- Bagian Programme -->
    <div id="programmeSection">
        <div class="card p-2 shadow" style="border-radius: 15px;"> 
            <h4 class="mb-2">Programme</h4>
            <hr>
            <!-- Bagian 1 -->
            <div class="programme-item mb-2">
                <div class="d-flex align-items-center">
                    <div class="icon-container me-3">
                        <img src="{{ asset('img/p2.jpg') }}" alt="p2" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;" />
                    </div>
                    <div class="w-100">
                        <h5>Judul</h5>
                        <p class="text-muted mb-2">Deskripsi</p>
                        <div class="d-flex justify-content-between gap-5">
                            <button class="btn btn-outline-primary btn-sm rounded-pill flex-grow-1 me-4 d-flex align-items-center">
                                <i class="fas fa-info-circle me-6"></i>
                                <span class="flex-grow-1 text-center">Detail</span>
                            </button>
                            <button class="btn btn-outline-secondary btn-sm rounded-pill flex-grow-1 me-4 d-flex align-items-center">
                                <i class="fas fa-edit me-6"></i>
                                <span class="flex-grow-1 text-center">Edit</span>
                            </button>
                            <button class="btn btn-outline-danger btn-sm rounded-pill flex-grow-1 d-flex align-items-center">
                                <i class="fas fa-trash-alt me-6"></i>
                                <span class="flex-grow-1 text-center">Delete</span>
                            </button>
                        </div>
                    </div>
                    <div class="ms-auto text-muted small align-self-start me-4">09:54am</div>
                </div>
                <hr>
            </div>
            <!-- Bagian 2-->
            <div class="programme-item mb-2">
            <div class="d-flex align-items-center">
                <div class="icon-container me-3">
                <img src="{{ asset('img/p2.jpg') }}" alt="p2" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;" />
                </div>
                <div class="w-100">
                <h5>Judul</h5>
                <p class="text-muted mb-2">Deskripsi</p>
                <div class="d-flex justify-content-between gap-5">
                    <button class="btn btn-outline-primary btn-sm rounded-pill flex-grow-1 me-4 d-flex align-items-center">
                    <i class="fas fa-info-circle me-6"></i>
                    <span class="flex-grow-1 text-center">Detail</span> <!-- Teks di tengah -->
                    </button>
                    <button class="btn btn-outline-secondary btn-sm rounded-pill flex-grow-1 me-4 d-flex align-items-center">
                    <i class="fas fa-edit me-6"></i>
                    <span class="flex-grow-1 text-center">Edit</span> <!-- Teks di tengah -->
                    </button>
                    <button class="btn btn-outline-danger btn-sm rounded-pill flex-grow-1 d-flex align-items-center">
                    <i class="fas fa-trash-alt me-6"></i>
                    <span class="flex-grow-1 text-center">Delete</span> <!-- Teks di tengah -->
                    </button>
                </div>
                </div>
                <div class="ms-auto text-muted small align-self-start me-4">09:54am</div>
            </div>
            <hr>
            </div>

            <!-- Bagian 3 -->
            <div class="programme-item mb-2">
            <div class="d-flex align-items-center">
                <div class="icon-container me-3">
                <img src="{{ asset('img/p2.jpg') }}" alt="p2" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;" />
                </div>
                <div class="w-100">
                <h5>Judul</h5>
                <p class="text-muted mb-2">Deskripsi</p>
                <div class="d-flex justify-content-between gap-5">
                    <button class="btn btn-outline-primary btn-sm rounded-pill flex-grow-1 me-4 d-flex align-items-center">
                    <i class="fas fa-info-circle me-6"></i>
                    <span class="flex-grow-1 text-center">Detail</span> <!-- Teks di tengah -->
                    </button>
                    <button class="btn btn-outline-secondary btn-sm rounded-pill flex-grow-1 me-4 d-flex align-items-center">
                    <i class="fas fa-edit me-6"></i>
                    <span class="flex-grow-1 text-center">Edit</span> <!-- Teks di tengah -->
                    </button>
                    <button class="btn btn-outline-danger btn-sm rounded-pill flex-grow-1 d-flex align-items-center">
                    <i class="fas fa-trash-alt me-6"></i>
                    <span class="flex-grow-1 text-center">Delete</span> <!-- Teks di tengah -->
                    </button>
                </div>
                </div>
                <div class="ms-auto text-muted small align-self-start me-4">09:54am</div>
            </div>
            <hr>
            </div>
        </div>


  <!-- Tombol Create -->
    <div class="text-end mt-4">
        <button class="btn btn-warning btn-lg" onclick="showInputSection()">
            <i class="fas fa-plus-circle me-1"></i> Create
        </button>
    </div>
</div>
</div>

<!-- Bagian Inputan (Awalnya disembunyikan) -->
<div id="inputSection" class="d-none align-self-start">
    <div class="row mb-1 text-center align-self-start mt-0"> 
        <div class="col-12">
            <h1 class="form-title">Buat Programme Baru</h1>
        </div>
    </div>
    <div class="mb-1"> 
        <button class="btn back-button" onclick="showProgrammeSection()">
            <i class="fas fa-chevron-left" style="margin-left: -9px;"></i> Back
        </button>
    </div>
    <div class="container formprogramme-container"> 
        <form id="programmeForm" method="POST" action="/submit-programme">
            <div class="row mb-1"> 
                <div class="col-12">
                    <h7 class="card-title">Judul</h7>
                    <input type="text" name="title" class="form-control" placeholder="Contoh: Review CV" required>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-12">
                    <h7 class="card-title">Deskripsi</h7>
                    <textarea name="description" class="form-control" rows="2" placeholder="Hybrid event yang membahas tentang career preparation secara menyeluruh dari tiap tahapan recruitment." required></textarea>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-12">
                    <h7 class="card-title">Goals</h7>
                    <textarea name="goals" class="form-control" rows="2" placeholder=" . Customer CV Review dapat membuat CV yang sesuai dengan latar belakang pendidikan dan didukung oleh pengalamannya.&#10; . Customer CV Review mendapatkan feedback tentang CV-nya" required></textarea>
                </div>
            </div>
            <div class="row mb-1"> 
                <div class="col-12">
                    <h7 class="card-title">Why</h7>
                    <textarea name="why" class="form-control" rows="2" placeholder="Kebutuhan generasi muda akan platform review CV yang mudah dijangkau terutama dari segi harga." required></textarea>
                </div>
            </div>
            <div class="row mb-1"> 
                <div class="col-12">
                    <h7 class="card-title">Gambar</h7>
                    <input type="file" name="image" class="form-control" placeholder="Upload gambar" required>
                </div>
            </div>
        </form>
    </div>
    <div class="row justify-content-center mb-2">
        <div class="col-12 text-center">
            <button type="submit" class="btn submit-button btn-lg">Create</button>
        </div>
    </div>
</div>
