<!-- Static Field for Nama -->
<div class="form-group">
    <div class='form-label'>Kode Matakuliah</div>
    <div>{{ $courses->code }}</div>
</div>

<div class="form-group">
    <div class='form-label'>Nama Matakuliah</div>
    <div>{{ $courses->name }}</div>
</div>

<!-- Static Field for Singkatan -->
<div class="form-group">
    <div class='form-label'>Singkatan</div>
    <div>{{ $courses->abbrev_name }}</div>
</div>

<!-- Static Field for for Nama Inggris -->
<div class="form-group">
    <div class='form-label'>Nama Matakuliah (Inggris)</div>
    <div>{{ $courses->foreign_name }}</div>
</div>

<!-- Static Field for for Singkatan (Inggris) -->
<div class="form-group">
    <div class='form-label'>Singkatan (Inggris)</div>
    <div>{{ $courses->abbrev_foreign_name }}</div>
</div>

<!-- Static Field for for SKS (Total) -->
<div class="form-group">
    <div class='form-label'>Total Sks</div>
    <div>{{ $courses->credit }}</div>
</div>

<!-- Static Field for for SKS Tatap Muka -->
<div class="form-group">
    <div class='form-label'>Sks Tatap Muka</div>
    <div>{{ $courses->theory_credit }}</div>
</div>

<!-- Static Field for for SKS Praktikum -->
<div class="form-group">
    <div class='form-label'>Sks Praktikum</div>
    <div>{{ $courses->lab_credit }}</div>
</div>

<!-- Static Field for for SKS Lapangan -->
<div class="form-group">
    <div class='form-label'>Sks Lapangan</div>
    <div>{{ $courses->field_credit }}</div>
</div>

<!-- Static Field for Semester -->
<div class="form-group">
    <div class='form-label'>Semester</div>
    <div>{{ $courses->semester }}</div>
</div>

<!-- Static Field for Deskripsi -->
<div class="form-group">
    <div class='form-label'>Keterangan Matakuliah</div>
    <div>{{ $courses->name }}</div>
</div>

<!-- Static Field for Jenis Mata Kuliah -->
<div class="form-group">
    <div class='form-label'>Jenis Matakuliah</div>
    @if( $courses->primary == '1')
        <div class="badge badge-lg badge-primary">Wajib</div>
    @else($courses->primary == '2')
        <div class="badge badge-lg badge-success">Pilihan</div>
    @endif
</div>
