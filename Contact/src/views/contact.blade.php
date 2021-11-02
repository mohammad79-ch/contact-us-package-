<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div style="width: 500px;margin: 20px auto">

            <form action="{{route("contact.send")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Nameid" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="Nameid" placeholder="Name">
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-10">
                        <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                    </div>

                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Send">

            </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
