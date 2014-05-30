/*$(document).ready(function(){
    $(".sort_title a").on('click', function(e){
      e.preventDefault();
      var t = $(this).html();
      var sort_cr=$("#edit-sort-order").val();

      if(t=='Код товара') {$("edit-sort-by").val('sku');}
      if(t=='Наименование товара') {$("edit-sort-by").val('title');}
      if(t=='Цена с НДС') {$("edit-sort-by").val('commerce_price_amount');}

      $("#edit-submit-products").click();
    });
});*/

/*sort_by=title&sort_order=ASC

<select id="edit-sort-by" name="sort_by" class="form-select"><option value="sku">Код товара</option>
<option value="title">Наименование товара</option>
<option value="commerce_price_amount">Цена</option></select>*/