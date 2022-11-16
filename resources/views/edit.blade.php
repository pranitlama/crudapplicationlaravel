<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud app</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center">Edit</h1>
    <form action="{{route('update')}}" method="post">
       @csrf 
        <div class="container">
        <div class="mb-3">
                <input type="hidden" name="id" value="{{$data->id}}"class="form-control" id="exampleFormControlInput1" placeholder="id">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >Batch No.</label>
                <input type="text" name="batchno" class="form-control" value="{{$data->batchno}}" id="exampleFormControlInput1" placeholder="Batch no.">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" value="{{$data->quantity}}" id="exampleFormControlInput1" placeholder="Quantity">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status</label>
                <input type="text" name="status" class="form-control" value="{{$data->status}}"id="exampleFormControlInput1" placeholder="status">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Remark:</label>
                <textarea class="form-control" name="remark"id="exampleFormControlTextarea1" rows="3"> {{$data->remark}} </textarea>
            </div>
            <button type="submit" class="btn btn-primary d-flex justify-content-center">SAVE</button>
        </div>
    </form>
</body>
</html>