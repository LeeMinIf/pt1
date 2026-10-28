<?php
ob_start();
?>

<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-12 text-center">
            
            <div class="mb-4">
                <div class="d-inline-flex justify-content-center align-items-center bg-white shadow-sm rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                    <img src="images/logo.png" alt="Logo BareDash" style="width: 100%; height: auto;">
                </div>
            </div>

            <h1 class="fw-bold text-dark">BareDash</h1>
            <p class="text-muted">Welcome to the ordering system of BareDash</p>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>