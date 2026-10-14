<h1>Edit Produk</h1>
<form action="{{ route('produk.update', $produk->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p>
        <label>Nama Produk:</label>
        <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}">
    </p>
    <p>
        <label>Harga:</label>
        <input type="number" name="harga" value="{{ $produk->harga }}">
    </p>
    <p>
        <label>Stok:</label>
        <input type="number" name="stok" value="{{ $produk->stok }}">
    </p>
    <button type="submit">Simpan</button>
</form>

<p>
    <a href="{{ route('produk.index') }}">
        Kembali ke Produk
    </a>
</p>
