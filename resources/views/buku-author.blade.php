<!DOCTYPE HTML>
<html>
<body>
<center>
    <h1>Berdasarkan Author</h1>
        <table>
            <tr>
                <th>ISBN    : </th>
                <td>{{ $book->isbn }}</td>
            </tr>       
            <tr>
                <th>Judul   : </th>
                <td>{{ $book->judul }}</td>
            </tr>  
            <tr>
                <th>Author  : </th>
                <td>{{ $book->author }}</td>
            </tr>   
            <tr>
                <th>Tahun   : </th>
                <td>{{ $book->tahun }}</td>
            </tr>           
        </table>
</center>
</body>
</html>