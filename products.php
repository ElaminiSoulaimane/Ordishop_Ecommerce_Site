<?php
session_start();

include("includes/connection.php");
include("includes/head.php");
include("includes/main.php");
include("includes/functions.php");
?>
<div class="container">
        <div class="row">

            <div class="col-md-3"> 
				<div class="list-group">
                    <br>
					<h3>Prix</h3>
					<input type="hidden" id="hidden_minimum_price" value="200" />
                    <input type="hidden" id="hidden_maximum_price" value="30000" />
                    <p id="price_show" style="color:black">200 - 30000</p>
                    <div id="price_range" style="color:black"></div>
                    <br>
                </div>		
                <div class="list-group">
					<h3>Catégorie</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php
                    $query = "SELECT cat_id,cat_title FROM categories ";
                    $runquery=mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($runquery))
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector category" value="<?php echo $row['cat_id']; ?>"  > <?php echo $row['cat_title']; ?></label>
                    </div>
                    <?php
                    }
                
                    ?>
                    </div>
                </div>
				<div class="list-group">
					<h3>Fabricant</h3>
                    <?php
                    $query = "
                    SELECT manufacturer_id,manufacturer_name FROM manufacturers
                    ";
                    $runquery=mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($runquery))
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector manufacturer" value="<?php echo $row['manufacturer_id']; ?>" > <?php echo $row['manufacturer_name']; ?> </label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
				
            </div>

            <div class="col-md-9">
            	<br/>
                <ul class="list filter_data"></ul> <!-- -->
            </div>
        </div>

    </div>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var search_term= $('#hidden_search_term').val();
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var category = get_filter('category');
        var manufacturer = get_filter('manufacturer');
        //var storage = get_filter('storage');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, category:category, manufacturer:manufacturer,terme:search_term},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:200,
        max:30000,
        values:[200, 30000],
        step:200,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
<br><br><br><br>
<?php include "includes/footer.php" ?>

</body>