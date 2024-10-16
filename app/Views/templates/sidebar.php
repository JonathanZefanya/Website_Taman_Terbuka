<div class="sidebar bg-gray-800 text-white w-64 min-h-screen flex flex-col items-center py-8">
    <img src="https://iti.ac.id/wp-content/uploads/2021/10/Logo-ITI-oke-1.png" alt="Logo-JAKARTA" class="logo w-24 mb-8">
    <a class="icons flex items-center mb-4 text-white hover:text-yellow-500" href="<?= site_url('mastering/dashboard') ?>">
        <i data-feather="home" class="mr-2"></i>
        <span>Dashboard</span>
    </a>
    <hr />
    <a class="icons flex items-center mb-4 text-white hover:text-yellow-500" href="<?= site_url('mastering/addPlace') ?>">
        <i data-feather="plus-circle" class="mr-2"></i>
        <span>Tempat Taman</span>
    </a>
    <div class="logout-link icons flex items-center mt-auto text-white hover:text-yellow-500">
        <a class="flex items-center w-full justify-center" href="<?= site_url('mastering/logout') ?>">
            <i data-feather="log-out" class="mr-2"></i>
            <span>Logout</span>
        </a>
    </div>
</div>

<script>
    feather.replace();
</script>
