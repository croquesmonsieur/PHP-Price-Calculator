

<form method ="post" >

    <label class="form-label" for="product">Product:</label>
        <select name="product" id="product">
            <?php foreach ($products as $product):?>
                <option value="<?php echo $product["name"]?>"><?php echo $product["name"]?></option>
            <?php endforeach; ?>
        </select>

    <label class="form-label" for="customer">Customer:</label>
    <select name="customer" id="customer">
        <?php foreach ($customers as $customer):?>
            <option value="<?php echo $customer["firstname"]?>"><?php echo $customer["firstname"]." ".$customer["lastname"]?></option>
        <?php endforeach; ?>
    </select>

    <input class="btn btn-primary ml-4" type="submit" value="Calculate" />

</form>