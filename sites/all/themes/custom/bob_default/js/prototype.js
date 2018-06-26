// Array - Shuffle //
function Addon() {
	this.shuffle = function(array) {
		var targetArray = array;
		var element = null;
		var length = targetArray.length;
		var shuffleArray = new Array();
		var index = 0;

		while(length > 0) {
			index = Math.floor(Math.random() * length);
			shuffleArray.push(targetArray[index]);
			targetArray.splice(index, 1);

			length = targetArray.length;
		}
		return shuffleArray;
	}
	this.replaceAll = function(str, searchValue, newValue) {
		var str = str;
		var replaceValue = str.split(searchValue).join(newValue);

		return replaceValue;
	}
}
