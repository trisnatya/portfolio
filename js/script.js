const txtElement = ['Web Developer', 'Graphic Designer'];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';
var message ="Function Disabled";

(function ngetik(){

	if(count == txtElement.length){
		count = 0;
	}

	currentTxt = txtElement[count];

	words = currentTxt.slice(0, ++txtIndex);
	document.querySelector('.efek-ngetik').textContent = words;

	if(words.length == currentTxt.length){
		count++;
		txtIndex = 0;
	}

	setTimeout(ngetik, 500);

})();

document.addEventListener('contextmenu', event => event.preventDefault());

document.oncontextmenu=new Function("return false")
document.onkeydown = function(e){
    if (e.ctrlKey && 
       (e.keyCode === 67 || 
		e.keyCode === 73 ||
		e.keyCode === 74 || 
		e.keyCode === 85 || 
		e.keyCode === 117)) {
            return false;
       	}
		if(e.keyCode === 123) {
			return false;
		} else {
			return true;
		}
};

console.log("")
console.log("mau nyontek ya :D")
console.log("")
