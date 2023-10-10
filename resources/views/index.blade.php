
<a href="/tambah">+ Tambah File Post</a>
<br>
<br>

<table class="table">
    <tr>
        <th>Judul</th>
        <th>images</th>
        <th>Chapter</th>
    </tr>
    @foreach ($manhwa as $m)
    <tr>
        <td>{{$m->judul}}</td>
        <td><img src="{{$m->image}}" alt=""></td>
        <td>{{$m->chapter}}</td>
        <td>
            <a href="">Edit</a>
            <a href="">Hapus</a>
        </td>
    </tr>
        
    @endforeach
</table>