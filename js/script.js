const txtElement = [' Web Developer', ' Web Developer'];
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

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/66977f5a32dca6db2cb11c80/1i2vsiv2d';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
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
