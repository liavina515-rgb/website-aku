<h1>Daftar Produk</h1>
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
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

