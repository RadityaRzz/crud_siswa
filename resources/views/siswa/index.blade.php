<h1>CRUD Siswa - UH Bu Siska</h1>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="number" name="umur" placeholder="Umur" required>
    <input type="number" step="0.01" name="nilai" placeholder="Nilai" required>
    <button type="submit">Tambah</button>
</form>

<table border="1" style="margin-top: 20px;">
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Nilai</th>
        <th>Aksi</th>
    </tr>
    @foreach($data as $s)
    <tr>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->umur }}</td>
        <td>{{ $s->nilai }}</td>
        <td>
            <a href="{{ route('siswa.edit', $s->id) }}">Edit</a>
            
            <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline">
                @csrf 
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>