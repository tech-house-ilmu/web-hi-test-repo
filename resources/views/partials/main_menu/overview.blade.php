{{-- ini halaman overview. inget ini hanya contoh sementara, silahkan di costimize --}}

    <div class="container mt-4">
        <!-- Statistics Section -->
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text display-4">1,234</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Transactions</h5>
                        <p class="card-text display-4">Rp 45M</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Active Sessions</h5>
                        <p class="card-text display-4">567</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activities Section -->
        <div class="mt-5">
            <h3>Recent Activities</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <i class="fas fa-user-plus text-success me-2"></i> New user registered: <strong>John Doe</strong>
                </li>
                <li class="list-group-item">
                    <i class="fas fa-file-invoice-dollar text-primary me-2"></i> Transaction completed: Rp 5,000,000
                </li>
                <li class="list-group-item">
                    <i class="fas fa-database text-warning me-2"></i> Database backup completed successfully
                </li>
            </ul>
        </div>

        <!-- Chart Section -->
        <div class="mt-5">
            <h3>Performance Overview</h3>
            <canvas id="performanceChart"></canvas>
        </div>
    </div>


