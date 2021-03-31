
function relocate_menu( page_id )
	{
		if ( page_id == 0 ) {
			var page = '/'
		} else if ( page_id == 6 ) { 
			var page = 'http://coredev.cf/'
		} else if ( page_id == 3 ) { 
			var page = '/register'
		} else {
			var page = '/page/'+page_id
		}
		location.href = page;
	} 


