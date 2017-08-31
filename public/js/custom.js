/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    /*$('#calcForm').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fullName: {
                validators: {
                    notEmpty: {
                        message: 'The full name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not valid'
                    }
                }
            },
            title: {
                validators: {
                    notEmpty: {
                        message: 'The title is required and cannot be empty'
                    },
                    stringLength: {
                        max: 100,
                        message: 'The title must be less than 100 characters long'
                    }
                }
            },
            content: {
                validators: {
                    notEmpty: {
                        message: 'The content is required and cannot be empty'
                    },
                    stringLength: {
                        max: 500,
                        message: 'The content must be less than 500 characters long'
                    }
                }
            }
        }
    });*/
    
    $("#submit").click(function () {
	var lumpSum = $("#lumpSum").val();
        var lowerLimit = lumpSum * (2.5/100);
        var upperLimit = lumpSum * (17.5/100);
        
        var optionSelected = $('input:radio[name=valOption]:checked').val();
        
        if(optionSelected.toString() === 'Percentage')
        {
            alert(lumpSum);
        }
        alert('lala manje');
        return false;
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


