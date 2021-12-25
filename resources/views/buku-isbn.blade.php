<!DOCTYPE HTML>
<html>
<body>
    <h1>Berdasarkan ISBN</h1>
        <table border="3">
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
</body>
</html>