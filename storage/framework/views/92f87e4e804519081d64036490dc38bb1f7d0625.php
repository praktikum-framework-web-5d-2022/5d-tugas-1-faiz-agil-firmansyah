
<?php $__env->startSection('title','Data Tidak Ditemukan'); ?>


<?php $__env->startSection('content'); ?>
<div class="container fluid text-center mt-3 p-4 bg-white">
    <h1 class="alert alert-danger">Halaman Tidak Ditemukan!</h1>
    <P>Tekan tombol kembali untuk ke halaman utama</p>
    <a href="/dosen" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Kembali</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistem_Informasi_Akademik_20067\resources\views/fail.blade.php ENDPATH**/ ?>