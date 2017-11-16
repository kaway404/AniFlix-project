				var icon_not = document.getElementById('button-search');
				var dp = document.getElementsById('searchinput');
 			icon_not.addEventListener('click', function(e){
 				e.stopPropagation();
 				dp.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
				icon_not.style = 'opacity:0;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
				searchnome.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width.25s;';
 			});
			dp.addEventListener('click', function(e){
 				e.stopPropagation();
 				dp.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
				icon_not.style = 'opacity:0;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
				searchnome.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width 1.25s;';
 			});
		
