

<?php require 'header.view.php'; ?>

<header>
    <div class="header-add">
        <div> <h1>Product Add</h1></div>
        <input class="submit-btn" type="submit" value="Save">
    </div>
    <hr>
</header>

<form class="main-form" method="POST" action="/submit-form.php">
    <ul>
        <li><label> SKU <article><input class="validate-empty" name="sku" type="text"></article></label></li>
        <li><label> Name  <article><input class="validate-empty" name="name" type="text"></article></label></li>
        <li><label> Price <article><input class="validate-number validate-empty" name="price" type="text"></article></label></li>
    </ul>

    <select class="type-switcher" name="type">
        <option selected disabled value="">Select product</option>
        <option value="Disc">Disc</option>
        <option value="Book">Book</option>
        <option value="Furniture">Furniture</option>
    </select>


    <ul class="product-type Disc">
      <div class="product-box">
          <li><label> Size <article><input class="validate-number validate-empty" name="size" type="text"></article></label></li>
          <p>Lorem ipsum</p>
        </div>
    </ul>


    <ul class="product-type Book">
      <div class="product-box">
          <li><label> Weight <article><input class="validate-number validate-empty" name="weight" type="text"></article></label></li>
          <p>Lorem ipsum</p>
        </div>
    </ul>


    <ul class="product-type Furniture">
      <div class="product-box">
          <li><label> Height <article><input class="validate-number validate-empty" name="height" type="text"></article></label></li>
          <li><label> Width <article><input class="validate-number validate-empty" name="width" type="text"></article></label></li>
          <li><label> Length <article><input class="validate-number validate-empty" name="length" type="text"></article></label></li>
          <p>Please provide dimensions in HxWxLx format</p>
        </div>
    </ul>
</form>




<?php require 'footer.view.php'; ?>
