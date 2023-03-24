
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Datepicker Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body>
  <div class="container">
    <h1>Bootstrap Datepicker Example</h1>
    <div class="form-group">
      <label for="datepicker">Select a Date:</label>
      <input type="text" class="form-control" id="datepicker">
      <button id="my-button">Button</button>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script>
   const now = new Date();
const tt = [];

for (let i = 24; i >= 0; i--) {
  tt.push(new Date(now.getTime() - (i * 60 * 60 * 1000)));
}

console.log(tt);
  </script>
</body>
</html>
