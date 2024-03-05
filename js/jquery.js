$(document).ready(function () {
    'use strict';
    // code start..........
   
    // Increment qty
   $('.increment').click(function (e) { 
    e.preventDefault();
    var qtyInput = $(this).closest('.qtyBox').find('.qtyInput').val();
    var qtyInput = $(this).closest('.qtyBox').find('.product-Id').val();
    var value = parseInt(qtyInput);
    
    value = isNaN(value) ? 0 : value;
    if(value){
        value ++;
        $(this).closest('.qtyBox').find('.qtyInput').val(value);
    }
    
   });

   // Dicrement qty
   $('.dicrement').click(function (e) { 
    e.preventDefault();
    var qtyInput = $(this).closest('.qtyBox').find('.qtyInput').val();
    var qtyInput = $(this).closest('.qtyBox').find('.product-Id').val();
    var value = parseInt(qtyInput);
    value = isNaN(value) ? 0 : value;
    if(value){
        value --;
        $(this).closest('.qtyBox').find('.qtyInput').val(value);
    }
   
    
   });




    // data insert
    //    $('#bt').click(function (e) { 
    //     e.preventDefault();
    //     let fname = $('#fname').val
    //     let lname = $('#lname').val
    //     let data ={first_name: fname, last_name: lname}
    //     $.ajax({
    //        url: 'order.php',
    //        type: 'post',
    //        data: data,
    //        success:function(data){
    //         console.log(data);
    //        }

    //     }); // data insert end ...
        
   
});