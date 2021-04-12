<div class="products-wrapper">
    <h1>Products</h1>
    
    
    <ul>
        <?php foreach($products as $product){ ?>
        <li><span>Продукт:-<?php echo $product["name"];?>|Цена:-<?php echo $product["price"];?></span>|Остаток:-<?php echo $product["cost"];?></span></li>     
        <?php } ?>
    </ul>

</div>


<h2>Експорт товаров</h2>



<a href="/export_xml">скачать XML&nbsp;</a>
<a href="/export_csv">скачать CSV&nbsp;</a>
<a href="/export_json">скачать json</a>




<h2> Вернуться на главную </h2>
<a href="/">главная</a></p>



