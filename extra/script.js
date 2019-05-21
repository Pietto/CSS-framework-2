var profilepic = document.getElementById('profilepic');
profilepic.onclick=expandprofile

function expandprofile(){
	profilepic.style.cursor='zoom-out';			//stay
	profilepic.style.borderRadius='5vw';		//stay
	profilepic.onclick=inpandprofile			//stay
	profilepic.style.transform='scale(6)';
	profilepic.style.left='50%';
	profilepic.style.top='200px';
	profilepic.style.marginLeft='2.5vw';
	profilepic.style.transition='0';
}
function inpandprofile(){
	profilepic.style.transition='.4s';
	profilepic.style.cursor='zoom-in';
	profilepic.style.borderRadius='.75vw';
	profilepic.onclick=expandprofile
		profilepic.style.transform='scale(1)';
	setTimeout(function() {
		profilepic.style.top='0';
		profilepic.style.marginLeft='0';
		profilepic.style.left='auto';
	}, 500);
}





//	transform: rotate(45deg) scale(2,2);
//	transform: translate(center); 	