
<?php $__env->startSection('title','Mata Kuliah'); ?>
<?php $__env->startSection('menu3','active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container fluid text-center mt-3 p-4 bg-secondary">
    <h1>Mata Kuliah</h1>
    <P>Berikut adalah mata kuliah prodi Teknik Informatika Universitas Singaperbangsa Karawang:</p>
    <ul class="list-group">
        <?php
        foreach ($matakuliah as $mk) {
            echo "<ol class='list-group-item'>$mk</ol>";
        }
        ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistem_Informasi_Akademik_20067\resources\views/layout/matakuliah.blade.php ENDPATH**/ ?>