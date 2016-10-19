<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/static/app.css">
  <script src="/static/material.min.js"></script>
  <script src="/static/app.js"></script>
  <link rel="stylesheet" href="https:/fonts.googleapis.com/icon?family=Material+Icons">
  <title>Trash Panda Supply</title>
</head>
<body>
  <?php
    $kibble =
      array('description' => 'Raccoon Kibble 20lb' ,
                  'price' => 59.99                 );
    $bandanna =
      array('description' => 'Raccoon Bandanna' ,
                  'price' => 19.99              );
    $toy =
      array('description' => 'Chew toy for medium sized animals' ,
                  'price' => 9.99                                );
    $treats =
      array('description' => 'Raccoon Treats, Chicken Flavor 8oz' ,
                  'price' => 6.99                                 );
    $bed =
      array('description' => 'Soft plush bed for raccoons',
                  'price' => 79.99                        );

    $raccoon_supplies =
      array(
            $bandanna ,
            $bed      ,
            $kibble   ,
            $toy      ,
            $treats   ,
          );
  ?>
  <div class="mdl-layout mdl-js-layout">
    <main class="mdl-layout__content">
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col">
          <!-- Input Form -->
          <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <thead>
              <tr>
                <th>Item Number</th>
                <th class="mdl-data-table__cell--non-numeric">Description</th>
                <th>Unit price</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  foreach($raccoon_supplies as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . ($key + 1) . "</td>";
                    echo "<td>" . $value["description"] . "</td>";
                    echo "<td>" . $value["price"] . "</td>";
                    echo "</tr>";
                  }
                 ?>
            </tbody>
          </table>
            <form name="myfrom" action="" method="post">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" name="user" id="username">
              <label class="mdl-textfield__label" for="username">Address</label>
            </div>
            <br>
            <button type="submit" name="submit_form"
              class="mdl-button mdl-js-button
              mdl-button--raised mdl-button--colored
              mdl-js-ripple-effect">
              Submit
            </button>
          </form>
        </div>
        <div class="mdl-cell mdl-cell--8-col">
          <?php if(isset($_POST['submit_form'])){
            echo $_POST["user"];
          } ?>
        </div>
      </div>
    </main>
  </div>

</body>
</html>
