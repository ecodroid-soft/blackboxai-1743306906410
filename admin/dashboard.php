<?php
require_once '../functions.php';

// Check if user is logged in and is admin
if (!is_logged_in() || !is_admin()) {
    set_flash_message('danger', 'Access denied. Admin privileges required.');
    header('Location: ../login.php');
    exit();
}

// Get all users
$users = get_all_users();

include '../header.php';
?>

<div class="container">
    <div class="dashboard-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="mb-0">Admin Dashboard</h2>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title h5 mb-0">Registered Users</h3>
        </div>
        <div class="card-body">
            <?php if ($users && count($users) > 0): ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Registration Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($user['id']); ?></td>
                                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                                    <td><?php echo date('M d, Y', strtotime($user['created_at'])); ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" title="Edit User">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger ms-1" title="Delete User">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-info mb-0">
                    No users found in the system.
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card feature-card">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-3x mb-3 feature-icon"></i>
                    <h4>Total Users</h4>
                    <p class="h2 mb-0"><?php echo count($users); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card feature-card">
                <div class="card-body text-center">
                    <i class="fas fa-user-clock fa-3x mb-3 feature-icon"></i>
                    <h4>New Users (Today)</h4>
                    <p class="h2 mb-0">0</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card feature-card">
                <div class="card-body text-center">
                    <i class="fas fa-chart-line fa-3x mb-3 feature-icon"></i>
                    <h4>Active Services</h4>
                    <p class="h2 mb-0">0</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>