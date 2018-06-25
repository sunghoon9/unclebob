// Array - Shuffle //
Array.prototype.shuffle = function() {
	var targetArray = this;
	var element = null;
	var length = targetArray.length;
	var shuffleArray = new Array();
	var index = 0;

	while(length > 0) {
		index = Math.floor(Math.random() * (length - 1));
		shuffleArray.push(targetArray[index]);
		targetArray.splice(index, 1);

		console.log('---------------');
	  console.log('length = ' + length);
	  console.log('index = ' + index);
		console.log(targetArray);
		console.log(shuffleArray);
	  console.log('---------------');

		length = targetArray.length;
	}

	return shuffleArray;
};

// String - replaceAll //

String.prototype.replaceAll = function(searchValue, newValue) {
	var str = this.toString();
	var replaceValue = str.split(searchValue).join(newValue);

	return replaceValue;
}
