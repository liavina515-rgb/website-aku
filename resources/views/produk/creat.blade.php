<h1>Tambah Produk</h1>
<form action="{{ route('produk.store') }}" method="post">
    @csrf
    <p>
        <label>Nama Produk:</label>
        <input type="text" name="nama_produk">
    </p>
    <p>
        <label>Harga:</label>
        <input type="number" name="harga">
    </p>
    <p>
        <label>Stok:</label>
        <input type="number" name="stok">
    </p>
    <button type="submit">Simpan</button>
</form>

<p>
    <a href="{{ route('produk.index') }}">
        Kembali ke Produk
    </a>
</p>
