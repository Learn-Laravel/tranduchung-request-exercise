<form action="/uploadfile" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="image">
    <button type="submit" name="upload">Upload File</button>
</form>