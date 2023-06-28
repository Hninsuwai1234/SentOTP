<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center text-info">To Send OTP</h1> 
  <div class="mt-5 mb-5">
    <form action="{{route('sendSms')}}"  method="POST">
        @csrf
        <div class="mb-4 mt-4 col-4 offset-3">
            <label for="">Phone Number</label>
            <input type="text" name="phoneNumber" class="form-control">
        </div>
        <div class="mb-4 mt-4 col-4 offset-3">
            <label for="">Message</label>
            <textarea name="message" class="form-control" id="" cols="20" rows="10"></textarea>
        </div>
        <div class="mb-4 mt-2  offset-3">
            <button class="btn btn-sm bg-info text-white" type="submit">Send OTP</button>
        </div>
    </form>
    
</div> 
</body>
</html>