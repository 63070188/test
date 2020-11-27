<!DOCTYPE html>
<html>

<head>
  <title>Comment Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card-header bg-primary text-white d-flex justify-content-between">
     <h3>ADD</h4>
     <a href="index.php" class="btn btn-light">BACK</a>
    </div>
    <form action="insert.php" method="post" id="CommentForm">
      <div class="form-group mt-5">
        <label class="m-3" for="name">ชื่อสินค้า</label>
        <input type="text" class="form-control" name="product" id="idName" placeholder="Enter Product">
        <label class="m-3" for="comment">ราคาต่อหน่วย</label>
        <input type="text" class="form-control" name="price" id="idprice" placeholder="Enter price">
        <label class="m-3" for="link">ส่วนลด</label>
        <input type="text" class="form-control" name="discount" id="iddiscount" placeholder="Enter Discount">
        <input class="btn btn-success mt-5" type="submit" id="commentBtn">
      </div>
    </form>
  </div>
</body>
</html>
