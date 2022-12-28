<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            color: beige;
        }
    </style>
</head>
<body>
    <div class="container-fluid px-0">
    	<header>		
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary"> 
                <a class="navbar-brand" href="#">Universitas Singaperbangsa Karawang</a> 
                    <ul class="navbar-nav"> 
                        <li class="nav-item" <?php echo $__env->yieldContent('menu1'); ?>> 
                        <a class="nav-link" href="/dosen">Dosen</a>
                        </li> 
                        <li class="nav-item" <?php echo $__env->yieldContent('menu2'); ?>> 
                            <a class="nav-link" href="/mahasiswa">Mahasiswa</a> 
                        </li> 
                        <li class="nav-item" <?php echo $__env->yieldContent('menu3'); ?>> 
                            <a class="nav-link" href="/matakuliah">Mata Kuliah</a> 
                        </li> 
                    </ul> 
            </nav>		
        </header>	
    </div>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\Sistem_Informasi_Akademik_20067\resources\views/layout/master.blade.php ENDPATH**/ ?>