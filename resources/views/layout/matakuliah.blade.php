@extends('layout.master')
@section('title','Mata Kuliah')
@section('menu3','active')

@section('content')
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
@endsection