<h1>Daftar Produk</h1>

<p>
    <a href="{{ route('produk.create') }}">
        Tambah Produk
    </a>
</p>
@session('success')
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endsession
<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produks as $produk)
            <tr>
                <td>{{ $produk->id }}</td>
                <td>{{ $produk->nama_produk }}</td>
                <td>
                    {{ number_format($produk->harga) }}
                </td>
                <td>
                    {{ $produk->stok }}
                </td>
                <td>
                    <a href="{{ route('produk.show', $produk->id) }}">
                        Lihat Detail
                    </a>
                    <a href="{{ route('produk.edit', $produk->id) }}">
                        Edit
                    </a>
                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display: inline; ">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

