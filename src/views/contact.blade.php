<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="card uper">
        <div class="card-header">
            Contact Us
        </div>
        <div class="card-body">
            <form action="{{route('contact')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Your Name Please">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Your Valid Email">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Your Query"></textarea>
                </div>
                <button type="submit" class="btn btn-primary"> Send </button>
            </form>
        </div>
    </div>
</body>
</html>