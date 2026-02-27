<h1>Edit Data Siswa</h1>

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf 
    @method('PUT')
    
    <div>
        <label>Nama Lengkap</label><br>
        <input type="text" name="nama" value="{{ $siswa->nama }}" required>
    </div>
    
    <div style="margin-top: 10px;">
        <label>Umur</label><br>
        <input type="number" name="umur" value="{{ $siswa->umur }}" required>
    </div>
    
    <div style="margin-top: 10px;">
        <label>Nilai</label><br>
        <input type="number" step="0.01" name="nilai" value="{{ $siswa->nilai }}" required>
    </div>
    
    <div style="margin-top: 20px;">
        <button type="submit">SIMPAN PERUBAHAN</button>
        <a href="{{ route('siswa.index') }}">Batal</a>
    </div>
</form>