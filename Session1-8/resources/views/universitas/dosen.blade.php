@extends('layout.master')

@section('kontenberita')
<div class="row">
    <div class="col-12">
        <h1>Dosen : <?php echo $dosen?></h1>
        <h2>Jurusan : <?php echo $jur; ?></h2>

        <h3>Daftar Mahasiswa</h3>
        <ul>
            <?php
                foreach ($daftarmahasiswa as $nama) {
                    echo "<li> $nama </li>";
                }
            ?>
        </ul>
    </div>
</div>
@endsection