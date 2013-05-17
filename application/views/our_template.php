<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
        <a href='<?php echo site_url('examples/trucks_management')?>'>Trucks</a> | 
        <a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |
        <a href='<?php echo site_url('examples/groups_management')?>'>Groups</a> |
        <a href='<?php echo site_url('examples/tools_management')?>'>Tools</a> |
        <a href='<?php echo site_url('examples/film_management')?>'>Film</a> |
        <a href='<?php echo site_url('examples/actor_management')?>'>Actors</a> |
        <a href='<?php echo site_url('examples/category_management')?>'>Category</a> |
        <a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
        <a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> |
        <a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
       <a href='<?php echo site_url('examples/payments_management')?>'>Payments</a> |
       <a href='<?php echo site_url('examples/products_management')?>'>Products</a>
       
       
 
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<div><br />
&copy;2013 - Nick LaBrant  |  Footprint&reg;</div>
<!-- End of Footer -->
</body>
</html>