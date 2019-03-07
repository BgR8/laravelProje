
<html>
<form action="" method="post">
    {{csrf_field()}}
    Başlık<input type="text" name="baslik">
    <br />
    İçerik<input type="text" name="icerik">
    <br />
    <input type="submit">
</form>

{{$haberler}}   
</html>