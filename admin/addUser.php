<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="http://localhost/1703/1703cms/static/js/upload.js"></script>
    <link rel="stylesheet" href="http://localhost/1703/1703cms/static/css/bootstrap.css">
</head>
<body>
<form action="addUserCon.php" method="post">

        <div class="form-group">
            <label for="exampleInputEmail1">user</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="user" name="aname">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="apass">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">昵称</label>
            <input type="text" id="exampleInputFile" name="anicheng">
        </div>

    <div class="form-group parent">

    </div>
    <input type="hidden" value="" name="aphoto">
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

<script>
    var upobj=new upload();
    upobj.createView({
        parent:document.querySelector(".parent")
    })
    upobj.up("./upload.php",function(e){
        document.querySelector("input[type=hidden]").value=e.join(";");
    })
</script>
</body>
</html>