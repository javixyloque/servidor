let array = [1,3,13,6,7,9,15];

const findOutlier = array => {
    let counter = 0;
    array.forEach(element => {
        if (element % 2 === 1) {
            counter++;
        } else {
            return counter;
        }
    });
    
}

console.log(findOutlier(array));