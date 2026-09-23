<h1>Daftar Produk</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produks as $key => $produk)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $produk['nama_produk'] }}</td>
                <td>
                    {{ number_format($produk['harga']) }}</td>
                <thead>
                    <tr>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="{{ route('produk.show', $key) }}">Details
                            </a>
                        </td>
                    </tr>
                </tbody>
            </tr>
        @endforeach
    </tbody>
</table>

