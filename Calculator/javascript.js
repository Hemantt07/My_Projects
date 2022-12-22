$(document).ready(function(){

	$(".symbol").click(function calculate(){

		var input = $(this).text() 

		$(document).on('keypress',function(e) {
		    if(e.which == 13) {
		        var math = $("#output").val();
					var res = eval(math);
					$("#output").val(res);
		    }
		});

		var val = $("#output").val();

		if ( input == "AC" ) {

			$("#output").val(" ");

		} else if ( input == "=" ) {

			var math = $("#output").val();
			var res = eval(math);
			$("#output").val(res);

		} else if ( input == "⌫" ) {

			var id = $("#output").val();
			var lastChar = id.substr(id.length - 1);
			var ind = id.lastIndexOf(lastChar);
			id = setCharAt( id, ind,'');
			$("#output").val( id );

		} else if( input == "." ) {

			var id = $("#output").val();
			if ( id.includes(".") ){

			} else{
				var newVal = val + input;
				$("#output").val( newVal );
			}

		} else {

			if( input == "/" || "+" || "-" || "%" || "*" || "%" ) {
				
				var id = $("#output").val();
				var last = id.substr(id.length - 1);

				if ( last == "/" || last == "*" || last == "+" || last == "-" || last == "/"   ){
					
				} else {
					
					var newVal = val + input;
					$("#output").val( newVal );
				}

			}

		}

	});

});



function setCharAt(str,index,chr) {
    if(index > str.length-1) return str;
    return str.substring(0,index) + chr + str.substring(index+1);
}