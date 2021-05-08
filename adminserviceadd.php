<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../src/style/adminArea/style.css">
</head>

<body>
  <header role="banner">
    <h1>Admin Panel</h1>
    <ul class="utilities">
      <br>
      <li class="users"><a href="#">My Account</a></li>
      <li class="logout warn"><a href="">Log Out</a></li>
    </ul>
  </header>

  <nav role='navigation'>
    <ul class="main">
      <li class=" active">
        <a href="#">
          <i class="fa fa-tachometer"></i> Dashboard
        </a>
      </li>
    </ul>
  </nav>
  <main role="main">

    <section class="panel important">
      <h2>Service</h2>
    </section>

    <section class="panel important">
      <form action="$" method="post">
        <div class="row">
          <div class="col-6">
            <label for=""> Service title:</label>
            <input type="text" name="title" />
          </div>
          <div class="col-6">
            <label for=""> Service category:</label>

            <select name="cars" id="cars">
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="mercedes">Mercedes</option>
              <option value="audi">Audi</option>
            </select>
          </div>

          <div class="col-6">
            <label for=""> Service Price:</label>
            <input type="text" name="price" />
            <br>
          </div>
          <div class="col-6">
            <label for=""> Service Intro:</label>
            <textarea name="newstext" rows="8" cols="67"></textarea>
          </div>
          <div class="col-6">
            <label for=""> Service Description:</label>
            <textarea name="newstext" rows="15" cols="67"></textarea>
          </div>
          <div class="col-6 ">
            <label> Image </label>
            <input type="file" name="image" id="inp_image" accept="image/jpg, image/jpeg, image/png" placeholder=""
              onchange="readImageURLSlide(this);">
            <div class="image_container">
              <img id="inp_image_pre" src="#" style="width:100%" alt="your image" class="d-none" />
            </div>
          </div>
          <div class="col-12" style="text-align: center;">
            <p>
              <input type="submit" name="submit" value="Add" />
            </p>
          </div>
        </div>
        </div>
      </form>
    </section>

  </main>
  <script>

    function readImageURLSlide(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          document.getElementById("inp_image_pre").src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
      }
      document.getElementById("inp_image_pre").classList.remove('d-none');
    }
  </script>
</body>

</html>