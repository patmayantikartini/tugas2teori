<!DOCTYPE HTML>
<html>
<body>
    <center>
    <h1>Daftar Buku</h1>
    <table  border ="2" height="30" width="900">
        <tr>
            <th>ISBN: </th>
            <th>Judul: </th>
            <th>Author: </th>
            <th>Tahun: </th>
        </tr>
        @foreach($books as $book)       
            <tr>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->tahun }}</td>
            </tr> 
        @endforeach         
    </table>
</center>
</body>
</html>