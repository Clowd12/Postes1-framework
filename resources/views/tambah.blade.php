<div class="container">
    <form class="form" action="/tambahbuku/store" method="Post">
        {{ csrf_field() }}
        Judul:
        <input type="text" name="judul" required><br>
        Image:
        <input type="text" name="image" required><br>
        Chapter:
        <textarea name="chapter" id="" cols="30" rows="10" required></textarea>
        <br><input type="submit" value="Tambah post">
    </form>
</div>