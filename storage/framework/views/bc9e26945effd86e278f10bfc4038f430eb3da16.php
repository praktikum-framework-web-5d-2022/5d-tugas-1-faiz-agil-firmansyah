
<?php $__env->startSection('title','Dosen'); ?>
<?php $__env->startSection('menu1','active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container fluid text-center mt-3 p-4 bg-secondary">
    <h1>Dosen</h1>
    <P>Berikut adalah nama Dosen prodi Teknik Informatika Universitas Singaperbangsa Karawang:</p>
    <ul class="list-group">
        <?php
        foreach ($dosen as $dsn) {
            echo "<ol class='list-group-item'>$dsn</ol>";
        }
        ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistem_Informasi_Akademik_20067\resources\views/layout/dosen.blade.php ENDPATH**/ ?>