
	$('#cat').change(function(event) {
		var id= $(this).val()
		$.ajaxSetup({
			headers:{
				'X-CRSF-TOKEN':'<?=csrf_token()?>'
			}
		})
		$.ajax({
			url: '/ajax/category/'+id,
			type: 'GET',
			dataType: 'JSON',
			 data: {
              
            },
			success: function (data) {
                $('#sub').html('<option value="0">Seçin..</option>');
                for (var i = 0; i < data.length; i++) {
                    $('#sub').append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                }
            }
		});
	});


	$('#course').change(function(event) {
		var id= $(this).val()
		$.ajaxSetup({
			headers:{
				'X-CRSF-TOKEN':'<?=csrf_token()?>'
			}
		})
		$.ajax({
			url: '/ajax/course/'+id,
			type: 'GET',
			dataType: 'JSON',
			 data: {
              
            },
			success: function (data) {
                $('#section').html('<option value="0">Seçin..</option>');
                for (var i = 0; i < data.length; i++) {
                    $('#section').append('<option value="' + data[i].id + '">' + data[i].name + '</option>');
                }
            }
		});
	});

		
	