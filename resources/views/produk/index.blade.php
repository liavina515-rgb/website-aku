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
            </tr>
        @endforeach
    </tbody>
</table>
