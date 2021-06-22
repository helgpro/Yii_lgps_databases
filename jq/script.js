/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    jQuery(function () {
        $("#selectbox").change(function () {
            location.href = $(this).val();
        })
    });


   jQuery(function () {
        $(".selectbox").change(function () {
            location.href = $(this).val();
        })
    });
