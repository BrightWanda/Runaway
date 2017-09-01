/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
        
    $("#submit").click(function () {
	var lumpSum = $("#lumpSum").val();
        var returnValue = $("#annualAmount").val();
        var lowerLimit = lumpSum * (2.5/100);
        var upperLimit = lumpSum * (17.5/100);
        
        var optionSelected = $('input:radio[name=valOption]:checked').val();
        
        if(optionSelected.toString() === 'Percentage')
        {
            if(returnValue < 2.5 || returnValue > 17.5)
            {
                alert('Percenatge out of bounds!!!')
                return false;
            }
                        
            $("#annualAmount").val(lumpSum * (returnValue/100));
            return true;
        }
        else
        { 
            if(returnValue < lowerLimit || returnValue > upperLimit)
            {
                alert('Amount out of bounds!!!')
                return false;
            }
        }
        
        return true;
    });

    $("#selectAmount").click(function () {
	$("#textValue").text("Annual Return Amount");
        $('#annualAmount').attr("placeholder","Amount should be between 2.5%-17.5% of lump sum amount");
    });
    
    $("#selectPercent").click(function () {
	$("#textValue").text("Annual Return Percentage Value");
        $('#annualAmount').attr("placeholder","Percentage should be between 2.5%-17.5%");
    });
});


